table users:
- userid: serial
- username: varchar(80)
- password: hash
- salt: hash
- lastlogin: timestamp
- created: timestamp

table profiles:
- profileid: serial
- userid: serial
- displayname: varchar(80)
- primaryemail: varchar(255)


