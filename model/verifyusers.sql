CREATE EXTENSION IF NOT EXISTS pgcrypto;

CREATE TABLE IF NOT EXISTS verifyusers (
	verifyuserid		uuid PRIMARY KEY DEFAULT gen_random_uuid(),
	userid		uuid REFERENCES users (userid) ON UPDATE NO ACTION ON DELETE NO ACTION,
	checkhash	text NOT NULL,
	created		TIMESTAMP NOT NULL DEFAULT now(),
	verified	TIMESTAMP
);


