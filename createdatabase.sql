/* Create schema */
CREATE DATABASE  Learning_Management_System; 
               
/* Specify the database to use */               
USE Learning_Management_System;

CREATE TABLE Course_Info  
(
  cNum CHAR(10) NOT NULL,
  cName CHAR(50) NOT NULL,
  CONSTRAINT Course_InfoPK PRIMARY KEY (cNum),
  CONSTRAINT CNameSK UNIQUE (cName)
);    

/* Create the User table */                                         
CREATE TABLE User    
(
  Identifier CHAR(10) NOT NULL,
  loginID CHAR(25) NOT NULL,
  fname CHAR(20) NOT NULL,
  lname CHAR(20) NOT NULL,
  CONSTRAINT UserPK PRIMARY KEY (Identifier)
);

/* Create the Course table*/                              
CREATE TABLE Course  
(
  cNum CHAR(10) NOT NULL,
  year INT NOT NULL,
  semester CHAR(6) NOT NULL,
  instructor_Identifier CHAR(10) NOT NULL,
  CONSTRAINT CoursePK PRIMARY KEY (cNum,year,semester),
  CONSTRAINT CNUMFK FOREIGN KEY (cNum) REFERENCES Course_Info(cNum),
  CONSTRAINT InsIDFK FOREIGN KEY (instructor_Identifier) REFERENCES User(Identifier)
);         

     

/* Create the Takes table */                                                                     
CREATE TABLE Takes    
(
  Student_Identifier CHAR(10) NOT NULL,
  cNum CHAR(10) NOT NULL,
  year INT NOT NULL,
  semester CHAR(6) NOT NULL,
  CourseGrade  CHAR(3),
  CONSTRAINT TakesPK PRIMARY KEY (Student_Identifier, cNum, year, semester),
  CONSTRAINT TakesStudFK FOREIGN KEY (Student_Identifier) REFERENCES User(Identifier),
  CONSTRAINT TakesCourFK FOREIGN KEY (cNum, year, semester) REFERENCES Course(cNum, year, semester)
);   



  

CREATE TABLE Assignment  
(
  cNum CHAR(10) NOT NULL,
  year INT NOT NULL,
  semester CHAR(6) NOT NULL,
  AssignmentID CHAR(20) NOT NULL,
  dueDate DATETIME,
  text VARCHAR (300),
  points INT NOT NULL,
  CONSTRAINT AssignPK PRIMARY KEY (cNum, year, semester, AssignmentID),
  CONSTRAINT AssignCourFK FOREIGN KEY (cNum, year, semester) REFERENCES Course(cNum, year, semester)
);    

CREATE TABLE Grades  
(
  Student_Identifier CHAR(10) NOT NULL,
  cNum CHAR(10) NOT NULL,
  year INT NOT NULL,
  semester CHAR(6) NOT NULL,
  Assignment1Grade DECIMAL(3,1),
  Assignment2Grade DECIMAL(3,1),
  Assignment3Grade DECIMAL(3,1),
  Assignment4Grade DECIMAL(3,1),
  Assignment5Grade DECIMAL(3,1),
  Assignment6Grade DECIMAL(3,1),
  Assignment7Grade DECIMAL(3,1),
  Assignment8Grade DECIMAL(3,1),
  Assignment9Grade DECIMAL(3,1),
  Assignment10Grade DECIMAL(3,1),
  CONSTRAINT GradePK PRIMARY KEY (Student_Identifier,cNum, year, semester),
  CONSTRAINT StudGradeFK FOREIGN KEY (Student_Identifier) REFERENCES User(Identifier),
  CONSTRAINT GradeCourFK FOREIGN KEY (cNum, year, semester) REFERENCES Course(cNum, year, semester)
);    

/* Create the Assists table */                                                                     
CREATE TABLE Assists    
(
  TA_Identifier CHAR(10) NOT NULL,
  cNum CHAR(10) NOT NULL,
  year INT NOT NULL,
  semester CHAR(6) NOT NULL,
  TAFName CHAR(20),
  TALName CHAR(20),
  CONSTRAINT AssitsPK PRIMARY KEY (TA_Identifier, cNum, year, semester),
  CONSTRAINT TAFK FOREIGN KEY (TA_Identifier) REFERENCES User(Identifier),
  CONSTRAINT AssitsCourFK FOREIGN KEY (cNum, year, semester) REFERENCES Course(cNum, year, semester)
);     


/* Create the Post_author_info */                                                    
CREATE TABLE Post_author_info 
(
  postAuthorID CHAR(10) NOT NULL,
  AuthorFName CHAR(20) NOT NULL,
  AuthorLName CHAR(20) NOT NULL,
  CONSTRAINT PostAuth_infoPK PRIMARY KEY (postAuthorID),
  CONSTRAINT PostAuth_infoFK FOREIGN KEY (postAuthorID) REFERENCES User(Identifier)
);   

/* Create the Post_tag */                                                    
CREATE TABLE Post_tag 
(
  tagID INT,
  tag_Name CHAR(20),
  CONSTRAINT tagPK PRIMARY KEY (tagID),
  CONSTRAINT tagNameSK UNIQUE (tag_Name)
);  


/* Create the Post table */                                                               
CREATE TABLE Post 
(
  postTitle   CHAR(100) NOT NULL,
  postAuthorID CHAR(10) NOT NULL,
  tagID INT NOT NULL, 
  text VARCHAR (500),
  post_date DATETIME,
  cNum CHAR(10) NOT NULL,
  year INT NOT NULL,
  semester CHAR(6) NOT NULL,
  postAuthorFName CHAR(20),
  postAuthorLName CHAR(20),
  CONSTRAINT postPK PRIMARY KEY (postTitle, postAuthorID, tagID, post_date),
  CONSTRAINT PostAuthFK FOREIGN KEY (postAuthorID) REFERENCES Post_author_info(postAuthorID),
  CONSTRAINT tagIDFK FOREIGN KEY (tagID) REFERENCES Post_tag(tagID),
  CONSTRAINT postCourFK FOREIGN KEY (cNum, year, semester) REFERENCES Course(cNum, year, semester)
);


 /* Create the Thread_author_info */                                                    
CREATE TABLE Thread_author_info 
(
  ThreadAuthorID CHAR(10) NOT NULL,
  ThreadAuthorFName CHAR(20) NOT NULL,
  ThreadAuthorLName CHAR(20) NOT NULL,
  CONSTRAINT ThreadAuthPK PRIMARY KEY (ThreadAuthorID),
  CONSTRAINT ThreadAuthFK FOREIGN KEY (ThreadAuthorID) REFERENCES User(Identifier)
);        


/* Create the Thread table */                                                                                
CREATE TABLE Thread   
(
  postTitle   CHAR(100) NOT NULL,
  postAuthorID CHAR(10) NOT NULL,
  ThreadAuthorID CHAR(10) NOT NULL,
  time DATETIME,
  text VARCHAR (300),
  CONSTRAINT threadPK PRIMARY KEY (postTitle, postAuthorID, ThreadAuthorID,time),
  CONSTRAINT postAutFK FOREIGN KEY (postAuthorID) REFERENCES Post_author_info(postAuthorID),
  CONSTRAINT threadAutassignmentcourseFK FOREIGN KEY (ThreadAuthorID) REFERENCES Thread_author_info(ThreadAuthorID)
);









