-- creating the database for JK Transport Managment System
-- To run the project smoothly We need the following database and tables
-- incase of error contact me on +2560786878071 or email: bonanekabene67@gmail.com




-- the database creation named jk_transporters

CREATE DATABASE jk_transporters;


-- creating the table for admin

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `phone` VARCHAR(255) NOT NULL,
  `address` VARCHAR(255) NOT NULL,
  `date` VARCHAR(255) not null,
  `image` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
);

-- creating the admin user 
-- email is bonanekabene67@gmail.com
--- password is king

INSERT INTO `admin`(`id`, `name`, `email`, `password`, `phone`, `address`, `date`, `image`)
VALUES ('1','Bonane','bonanekabene@gmail.com','b2086154f101464aab3328ba7e060deb','+256 0756878071','Bulenga','02/05/2023','default.png');


-- creating the booking table
CREATE TABLE IF NOT EXISTS `booking` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `truck` varchar(100) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `date` VARCHAR(255) NOT NULL,
  `driver_id` VARCHAR(255) NOT NULL,
  `client_id` VARCHAR(255) not null,
  `notifi` VARCHAR(255) NOT NULL,
  `accepted` VARCHAR(255) NOT NULL,
  `delivered` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
);


-- creating clients table 
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` VARCHAR(255) NOT NULL,
  `address` VARCHAR(255) NOT NULL,
  `image` VARCHAR(255) not null,
  `date` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
);

-- creating customers section or table
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `age` VARCHAR(255) NOT NULL,
  `address` VARCHAR(255) NOT NULL,
  `date` VARCHAR(255) not null,
  `notifi` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
);

-- creating drivers table
CREATE TABLE IF NOT EXISTS `drivers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `truck` VARCHAR(255) NOT NULL,
  `mobile` VARCHAR(255) NOT NULL,
  `age` VARCHAR(255) not null,
  `licence` VARCHAR(255) NOT NULL,
  `experience` VARCHAR(255) NOT NULL,
  `date` VARCHAR(255) NOT NULL,
  `address` VARCHAR(255) NOT NULL,
  `image` VARCHAR(255) NOT NULL,
  `status` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
);


-- creating fuel table
CREATE TABLE IF NOT EXISTS `fuel` (
  `id` int NOT NULL AUTO_INCREMENT,
  `t_plate` varchar(300) NOT NULL,
  `t_name` varchar(100) NOT NULL,
  `d_name` varchar(300) NOT NULL,
  `d_filled` VARCHAR(255) NOT NULL,
  `way` VARCHAR(255) NOT NULL,
  `quantity` VARCHAR(255) not null,
  `amount` VARCHAR(255) NOT NULL,
  `comment` VARCHAR(255) NOT NULL,
  `driver_id` VARCHAR(255) NOT NULL,
  `notifi` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
);

-- creating langage table
CREATE TABLE IF NOT EXISTS `langage` (
  `id` int NOT NULL AUTO_INCREMENT,
  `item_name` varchar(300) NOT NULL,
  `type` varchar(100) NOT NULL,
  `code` varchar(300) NOT NULL,
  `s_name` VARCHAR(255) NOT NULL,
  `s_number` VARCHAR(255) NOT NULL,
  `s_address` VARCHAR(255) not null,
  `s_date` VARCHAR(255) NOT NULL,
  `s_time` VARCHAR(255) NOT NULL,
  `r_name` VARCHAR(255) NOT NULL,
  `r_number` VARCHAR(255) NOT NULL,
  `r_address` VARCHAR(255) NOT NULL,
  `paid` VARCHAR(255) NOT NULL,
  `picked` VARCHAR(255) NOT NULL,
  `delivered` VARCHAR(255) NOT NULL,
  `driver_id` VARCHAR(255) NOT NULL,
  `clint_id` VARCHAR(255) NOT NULL,
  `notifi` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
);


-- creating trucks table
CREATE TABLE IF NOT EXISTS `trucks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `t_plate` varchar(300) NOT NULL,
  `t_name` varchar(100) NOT NULL,
  `model` varchar(300) NOT NULL,
  `stage` VARCHAR(255) NOT NULL,
  `route` VARCHAR(255) NOT NULL,
  `engine` VARCHAR(255) not null,
  `date` VARCHAR(255) NOT NULL,
  `driver_id` VARCHAR(255) NOT NULL,
  `notifi` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
);