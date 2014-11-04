$(function(){
    $("#compQuestions").load("consent_postsurvey1.php"); 
    $("#opinQuestions").load("consent_postsurvey2.php"); 

   init_accordion();
    
    //Form validation
    var submit_id = $("#Submit_ConsentTask");
    var form_id = $("#consent_q");
    var validateWarning = $("#validate_msg");
    

   var closeBtn = "<div id='exitBtn'>X</div>";
    validateWarning.hide();
    if (validateWarning.find($("#exitBtn")).size() === 0) {
        validateWarning.append(closeBtn);
    }

    //validateForm_consent(validateWarning);
});

 var $accordion;
function init_accordion()
{
    $accordion = $( "#consent_accordion" ).accordion({
      collapsible: true,
      active: false,
      heightStyle: "content",
      autoHeight: false,
    });

     var step = 0;
    $("#consent_accordion").children("h3").each(function() {
        $(this).addClass("ui-state-disabled");
        $(this).attr('id',  "consentStep_"+step);
        step++;
    });
    $("#consentStep_0").removeClass("ui-state-disabled");//set the first step enabled
    $accordion.accordion("option","active",0);//set the first step open
}

function openNextAccordionPanel() {
    var current = $accordion.accordion("option","active"),
        maximum = $accordion.find("h3").length,
        next = current+1 === maximum ? 0 : current+1;
    $("#consentStep_"+next).removeClass("ui-state-disabled");
    $accordion.accordion("option","active",next);
    
    $('html, body').animate({
        scrollTop: $("#consentStep_"+(next-1)).offset().top
    });
}