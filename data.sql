-- Dumping data into course table

DROP TABLE IF EXISTS `course`;

create table course(
        id int NOT NULL AUTO_INCREMENT,
        name varchar(50),
        cname varchar(50),
        duration int,
        PRIMARY KEY (id)
    );

INSERT INTO `course` (`name`, `cname`, `duration`) VALUES ('B-Tech', 'Faculty of Engineering and Technology', 4);
INSERT INTO `course` (`name`, `cname`, `duration`) VALUES ('M-Tech', 'Faculty of Engineering and Technology', 2);

-- Dumping data into coursedept table
DROP TABLE IF EXISTS `coursedept`;

create table coursedept(
        id int NOT NULL AUTO_INCREMENT,
        name varchar(50),
        cname varchar(50),
        college varchar(50),
        PRIMARY KEY (id)
    );

insert into `coursedept` (`name`, `cname`, `college`) values ('Computer Science Engineering', 'B-Tech', 'Faculty of Engineering and Technology');
insert into `coursedept` (`name`, `cname`, `college`) values ('Electrical Engineering', 'B-Tech', 'Faculty of Engineering and Technology');
insert into `coursedept` (`name`, `cname`, `college`) values ('Electronics Engineering', 'B-Tech', 'Faculty of Engineering and Technology');
insert into `coursedept` (`name`, `cname`, `college`) values ('Mechanical Engineering', 'B-Tech', 'Faculty of Engineering and Technology');
insert into `coursedept` (`name`, `cname`, `college`) values ('Civil Engineering', 'B-Tech', 'Faculty of Engineering and Technology');

-- Dumping data into examdept table
DROP TABLE IF EXISTS `examdept`;

create table examdept (
        ccode int,
        cname varchar(50),
        hname varchar(50),
        email varchar(50),
        mobile varchar(10),
        username varchar(20),
        password varchar(20)
    );

insert into `examdept` (`cname`, `hname`, `email`, `mobile`, `username`, `password`) values ('Subharti Medical College', 'Dr. Y. P. Monga', 'medical@subharti.org', '121305500', '1@246', 'svsu@123');

insert into `examdept` (`cname`, `hname`, `email`, `mobile`, `username`, `password`) values ('Subharti Dental College', 'Dr. Nikhil Srivastava', 'sdc.meerut@gmail.com', '0121243904', '2@246', 'svsu@123');

insert into `examdept` (`cname`, `hname`, `email`, `mobile`, `username`, `password`) values ('Subharti Nursing College', 'Dr. Geeta Parwanda', 'nursing@subharti.org', '121-3024229', '3@246', 'svsu@123');

insert into `examdept` (`cname`, `hname`, `email`, `mobile`, `username`, `password`) values ('SUBHARTI COLLEGE OF PHYSIOTHERAPY', 'Dr. Jasmine Anandabai', 'physiotherapy@gmail.com', '766446444', '4@246', 'svsu@123');

insert into `examdept` (`cname`, `hname`, `email`, `mobile`, `username`, `password`) values ('FACULTY OF AYUSH', 'Dr. Abhay M. Shankaregowda', 'ayush@gmail.com', '766446444', '5@246', 'svsu@123');

insert into `examdept` (`cname`, `hname`, `email`, `mobile`, `username`, `password`) values ('Faculty of Pharmacy', 'Dr. Sokindra Kumar', 'pharmacy@gmail.com', '766446444', '6@246', 'svsu@123');

insert into `examdept` (`cname`, `hname`, `email`, `mobile`, `username`, `password`) values ('Faculty of Law', 'Dr. Vaibhav Goel Bhartiya', 'law@gmail.com', '766446444', '7@246', 'svsu@123');

insert into `examdept` (`cname`, `hname`, `email`, `mobile`, `username`, `password`) values ('Faculty of Engineering and Technology', 'Dr. Manoj Kapil', 'site@gmail.com', '766446444', '8@246', 'svsu@123');

insert into `examdept` (`cname`, `hname`, `email`, `mobile`, `username`, `password`) values ('Faculty of Science', 'Dr. Mahavir Singh', 'science@subharti.org', '96392122288', '9@246', 'svsu@123');

insert into `examdept` (`cname`, `hname`, `email`, `mobile`, `username`, `password`) values ('Faculty of Education', 'Dr. Sandeep Kumar', 'education@subharti.org', '766446444', '10@246', 'svsu@123');

insert into `examdept` (`cname`, `hname`, `email`, `mobile`, `username`, `password`) values ('Subharti College of Management & Commerce', 'Dr. R. K. Ghai', 'management@subharti.org', '766446444', '11@246', 'svsu@123');

insert into `examdept` (`cname`, `hname`, `email`, `mobile`, `username`, `password`) values ('Faculty of Fine Arts', 'Dr. Pintu Mishra', 'finearts@subharti.org', '9997371772', '12@246', 'svsu@123');

