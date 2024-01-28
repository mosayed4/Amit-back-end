CREATE DATABASE if not EXISTS newblogs;
use newblogs;
CREATE TABLE authors(
    id bigint PRIMARY KEY AUTO_INCREMENT,
    name varchar(100) NOT NULL,
    email varchar(100) NOT NULL
);

CREATE TABLE blogs(
    id bigint PRIMARY KEY AUTO_INCREMENT,
    author_id bigint,
    tiltle varchar(100) NOT NULL,
    short_description varchar(500),
    content TEXT ,
    views int DEFAULT 0,
    created_at DATETIME DEFAULT now(),
    FOREIGN KEY(author_id) REFERENCES authors(id) ON DELETE CASCADE
);

CREATE TABLE contact(
    id bigint PRIMARY KEY AUTO_INCREMENT,
    name varchar(100) NOT NULL,
    phone varchar(20),
    email varchar(100),
    message TEXT ,
    created_at DATETIME DEFAULT now()
);
