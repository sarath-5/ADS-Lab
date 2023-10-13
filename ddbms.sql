CREATE DATABASE db1;
use db1;
create table t1(id int primary key,name varchar(50),spent int);
insert into t1 (id,name,spent) values(1,'manu',4000),(2,'lalu',5000);


CREATE DATABASE db2;
use db2;
create table t2(id int primary key,name varchar(50),spent int);
insert into t2 (id,name,spent) values(4,'anu',4000),(6,'lal',3000);


CREATE DATABASE db3;
use db3;
create table t3(id int primary key,name varchar(50),spent int);
insert into t3 (id,name,spent) values(3,'man',8000),(7,'lulu',5000);

select * from db1.t1 union select * from db2.t2;
