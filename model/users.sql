CREATE EXTENSION pgcrypto;

CREATE TABLE users (
	userid		uuid PRIMARY KEY DEFAULT gen_random_uuid(),
	username	text NOT NULL,
	email		text NOT NULL,
	password	text  NOT NULL,
	created		TIMESTAMP NOT NULL DEFAULT now(),
	lastlogin	TIMESTAMP
)

