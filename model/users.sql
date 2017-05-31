CREATE EXTENSION pgcrypto;

CREATE TABLE users (
	userid		uuid PRIMARY KEY DEFAULT gen_random_uuid(),
	username	text NOT NULL,
	email		text NOT NULL,
	password	text  NOT NULL,
	created		TIMESTAMP NOT NULL DEFAULT now(),
	lastlogin	TIMESTAMP
)

CREATE UNIQUE INDEX username_idx ON users (lower(username));
CREATE UNIQUE INDEX user_email_idx ON users (lower(email));

