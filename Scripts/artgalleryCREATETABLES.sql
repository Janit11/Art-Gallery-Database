CREATE TABLE Artist (
	artistID CHAR(100) PRIMARY KEY,
	name CHAR(100),
	age INTEGER,
	rating REAL);

CREATE TABLE ArtForm (
	artName CHAR (100) PRIMARY KEY);

CREATE TABLE Curator (
	cID INTEGER PRIMARY KEY,
	fname CHAR(20),
	lname CHAR(20),
	education CHAR(100));

CREATE TABLE Museum (
	mID CHAR(100) PRIMARY KEY,
	name CHAR(50), 
	opHrs CHAR(30),
	Capacity INTEGER);

CREATE TABLE Artwork_Create_IsIn (
	artID CHAR(100),
	artistID CHAR(100),
	mID CHAR(100),
	title CHAR(100),
	material CHAR(30),
	PRIMARY KEY (artID, artistID, mID),
	FOREIGN KEY (artistID) REFERENCES Artist(artistID),
	FOREIGN KEY (mID) REFERENCES Museum(mID));

CREATE TABLE BelongsTo (
	artID CHAR(100),
	artName CHAR(100),
	PRIMARY KEY (artID, artName),
	FOREIGN KEY (artID) REFERENCES  Artwork_create_IsIn(artID) ON DELETE CASCADE,	
	FOREIGN KEY (artName) REFERENCES ArtForm(artName) ON DELETE CASCADE);

CREATE TABLE Exhibition_Held (
	exID CHAR(100),
	mID CHAR(100),
	dateOf DATE,
	location CHAR(100),
	exName CHAR(100),
	exTheme CHAR(100),
	PRIMARY KEY (exID, mID),
	FOREIGN KEY (mID) REFERENCES Museum(mID));

CREATE TABLE Ticket_Sells (
	exID CHAR(100),
	ticketNum INTEGER,
	price INTEGER,
	ticketType CHAR(30),
	PRIMARY KEY (exID, ticketNum),
	FOREIGN KEY (exID) REFERENCES Exhibition_Held(exID) ON DELETE CASCADE);

CREATE TABLE  Staff_ManagedBy (
	sID INTEGER,
	cID INTEGER, 	
	fname CHAR(100),
	lname CHAR(100),
	PRIMARY KEY (sID, cID),
	FOREIGN KEY (cID) REFERENCES Curator(cID));

CREATE TABLE Organizes (
	sID INTEGER,
	exID CHAR(100),
	PRIMARY KEY (sID, exID),
	FOREIGN KEY (sID) REFERENCES Staff_Managedby(sID),
	FOREIGN KEY (exID) REFERENCES Exhibition_Held(exID));