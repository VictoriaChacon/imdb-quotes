DROP TABLE IF EXISTS actor;
DROP TABLE IF EXISTS movie;
DROP TABLE IF EXISTS quote;

-- Creating tables for my entities here
-- Create actor entity; actorId is the primary key
CREATE TABLE actor (
	actorId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	actorName VARCHAR (100) NOT NULL,
	PRIMARY KEY(actorId)

);
-- Creating weak entity actorMovie here
-- Many quotes can have many actors

-- Create movie entity; movieId is the primary key

CREATE TABLE movie (
	-- movieId is the primary key
	movieId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	movieTitle VARCHAR (128) NOT NULL,
	PRIMARY KEY(movieId)

);
-- Create quote entity; quoteId is the primary key here
CREATE TABLE quote (
	quoteId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	quoteContent VARCHAR (1000) NOT NULL,
	PRIMARY KEY(quoteId)

);
