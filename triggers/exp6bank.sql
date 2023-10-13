

create database bank;
use bank;
CREATE TABLE accounts (
  id INT PRIMARY KEY,
  balance DECIMAL(10, 2) NOT NULL,
  CHECK (balance >= 0)
);
CREATE TABLE transactions (
  id INT PRIMARY KEY,
  account_id INT,
  amount DECIMAL(10, 2),
  transaction_type ENUM('deposit', 'withdrawal'),
  FOREIGN KEY (account_id) REFERENCES accounts(id)
);
DELIMITER //
CREATE TRIGGER update_balance AFTER INSERT ON transactions
FOR EACH ROW
BEGIN
  IF NEW.transaction_type = 'deposit' THEN
    UPDATE accounts SET balance = balance + NEW.amount WHERE id = NEW.account_id;
  ELSEIF NEW.transaction_type = 'withdrawal' THEN
    UPDATE accounts SET balance = balance - NEW.amount WHERE id = NEW.account_id;
  END IF;
END//
DELIMITER ;
insert into accounts values(01,12000.23);
insert into accounts values(02,2210.56);
insert into accounts values(03,0);
insert into transactions values(101,02,10000,'deposit');
insert into transactions values(102,01,12000,'withdrawal');
insert into transactions values(103,03,1000,'withdrawal');
select*from accounts;
select*from transactions;