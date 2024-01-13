# PHP Application

### ****Creating the Database Table****

Create a table named *crud* inside your MySQL database using the following code.

```sql
USE phpDB;

CREATE TABLE phpDB.crud (
   id int(255) NOT NULL AUTO_INCREMENT,
  first_name varchar(255) NOT NULL,
  last_name varchar(255) NOT NULL,
  email  varchar(255) NOT NULL,
  gender varchar(255) NOT NULL,
  PRIMARY KEY (id)
)
```

### ****Run the app****

in root folder run php -S localhost:port 

->then->

access localhost:port/add-new.php
