--  sudo -u postgres psql postgres

CREATE ROLE test LOGIN PASSWORD 'test';
CREATE DATABASE testdb WITH OWNER = test;

CREATE TABLE person (
  id serial PRIMARY KEY,
  username varchar(100) NOT NULL,
  email varchar(100) NOT NULL
);

INSERT INTO person (username, email) VALUES ('Some user', 'example@example.com');
INSERT INTO person (username, email) VALUES ('Another user', 'test@example.com');
INSERT INTO person (username, email) VALUES ('Test 123', 'test@test.com');
INSERT INTO person (username, email) VALUES ('Test vvdv', '212@test.com');