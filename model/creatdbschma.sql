CREATE TABLE users (
	userid		SERIAL,
	username	VARCHAR(80),
	password	CHAR(32),
	created		TIMESTAMP,
	lastlogin	TIMESTAMP
)

CREATE TABLE profiles (
	profileid	SERIAL,
	userid		INTEGER NOT NULL,
	displayname	VARCHAR(80),
	primaryemail	VARCHAR(255)
}

