use pghci_privacy;

drop table if exists users;
drop table if exists privacy_index1;
drop table if exists privacy_index2;
drop table if exists privacy_index3;
drop table if exists efficacy_scale;
drop table if exists pretaskQ;
drop table if exists visQ;
drop table if exists privacyQ;
drop table if exists demographics;

-- create the user table
create table users(
	id varchar(50) not null primary key,
	pi1_id int, -- privacy index
	pi2_id int,
	pi3_id int,
	es_id int, -- efficacy scale
	pretask_id int, -- pretask questions
	vis_id int, -- vis questions
	privacy_id int, -- privacy questions
	dem_id int, -- demographics
	ip varchar(50),
	total_time int
	)
	ENGINE = InnoDB;

-- create the 1st privacy index table
create table privacy_index1(
	pi1_id int auto_increment not null primary key,
	user_id varchar(50) not null,
	q1 varchar(20) not null,
	q2 varchar(20) not null,
	q3 varchar(20) not null,
	q4 varchar(20) not null,
	q5 varchar(20) not null,
	q6 varchar(20) not null,
	total_spent int not null
	)
	ENGINE = InnoDB;

-- create the 2nd privacy index table
create table privacy_index2(
	pi2_id int auto_increment not null primary key,
	user_id varchar(50) not null,
	q1 varchar(20) not null,
	q2 varchar(20) not null,
	q3 varchar(20) not null,
	q4 varchar(20) not null,
	q5 varchar(20) not null,
	q6 varchar(20) not null,
	total_spent int not null
	)
	ENGINE = InnoDB;

-- create the 3rd privacy index table
create table privacy_index3(
	pi3_id int auto_increment not null primary key,
	user_id varchar(50) not null,
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
	time_spent int 
	)
	ENGINE = InnoDB;

-- create the efficacy scale table
create table efficacy_scale(
	es_id int auto_increment not null primary key,
	user_id varchar(50) not null,
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
	pretask_id int auto_increment not null primary key,
	user_id varchar(50) not null,
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
	vis_id int auto_increment not null primary key,
	user_id varchar(50) not null,
	vis_type varchar(20), -- do we still want the type?
	q1 int not null,
	q2 varchar(20) not null,
	q3 enum('true','false') not null,
	time_spent int not null
	)
	ENGINE = InnoDM;

-- create the privacy table
create table privacyQ(
	privacy_id int auto_increment not null primary key,
        user_id varchar(50) not null,
	signature varchar(100) not null,
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
	q6_a varchar(20) not null,
        q6_b varchar(20) not null,
        q6_c varchar(20) not null,
        q6_d varchar(20) not null,
	q6_e varchar(20) not null,
	q7 enum('A','B','C','D') not null,
	q8 enum('A','B','C','D') not null,
	q9 enum('true','false') not null,
	q10_a varchar(100) not null,
        q10_b varchar(100) not null,
        q10_c varchar(100) not null,
        q10_d varchar(100) not null,	
	q11 enum('A','B','C','D') not null,
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
	q21 enum('A','B','C','D') not null,
	q22 varchar(1000) not null,
        q23 varchar(1000) not null,
	q24 varchar(1000) not null,
	q25 varchar(1000) not null,
	time_spent int not null
	)
	ENGINE = InnoDM;

-- create the demographics table
create table demographics(
	dem_id int auto_increment not null primary key,
	user_id varchar(50) not null,
	q1 varchar(20) not null,
	q2 int not null,
	q3 char(20) not null,
	q4 enum('yes','no') not null,
	q5 enum('yes','no') not null,
	q6 varchar(30) not null,
	q7 varchar(1000),
	time_spent int
	)
	ENGINE = InnoDB;

