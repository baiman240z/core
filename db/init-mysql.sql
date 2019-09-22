CREATE DATABASE `sandbox` character set utf8mb4;

CREATE USER www@'%' IDENTIFIED BY 'h0geh0ge';
GRANT SELECT, INSERT, UPDATE, DELETE, LOCK TABLES, EXECUTE ON *.* to www@'%';
FLUSH privileges;
