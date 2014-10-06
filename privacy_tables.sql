-- make sure all the questions match up

use pghci_privacy;

drop table if exists users;
drop table if exists privacy_index;
drop table if exists efficacy_scale;
drop table if exists pretaskQ;
drop table if exists visQ;
drop table if exists privacyQ;
drop table if exists demographics;

-- create the user table
create table users(
	id varchar(50) not null primary key,
	pi_id int not null, -- privacy index
	es_id int not null, -- efficacy scale
	pretask_id int not null, -- pretask questions
	vis_id int not null, -- vis questions
	privacy_id int not null, -- privacy questions
	dem_id int not null, -- demographics
	ip varchar(50) not null,
	total_time int not null
	)
	ENGINE = InnoDB;

-- create the privacy index table
create table privacy_index(
	user_id varchar(50) not null,
	pi_id int auto_increment not null primary key,
	q1 varchar(20) not null,
	q2 varchar(20) not null,
	q3 varchar(20) not null,
	q4 varchar(20) not null,
	q5 varchar(20) not null,
	q6 varchar(20) not null,
	q7 varchar(20) not null,
	q8 varchar(20) not null,
	q9 varchar(20) not null,
	q10 varchar(20) not null,
	q11 varchar(20) not null,
	q12 varchar(20) not null,
	q13 varchar(20) not null,
	q14 varchar(20) not null,
	q15 varchar(20) not null,
	q16 varchar(20) not null,
	q17 varchar(20) not null,
	q18 varchar(20) not null,
	q19 varchar(20) not null,
	q20 varchar(20) not null,
	q21 varchar(20) not null,
	q22 varchar(20) not null,
	q23 varchar(20) not null,
	q24 varchar(20) not null,
	q25 varchar(20) not null,
	q26 varchar(20) not null,
	q27 varchar(20) not null,
	q28 varchar(20) not null,
	time_spent int 
	)
	ENGINE = InnoDB;

-- create the efficacy scale table
create table efficacy_scale(
	user_id varchar(50) not null,
	es_id int auto_increment not null primary key,
	q1 varchar(20) not null,
	q2 varchar(20) not null,
	q3 varchar(20) not null,
	q4 varchar(20) not null,
	q5 varchar(20) not null,
	q6 varchar(20) not null,
	q7 varchar(20) not null,
	q8 varchar(20) not null,
	q9 varchar(20) not null,
	q10 varchar(20) not null,
	time_spent int not null
	)
	ENGINE = InnoDB;

-- create the tutorial table
create table pretaskQ(
	user_id varchar(50) not null,
	tutorial_id int auto_increment not null primary key,
	q1 enum('true','false') not null,
	q2 enum('10','50','99') not null,
	q3 enum('true','false') not null,
	q4 enum('true','false') not null,
	q5 enum('true','false') not null,
	q6 enum('true','false') not null,
	time_spent int not null
	)
	ENGINE = InnoDB;

-- create the vis table
create table visQ(
	user_id varchar(50) not null,
	vis_id int auto_increment not null primary key,
	vis_type varchar(20), -- do we still want the type?
	q1 int not null,
	q2 varchar(20) not null,
	q3 varchar(500) not null,
	q4 varchar(20) not null,
	q5 varchar(20) not null,
	q6_a char(11) not null,
	q6_b char(11) not null,
	q6_c char(13) not null,
	q6_d char(12) not null,
	q6_e char(8) not null,
	q6_f char(9) not null,
	q6_g char(12) not null,
	q6_h char(11) not null,
	time_spent int not null
	)
	ENGINE = InnoDM;

-- create the privacy table
create table privacyQ(
        user_id varchar(50) not null,
	privacy_id int auto_increment not null primary key,
	signature enum('authorize','decline') not null,
	explanation varchar(1000) not null,
	q1 enum('true','false') not null,
	q2 enum('true','false') not null,
	q3_a varchar(100) not null,
        q3_b varchar(100) not null,
        q3_c varchar(100) not null,
        q3_d varchar(100) not null,
	q4_a varchar(100) not null,
        q4_b varchar(100) not null,
        q4_c varchar(100) not null,
        q4_d varchar(100) not null,
	q5 enum('true','false') not null,
	q6_a char(20) not null,
        q6_b char(20) not null,
        q6_c char(20) not null,
        q6_d char(20) not null,
	q6_e char(20) not null,
	q7 enum('a','b','c','d') not null,
	q8 enum('a','b','c','d') not null,
	q9 enum('true','false') not null,
	q10_a varchar(100) not null,
        q10_b varchar(100) not null,
        q10_c varchar(100) not null,
        q10_d varchar(100) not null,	
	q11 enum('a','b','c','d') not null,
	q12_a varchar(100) not null,
        q12_b varchar(100) not null,
        q12_c varchar(100) not null,
        q12_d varchar(100) not null,
	q13 enum('true','false') not null,
	q14_a varchar(100) not null,
        q14_b varchar(100) not null,
        q14_c varchar(100) not null,
        q14_d varchar(100) not null,
	q15 enum('true','false') not null,
	q16 varchar(20) not null,
        q17 varchar(20) not null,
    	q18 varchar(20) not null,
    	q19 varchar(20) not null,
    	q20 varchar(20) not null,
	q21 enum('a','b','c','d') not null,
	q22 varchar(1000),
        q23 varchar(1000),
	-- q24 (ranking question how the fuck do you do this
	-- q25 (there are two of them)
	time_spent int not null
	)
	ENGINE = InnoDM;

-- create the demographics table
create table demographics(
	user_id varchar(50) not null,
	dem_id int auto_increment not null primary key,
	q1 enum('female','male','other'),
	q2 int,
	q3 char(20),
	q4 enum('yes','no'),
	q5 enum('yes','no'),
	q5 varchar(30),
	time_spent int
	)
	ENGINE = InnoDB;