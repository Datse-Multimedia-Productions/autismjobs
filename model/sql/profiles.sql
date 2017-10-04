CREATE TABLE profiles (
	profileid	INT UNSIGNED PRIMARY KEY NOT NULL UNIQUE,
	userid		INTEGER NOT NULL REFERENCES users (userid),
	displayname	VARCHAR(80),
	primaryemail	VARCHAR(255) NOT NULL
}

