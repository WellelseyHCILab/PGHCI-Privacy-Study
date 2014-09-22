-- prefix 'c' stands for 'consent form'
use pgvis_for_get;

-- tables for all conditions
drop table if exists cUser;
drop table if exists cIndex;
drop table if exists cPretask;
drop table if exists cVis;
drop table if exists cConsent;
drop table if exists cDem;

-- create the user table
create table cUser(
	id varchar(50) not null primary key,
	pretask_id int,
	table_id int,
	treemap_id int,
	bar_id int,
	bubble_id int,
	demo_id int,
	ip varchar(50),
	total_time int
	)
	ENGINE = InnoDB;

-- create the privacy index table
create table cIndex(

-- create the pretask table
create table cPretask(
	pretask_id int auto_increment not null primary key,
	user_id varchar(50),
	q1 enum('true','false') not null,
	q2 enum('10','50','99') not null,
	q3 enum('true','false') not null,
	q4 enum('true','false') not null,
	q5 enum('true','false') not null,
	q6 enum('true','false') not null,
	time_spent int
	)
	ENGINE = InnoDB;

-- create the visualization table
create table cVis(
	vis_id int auto_increment not null primary key,
	user_id varchar(50),
	vis_type enum('table','treemap','bar','bubble') not null,
	q1 int not null,
	q2 int not null,
	q3 varchar(20) not null,
	q4 varchar(20) not null,
	q5 varchar(20) not null,
	q6 varchar(500) not null,
	q7 varchar(20) not null,
	q8 varchar(20) not null,
	q9_a char(11) not null, -- not sure I completely understand here
	q9_b char(11) not null,
	q9_c char(13) not null,
	q9_d char(12) not null,
	q9_e char(8) not null,
	q9_f char(9) not null,
	q9_g char(12) not null,
	q9_h char(11) not null,
	q10_a enum('1','2','3','4','5','6','7') not null,
	q10_b enum('1','2','3','4','5','6','7') not null,
    q10_c enum('1','2','3','4','5','6','7') not null,
    q10_d enum('1','2','3','4','5','6','7') not null,
    q10_e enum('1','2','3','4','5','6','7') not null,
    q10_f enum('1','2','3','4','5','6','7') not null,
    q10_g enum('1','2','3','4','5','6','7') not null,
    q11 varchar(500),
	q12 varchar(500),
    time_spent int
	)
	ENGINE = InnoDB;

-- create the consent form table
create table cConsent(

-- create the demographics table
create table NEW_DEMOGRAPHS(
	dem_id int auto_increment not null primary key,
	user_id varchar(50),
	q1 int,
	q2 enum('female','male','other'),
	q3 char(20),
	q4 enum('yes','no'),
	q5 enum('yes','no'),
	q6 varchar(20),
	q7 varchar(20),
	time_spent int
	)
	ENGINE = InnoDB;

-- tables for specific conditions
