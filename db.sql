CREATE DATABASE blog_ipa22;
USE blog_ipa22;

CREATE TABLE posts (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
title  VARCHAR(255) NOT NULL
);

INSERT INTO posts 
(title) 
VALUES 
 ('My First Blog Post'), 
 ('My Second Blog Post');

CREATE TABLE categories (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255) NOT NULL,
description TEXT
);

INSERT INTO categories (name) VALUES 
    ('sport'),
    ('music'),
    ('food');

ALTER TABLE posts
ADD
FOREIGN KEY (category_id) REFERENCES categories(id);

UPDATE posts
SET category_id=3 WHERE id=2;