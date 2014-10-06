/* MaryBethKery and Laura M. Ascher

===== Form Validation ===== */

// Check if #validate_msg div box contains text parameter
function textInContainer(text) {
    return $("#validate_msg:contains('" + text + "')").length === 0;
}

// Check if all radio buttons have been checked
function radio_allChecked(form) {
    var checkedAll = true;
    var radioNames = [];
    $("#" + form + " :radio").each(function() {
        var name = $(this).attr("name");
        if (radioNames.indexOf(name) < 0) radioNames.push(name);
    });
    $.each(radioNames, function(key, value) {
        var radioChecked = $("input:radio[name='" + value + "']").is(":checked");
        checkedAll = checkedAll && radioChecked;
    });
    return checkedAll;
}

//Check if at least one checkbox has been selected
function checkboxes_someChecked(form) {
    var checked = true;
    var checkboxNames = [];
    $("#" + form + " :checkbox").each(function() {
        var name = $(this).attr("name");
        if (checkboxNames.indexOf(name) < 0) checkboxNames.push(name);
    });
    //console.debug(checkboxNames);
    $.each(checkboxNames, function(key, value) {
        //console.debug(key+"  "+value+" "+$("input:checkbox[name='" + value + "']").is(":checked"));
        var valChecked = $("input:checkbox[name='" + value + "']").is(":checked");
        checked = checked && valChecked;
    });
    return checked;
}

//Check all textareas contain something
function textareas_allFilled(form) {
    var checked = true;
    var texAreaNames = [];
     $( document.getElementsByTagName( "textarea" ) ).each(function() {
        var name = $(this).attr("name");
        if (texAreaNames.indexOf(name) < 0) texAreaNames.push(name);
    });
   //console.debug(texAreaNames);
    $.each(texAreaNames, function(key, value) {
        var valChecked = !$.trim($(document.getElementsByName(value))[0].value);
        console.debug(key+" "+value+" "+valChecked);
        checked = checked && !valChecked;
    });
    return checked;
}

//check that all items on rank lists have been ranked
function ranklist_allRanked()
{
    var whitespace = new RegExp("\\s", "g");

    var q9data = "";
    $("#ranked_q9 li").each(function(i, el){
        var p = $(el).text().toLowerCase().replace(whitespace, "_");
        q9data += p+"="+$(el).index()+",";
    });
    console.debug(q9data.slice(0, -1));
    $("consent_q > [name='consent_opin_q9']").val(q9data.slice(0, -1));

    var q10data = "";
    $("#ranked_q10 li").each(function(i, el){
        var p = $(el).text().toLowerCase().replace(whitespace, "_");
        q10data += p+"="+$(el).index()+",";
    });
    console.debug(q10data.slice(0, -1));
    $("consent_q > [name='consent_opin_q10']").val(q10data.slice(0, -1));
}

// Update pop-up validation message
function updateWarningText(container, text) {
    var text_newHtml = container.html().replace(text, '');
    container.html(text_newHtml);
}

// Form validation
function validateForm_consent(submit, form, container) {
    var closeBtn = "<div id='exitBtn'>X</div>";
    container.hide();
    submit.click(function(event) {
        event.preventDefault();
        if (container.find($("#exitBtn")).size() === 0) {
            container.append(closeBtn);
        }

        ranklist_allRanked();//put ranking data into form
        //Check if form was filled out appropriately
        var rd_allChecked = radio_allChecked($(form).attr('id'));
        console.debug("radioButtons: "+rd_allChecked);
        //r unrankedList = $(form).find("unranked_q9");
        //r rankedList9_filled = unrankedList.children.length == 0;
        var textarea_filled = textareas_allFilled($(form).attr('id'));
        console.debug("text areas: "+textarea_filled);

        var ck_someChecked = checkboxes_someChecked($(form).attr('id'));
        console.debug("checkboxes: "+ck_someChecked);

        var onlyError = "Please answer all the survey questions to continue.";
        var onlyError_none = textInContainer(onlyError);
        if (ck_someChecked && rd_allChecked && textarea_filled) {
            form.submit();
        } else {
			container.append(onlyError+"<p>");
            container.fadeIn(500, 0, function() {
                container.show();
            });
            $('#exitBtn').on('click', container, function() {
                container.fadeOut(300, 0, function() {
                    container.hide(function() {
                        container.html("");
                    });
                });
            });

        }
    });
}