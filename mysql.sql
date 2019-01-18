create table operator(
	operator_name varchar(250) primary key,
	points int
);

drop table record;

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
                            ("carl",70);
                            
insert into record (operator_name, description, points) values 	("amy","caught smoking",-20),
							("amy","caught playing a fool",-10),
                            ("bob","incident free for 3 months",20),
                            ("carl","caught not wearing helmet",-50),
                            ("carl","incident free for 3 months",20);
                            