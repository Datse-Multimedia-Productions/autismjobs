CREATE EXTENSION pgcrypto;

CREATE TABLE users (
	userid		uuid PRIMARY KEY DEFAULT gen_random_uuid(),
	username	text NOT NULL,
	email		text NOT NULL
	password	text  NOT NULL,
	created		TIMESTAMP NOT NULL,
	lastlogin	TIMESTAMP
)

CREATE TABLE profiles (
	profileid	INT UNSIGNED PRIMARY KEY NOT NULL UNIQUE,
	userid		INTEGER NOT NULL REFERENCES users (userid),
	displayname	VARCHAR(80),
	primaryemail	VARCHAR(255) NOT NULL
}

