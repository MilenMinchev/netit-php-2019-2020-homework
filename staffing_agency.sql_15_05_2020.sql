
-- DDL
/*SQL*/

CREATE DATABASE staffing_agency; 
DROP DATABASE staffing_agency;

CREATE TABLE staffing_agency.posts (
 id               INTEGER PRIMARY KEY AUTO_INCREMENT,
 title            VARCHAR(36)  NOT NULL,
 preview_contet   VARCHAR(36)  NOT NULL,
 content          TEXT NOT NULL
 );
 
 CREATE TABLE staffing_agency.groups (
 id               INTEGER PRIMARY KEY AUTO_INCREMENT,
 title            VARCHAR(256)  NOT NULL,
 priority         INTEGER DEFAULT 0
  );
  
 CREATE TABLE staffing_agency.staffing_agency_groups_posts (
 posts_id                INTEGER,
 groups_id               INTEGER
  ); 

CREATE TABLE staffing_agency.users (
 id         INTEGER AUTO_INCREMENT PRIMARY KEY,
 username   VARCHAR(256) NOT NULL,
 email      VARCHAR(156) NOT NULL, -- PRIMARY KEY 
 password   VARCHAR(156) NOT NULL,
 role       TINYINT DEFAULT 0
 );

CREATE TABLE staffing_agency.hr (
 id         INTEGER AUTO_INCREMENT PRIMARY KEY,
 fname      VARCHAR(36)  NOT NULL,
 lname      VARCHAR(36)  NOT NULL,
 mobail     VARCHAR(15)  NOT NULL, -- PRIMARY KEY
 email      VARCHAR(156) NOT NULL, -- PRIMARY KEY 
 address    VARCHAR(256),
 age        VARCHAR(10),
 role       VARCHAR(156) NOT NULL,
 password   VARCHAR(156) NOT NULL 
 );

CREATE TABLE staffing_agency.menus (
 id               INTEGER AUTO_INCREMENT PRIMARY KEY,
 title            VARCHAR(256)  NOT NULL,
 placeholder      VARCHAR(256)
 );
 
 CREATE TABLE staffing_agency.menus_items (
 id               INTEGER AUTO_INCREMENT PRIMARY KEY,
 menus_id         INTEGER,
 title            VARCHAR(256)  NOT NULL,
 link             VARCHAR(256)
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
 
 select * from staffing_agency.users
 
-- select * from staffing_agency.employ
-- select * from staffing_agency.employer
-- DML
-- SELECT / INSERT / UPDATE / DELETE
-- CREATE / READ / UPDATE / DELETE (CRUD)
-- INSERT INTO employ()