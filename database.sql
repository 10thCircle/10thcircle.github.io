CREATE DATABASE mc2learn;

USE mc2learn;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  school VARCHAR(255) NOT NULL -- New column for "School"
);