DROP DATABASE IF EXISTS hackathon;
CREATE DATABASE hackathon;
USE hackathon;

create table operator(
	operator_name varchar(250) primary key,
	points int
);

create table record(
	operator_name varchar(250), 
    description varchar(250),
    points int,
	id int auto_increment,
    primary key (id, operator_name),
    foreign key (operator_name) references operator(operator_name)
);

insert into operator values ("amy",30),
							("bob",50),
                            ("carl",70),
                            ("dan",20),
                            ("ellie",-60),
                            ("fred",-30),
                            ("greg",190),
                            ("harold",0);
                            
                            
insert into record (operator_name, description, points) values 	("amy","caught smoking",-20),
							("amy","caught playing a fool",-10),
                            ("bob","incident free for 3 months",20),
                            ("carl","caught not wearing helmet",-50),
                            ("carl","incident free for 3 months",20),
                            ("dan","Operating equipment without qualification or authorization",-30),
							("dan","Lack of/or improper use of PPE",-20),
							("Ellie","Operation equipment at unsafe speeds",-30),
							("Ellie","Failure to warn",-30),
							("Ellie","Bypass or removal of safety devices",-30),
							("Fred","Using defective equipment",-10),
							("Fred","incident free for 3 months",20),
							("Greg","incident free for 3 months",20),
							("Greg","incident free for 6 months",40),
							("Greg","incident free for 9 months", 60),
							("Greg","incident free for 1 year",80),
							("Harold","caught smoking",-30),
							("Harold","almost fell of high place",-50);
                        
-- Table structure for table admin_user
--

DROP TABLE IF EXISTS admin_user;

CREATE TABLE admin_user (
  username varchar(32) NOT NULL,
  gender varchar(45) DEFAULT NULL,
  password varchar(256) NOT NULL,
  name varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table admin_user
--

INSERT INTO admin_user (username, gender, password, name) VALUES
('apple', 'male', '$2y$10$5R5QAN/bOSz0/ARxAzB/meUnjC9PVMHBoMbGp.O1PgXiOxQSarAZu', 'Apple TAN'),
('orange', 'female', '$2y$10$sxy4yfGsVZER6rylbaMaI.rGubMg/ituRBaJ3vY..eSRakPsS74VC', 'Orange TAN'),
('pear', 'male', '$2y$10$DpCQXba9AwA086Et7yAq.Ok9ihHy1uNvawvb3bvdTMw26nyS0JLae', 'Pear TAN');

-- Indexes for table admin_user
--
ALTER TABLE admin_user
  ADD PRIMARY KEY (username);