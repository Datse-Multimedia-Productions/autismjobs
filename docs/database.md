# Setting up Database

1. Create Role and Database
1. Create pgcrypto extension
1. Create Tables 

## Create Role and Database

To create the role and database, you will need to use some tool to do that, 
my choice is psql, but other options are available.

```
$ psql -U postgres 
psql (9.6.3)
Type "help" for help.

postgres=# CREATE ROLE ajuser WITH PASSWORD 'password' LOGIN;
CREATE ROLE
postgres=# CREATE DATABASE autismjobs OWNER ajuser;
CREATE DATABASE
postgres=# \q
$
```

This should create your role and database.

## Create pgcrypto extension

We use the pgcrypto extension.  In order to use it, we need to create it with 
the superuser before we try to create the tables (tables don't get created 
if it isn't installed right now).  

In `psql` you need to enter the command:

```
CREATE EXTENSION pgcrypto;
```

This must be done to the created database.

## Create Tables

Tables are created through the administration interface.  The default way to 
access it is through your admin.php on your site's root, for this site.  