insert into `examdept` (`cname`, `hname`, `email`, `mobile`, `username`, `password`) values ('Subharti School of Buddhist Studies', 'Dr. Ramesh Madan', 'directorssbs@subharti.org', '7351560005', '13@246', 'svsu@123');

insert into `examdept` (`cname`, `hname`, `email`, `mobile`, `username`, `password`) values ('Subharti College Of Hotel Management', 'Dr. Shiv Mohan Verma', 'hotelmanagement@subharti.org', '9639010708', '14@246', 'svsu@123');

insert into `examdept` (`cname`, `hname`, `email`, `mobile`, `username`, `password`) values ('Subharti Polytechnic College', 'Dr. Atul Pratap Singh', 'polytechnic@subharti.org', '9639010035', '15@246', 'svsu@123');

-- Dumping data into registerfaculty table
DROP TABLE IF EXISTS `registerfaculty`;

create table registerfaculty (
        cname varchar(50),
        dname varchar(50),
        fname varchar(50),
        sname varchar(50),
        scode varchar(10), 
        email varchar(30),
        mobile varchar(10),
        username varchar(20),
        password varchar(20)
    );

insert into `registerfaculty` (`cname`, `dname`, `fname`, `sname`, `scode`, `email`, `mobile`, `username`, `password`) values ('Faculty of Engineering and Technology', 'Computer Science Engineering', 'Er. Anubha Gaur', 'Compiler Design', 'BCSE-601', 'anubha@gmail.com', '9877564546', 'BCSE-601', 'site@123');

insert into `registerfaculty` (`cname`, `dname`, `fname`, `sname`, `scode`, `email`, `mobile`, `username`, `password`) values ('Faculty of Engineering and Technology', 'Computer Science Engineering', 'Er. Parag Rastogi', 'Compuer Network', 'BCSE-602', 'parag@gmail.com', '9877434546', 'BCSE-602', 'site@123');

insert into `registerfaculty` (`cname`, `dname`, `fname`, `sname`, `scode`, `email`, `mobile`, `username`, `password`) values ('Faculty of Engineering and Technology', 'Computer Science Engineering', 'Er. Shweta Garg', 'Image Processing', 'BCSE-612', 'shweta@gmail.com', '9877564546', 'BCSE-612', 'site@123');

insert into `registerfaculty` (`cname`, `dname`, `fname`, `sname`, `scode`, `email`, `mobile`, `username`, `password`) values ('Faculty of Engineering and Technology', 'Computer Science Engineering', 'Dr. Sanjive Tyagi', 'Computer Graphics', 'BCSE-623', 'sanjive@gmail.com', '9877568746', 'BCSE-623', 'site@123');

insert into `registerfaculty` (`cname`, `dname`, `fname`, `sname`, `scode`, `email`, `mobile`, `username`, `password`) values ('Faculty of Engineering and Technology', 'Computer Science Engineering', 'Ms. Anshu Sirohi', 'Soft Skills & Interpersonal Communication', 'BCSE-001', 'anshu@gmail.com', '9877564546', 'BCSE-001', 'site@123');

insert into `registerfaculty` (`cname`, `dname`, `fname`, `sname`, `scode`, `email`, `mobile`, `username`, `password`) values ('Faculty of Engineering and Technology', 'Computer Science Engineering', 'Dr. Archita Bhatnagar', 'Cloud Computing Infrastructure', 'BCSE-603', 'archita@gmail.com', '9877564546', 'BCSE-603', 'site@123');

insert into `registerfaculty` (`cname`, `dname`, `fname`, `sname`, `scode`, `email`, `mobile`, `username`, `password`) values ('Faculty of Engineering and Technology', 'Computer Science Engineering', 'Er. Pankaj Pratap Singh', 'Artificial Intelligence $ Expert Systems', 'BAME-601', 'pankaj@gmail.com', '9877564546', 'BAME-601', 'site@123');

insert into `registerfaculty` (`cname`, `dname`, `fname`, `sname`, `scode`, `email`, `mobile`, `username`, `password`) values ('Faculty of Engineering and Technology', 'Computer Science Engineering', 'Er. Amit Kishor', 'Algorithms For Advanced Analysis', 'BBME-601', 'amit@gmail.com', '9877564546', 'BBME-601', 'site@123');

insert into `registerfaculty` (`cname`, `dname`, `fname`, `sname`, `scode`, `email`, `mobile`, `username`, `password`) values ('Faculty of Engineering and Technology', 'Computer Science Engineering', 'Er. Shweta Garg', 'Data Science For Internet of Things', 'BIME-601', 'shweta@gmail.com', '9877564546', 'BIME-601', 'site@123');

