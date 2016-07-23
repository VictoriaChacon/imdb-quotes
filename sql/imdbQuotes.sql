DROP TABLE IF EXISTS actor;
DROP TABLE IF EXISTS movie;
DROP TABLE IF EXISTS quote;

-- Creating tables for my entities here
CREATE TABLE actor (
	actorId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	actorName VARCHAR (100) NOT NULL,
	-- Is the order of movieActorId relevant here?? why not in the movie table
	movieActorId INT UNSIGNED NOT NULL,
	INDEX(movieActorId),
	FOREIGN KEY(movieActorId) REFERENCES actor(actorId),
	UNIQUE(actorId),
	PRIMARY KEY(actorId)

);
-- Create movie entity

CREATE TABLE movie (
	-- movieId is the primary key
	movieId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	movieTitle VARCHAR (128) NOT NULL,
	-- movieActorId is meant to connect movie to actor
	movieActorId INT UNSIGNED NOT NULL,
	-- made so no duplicate movie Id's can exist
	UNIQUE(movieId),
	PRIMARY KEY(movieId)

);
-- Creating the table for a weak entity here
CREATE TABLE quote (
	quoteActorId INT UNSIGNED NOT NULL,
	quoteContent VARCHAR (1000) NOT NULL,
	quoteMovieId INT UNSIGNED NOT NULL,
	-- Indexing foreign keys
	INDEX(quoteActorId),
	INDEX(quoteMovieId),
	-- foreign key relations
	FOREIGN KEY(quoteActorId) REFERENCES actor(actorId),
	FOREIGN KEY(quoteMovieId) REFERENCES movie(movieId),
	-- making composite foreign key using two foreign keys
	PRIMARY KEY(quoteActorId, quoteMovieId)

);
