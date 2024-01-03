<h2>This is test page</h2>
<?php 

require_once("config.php");

// create database
// $createDB = "CREATE DATABASE churu";
// $conn->query($createDB);


// // create table
// $createTable = "CREATE TABLE churu.churuTable (id int(11), name varchar(50))";
// $conn->query($createTable);

// // delete database
// $deleteDB = "DROP DATABASE churu";
// $conn->query($deleteDB);


// create table in particular database
// $create = "USE test"; 
// $conn->query($create);
// $new = "CREATE TABLE test4(id int, name varchar(20))";
// $conn->query($new);

// $insert = "INSERT INTO `rohit` VALUES (1, 'Rohit', 20)";
// $conn->query($insert);


// // for test
// $a = "20";
// $b = "20";
// echo $a+$b;


// CREATE DATABASE IF NOT EXISTS db_name;

// DROP DATABASE IF EXISTS db_name;

// SHOW DATABASE // all database will be show

/*
USE db_name
SHOW TABLE
*/


/*
CREATE TABLE new_table (
    cust_id int PRIMARY KEY,
    name varchar(100)
    FOREIGN KEY (cust_id) references second_table (id);
);

CREATE TABLE second_table (
    id int,
    age int
);



*/

/*

operators in SQL

Arithmetic operatos +(addition), -(substration), *(multiplication), /(division), %(modulus)
comparison operatos = (equal to), !=(not equal to), >, <, >=, <=
logical operator : AND, OR, NOT, IN, BETWEEN, ALL, LIKE ANY
bitwise operatos & (Bitwise AND), | (Bitwise OR)










Exercise:

select mode, count(customer) from table_name group by mode;
select grade, count(grade) from table_name group by grade


SELECT column1, column2
FROM table_name
WHERE condition
GROUP BY column
HAVING condition
ORDER BY column ASC/DESC






i have to watch this:
having 




where make condion on row
and having make condtion on group

we wrtie where before group by and
we write having after group by


select * 
from table1
inner join table2 
on
table1.id = table2.id




*/






?>