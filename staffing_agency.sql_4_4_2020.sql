
-- DDL
/*SQL*/

CREATE DATABASE staffing_agency; 
DROP DATABASE staffing_agency;

CREATE TABLE staffing_agency.hr (
 id_hr         INTEGER PRIMARY KEY AUTO_INCREMENT,
 fname_hr      VARCHAR(36)  NOT NULL,
 lname_hr      VARCHAR(36)  NOT NULL,
 mobail_hr     VARCHAR(15)  NOT NULL, -- PRIMARY KEY
 email_hr      VARCHAR(156) NOT NULL, -- PRIMARY KEY 
 role_hr       VARCHAR(156) NOT NULL,
 password_hr   VARCHAR(156) NOT NULL 
 );

CREATE TABLE staffing_agency.employ (
 id               INTEGER PRIMARY KEY AUTO_INCREMENT,
 fname            VARCHAR(36) NOT NULL,
 lname            VARCHAR(36) NOT NULL,
 age              VARCHAR(2),
 sex              VARCHAR(7),
 address          VARCHAR(156),
 mobail           VARCHAR(15) NOT NULL, -- PRIMARY KEY
 email            VARCHAR(156)NOT NULL, -- PRIMARY KEY
 education        VARCHAR(156),
 role             VARCHAR(156),
 department       VARCHAR(156),
 experience       VARCHAR(256),
 password         VARCHAR(156) NOT NULL
);

CREATE TABLE staffing_agency.employer (
 id_employer        INTEGER PRIMARY KEY AUTO_INCREMENT,
 company            VARCHAR(36)  NOT NULL,
 presentation       VARCHAR(556) NOT NULL,
 staff_fname        VARCHAR(36)  NOT NULL,
 staff_lname        VARCHAR(36)  NOT NULL,
 mobail_persons     VARCHAR(15)  NOT NULL, -- PRIMARY KEY
 email_persons      VARCHAR(156) NOT NULL, -- PRIMARY KEY
 free_job           VARCHAR(156) NOT NULL,
 department_free    VARCHAR(156),
 education_worker   VARCHAR(156),
 sex_worker         VARCHAR(7),
 experience_worker  VARCHAR(256),
 password_staff     VARCHAR(156) NOT NULL
);

 select * from staffing_agency.hr
-- select * from staffing_agency.employ
-- select * from staffing_agency.employer
-- DML
-- SELECT / INSERT / UPDATE / DELETE
-- CREATE / READ / UPDATE / DELETE (CRUD)
-- INSERT INTO employ()