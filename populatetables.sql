USE Learning_Management_System;

LOAD DATA LOCAL INFILE 'Course_Info.csv' INTO TABLE Course_Info
FIELDS TERMINATED BY ',' IGNORE 1 LINES;

LOAD DATA LOCAL INFILE 'User.csv' INTO TABLE User
FIELDS TERMINATED BY ',' IGNORE 1 LINES;

LOAD DATA LOCAL INFILE 'Course.csv' INTO TABLE Course
FIELDS TERMINATED BY ',' IGNORE 1 LINES;

LOAD DATA LOCAL INFILE 'Takes.csv' INTO TABLE Takes
FIELDS TERMINATED BY ',' IGNORE 1 LINES;

LOAD DATA LOCAL INFILE 'Assignment.csv' INTO TABLE Assignment
FIELDS TERMINATED BY ',' IGNORE 1 LINES;

LOAD DATA LOCAL INFILE 'Grades.csv' INTO TABLE Grades
FIELDS TERMINATED BY ',' IGNORE 1 LINES
SET Assignment1Grade = IF(Assignment1Grade = ' ',NULL,Assignment1Grade),
Assignment2Grade = IF(Assignment2Grade = ' ',NULL,Assignment2Grade),
Assignment3Grade = IF(Assignment3Grade = ' ',NULL,Assignment3Grade),
Assignment4Grade = IF(Assignment4Grade = ' ',NULL,Assignment4Grade),
Assignment5Grade = IF(Assignment5Grade = ' ',NULL,Assignment5Grade),
Assignment6Grade = IF(Assignment6Grade = ' ',NULL,Assignment6Grade),
Assignment7Grade = IF(Assignment7Grade = ' ',NULL,Assignment7Grade),
Assignment8Grade = IF(Assignment8Grade = ' ',NULL,Assignment8Grade),
Assignment9Grade = IF(Assignment9Grade = ' ',NULL,Assignment9Grade),
Assignment10Grade = IF(Assignment10Grade = ' ',NULL,Assignment10Grade);

LOAD DATA LOCAL INFILE 'Assists.csv' INTO TABLE Assists
FIELDS TERMINATED BY ',' IGNORE 1 LINES;

LOAD DATA LOCAL INFILE 'Post_author_info.csv' INTO TABLE Post_author_info
FIELDS TERMINATED BY ',' IGNORE 1 LINES;

LOAD DATA LOCAL INFILE 'Post_tag.csv' INTO TABLE Post_tag
FIELDS TERMINATED BY ',' IGNORE 1 LINES;

LOAD DATA LOCAL INFILE 'Post.csv' INTO TABLE Post
FIELDS TERMINATED BY ',' IGNORE 1 LINES;

LOAD DATA LOCAL INFILE 'Thread_author_info.csv' INTO TABLE Thread_author_info
FIELDS TERMINATED BY ',' IGNORE 1 LINES;

LOAD DATA LOCAL INFILE 'Thread.csv' INTO TABLE Thread
FIELDS TERMINATED BY ',' IGNORE 1 LINES;
