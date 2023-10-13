create database sample;
use sample;
create table mDetails(id int primary key auto_increment,name varchar(100),sub1 int(3),sub2 int(3),sub3 int(3),percentage float(5,2));
insert into mDetails(name,sub1,sub2,sub3) values('anu',91,90,92),('manu',98,78,89);
select * from mDetails;
delimiter $$
create trigger before_insert_trigger
before insert on mDetails
for each row
begin
  set new.percentage = ((new.sub1 + new.sub2 + new.sub3) * 100) / 300;
end $$
insert into mDetails(name,sub1,sub2,sub3) values('sinan',91,97,92);

create table stud_names(id int primary key auto_increment,name varchar(100));
insert into stud_names(name) values("raj"),("john");
select * from stud_names;
create table stud_details(stud_id int primary key,name varchar(100),reg_date datetime);
insert into stud_details(stud_id,name,reg_date) values 
(concat(1,year(curdate())),"raj",now()),
(concat(2,year(curdate())),"john",now());
select * from stud_details;

delimiter $$
create trigger afterins
after insert on stud_names for each row
begin
insert into stud_details(stud_id,name,reg_date) values (concat(new.id,year(curdate())),new.name,now());
end $$


drop table stud_names;
drop table stud_details;




 