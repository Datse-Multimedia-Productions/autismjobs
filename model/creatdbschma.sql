CREATE TABLE users (
	userid		SERIAL,
	username	VARCHAR(80),
	salt		CHAR(6),
	password	CHAR(32),
	created		TIMESTAMP,
	lastlogin	TIMESTAMP
)
