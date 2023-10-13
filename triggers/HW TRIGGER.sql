CREATE DATABASE HW;
USE HW;

CREATE TABLE MAIN (id INT,
  name VARCHAR(50));
  INSERT INTO MAIN VALUES(1,'MANU');
  INSERT INTO MAIN VALUES(2,'ROY');
  SELECT * FROM MAIN;
  -- Create the backup table
CREATE TABLE backup (
  id INT,
  name VARCHAR(50),
  -- Add other columns as needed
  deleted_at TIMESTAMP
);
delimiter $$
-- Create the trigger
CREATE TRIGGER main_delete_trigger
AFTER DELETE ON Main
FOR EACH ROW
BEGIN
  INSERT INTO backup (id, name, deleted_at)
  VALUES (OLD.id, OLD.name, CURRENT_TIMESTAMP);
END $$
SELECT * FROM backup;
delete from MAIN where id=1;