DROP TABLE IF EXISTS actor;
DROP TABLE IF EXISTS movie;
DROP TABLE IF EXISTS quote;
DROP TABLE IF EXISTS quoteActor;
DROP TABLE IF EXISTS actorMovie;

-- Creating tables for my entities here
-- Create actor entity; actorId is the primary key
CREATE TABLE actor (
	actorId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	actorName VARCHAR (100) NOT NULL,
	PRIMARY KEY(actorId)

);
-- Creating weak entity actorMovie here
-- Many quotes can have many actors
CREATE TABLE actorMovie (
	actorMovieActorId INT UNSIGNED NOT NULL,
	actorMovieMovieId INT UNSIGNED NOT NULL,
	-- Indexing foreign keys
	INDEX(actorMovieActorId),
	INDEX(actorMovieMovieId),
	-- Foreign key relations
	FOREIGN KEY(actorMovieActorId) REFERENCES actor(actorId),
	FOREIGN KEY (actorMovieMovieId) REFERENCES movie(movieId),
	PRIMARY KEY (actorMovieActorId, actorMovieMovieId)
);

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

-- Creating weak entity quoteActor here
-- Many quotes can have many actors
CREATE TABLE quoteActor (
	quoteActorActorId INT UNSIGNED NOT NULL,
	quoteActorQuoteId INT UNSIGNED NOT NULL,
	-- Indexing foreign keys
	INDEX(quoteActorActorId),
	INDEX(quoteActorQuoteId),
	-- Foreign Key relations
	FOREIGN KEY(quoteActorActorId) REFERENCES actor(actorId),
	FOREIGN KEY(quoteActorQuoteId) REFERENCES quote(quoteId),
	PRIMARY KEY(quoteActorActorId, quoteActorQuoteId)
);
