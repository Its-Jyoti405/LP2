CREATE DATABASE eventdb;
USE eventdb;

CREATE TABLE admin (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50),
  password VARCHAR(50)
);

INSERT INTO admin (username, password) VALUES ('admin', '1234');

CREATE TABLE events (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  date DATE,
  description TEXT
);

CREATE TABLE participants (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  event_id INT,
  FOREIGN KEY (event_id) REFERENCES events(id)
);
