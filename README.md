## [PHP Tutorial | PHP For Beginners | Learn PHP Programming](https://www.youtube.com/watch?v=qVU3V0A05k8&list=PL0eyrZgxdwhwBToawjm9faF1ixePexft-)

### 1. Introduction to PHP Programming 

---

### 2. Installing A Local Server for PHP

1) [XAMPP](https://www.apachefriends.org/index.html)
2) Clear [path-to-xampp-folder]/htdocs
3) Create new project folder 

--- 

### 3. Output in Browser Using PHP
```php
echo "Hi there "; // faster loaded
print "Nick";
```
--- 

### 4. How to Create PHP Variables
```php
$name = "Nick";
echo $name . " is a code guru!";
```
--- 

### 5. How to Write Comments in PHP
```php 
// echo "Hi there "; // faster loaded
/* print "Nick"; */
```
--- 

### 6. What Are Internal Functions in PHP
```php
// echo strlen("Hi Daniel");
// echo str_word_count("Hi Daniel");
// echo strrev("Hi Daniel");
// echo strpos("Hi Daniel", "Hi");
echo str_replace("Hi", "Bye", "Hi Daniel");
```
--- 

### 7. Different Data Types in PHP
```php
// String
$name = 'Coding is fun';
// Integer
$name = 20;
// Float
$name = 20.5784;
// Boolean
/* true = 1;
false = 0; */
// Array
$names = array("Daniel", "Dennis", "Mike");
echo $names['1'];
```
--- 

### 8. What Are Arithmetic Operators in PHP
```php
// Arithmetic Operators
    // echo 5+5;
    // echo 5%5;
    echo 5**5;
```
--- 

### 9. What Are Assignment Operators in PHP
```php
// Assignment Operators
    $x = 100;

    // $x = $x + 20;
    $x += 20;
    echo $x;
```
---

### 10. What Are Comparison Operators in PHP
```php
// Comparison Operators
    $x = 5;
    $y = 10;
    
    if($x === $y) {
        echo "True!";
    }
    else {
        echo "False";
    }
```
---

### 11. What Are Increment and Decrement Operators in PHP
```php
// Increment/Decrement Operators
    $x = 10;
    // echo ++$x; // 11
    echo $x++; // 10
    echo $x; // 11
```
---

### 12. What Are Logical Operators in PHP
```php
// Logical Operators: or || / and && / xor
    $x = 10;
    $y = 20;
    if($x == $y xor 1 == 1){ // one of these conditions has to be true, but can only be one 
        echo "True";
    }
```

### 13. Various Conditional Statements in PHP
```php
$x = 2;
if ($x == 1) {
    echo "One";
} 
elseif ($x == 2) {
    echo "Two";
}
else {
    echo "Three";
}
```
---

### 14. Switch Statements in PHP
```php
$x = 8;
switch ($x) {
    case 1: 
        echo "The answer is 1";
    break;
    case 1: 
        echo "The answer is 1";
    break;
    default:
        echo "There is no answer!";
}
```
---

### 15. Exercise Using PHP| Let's Build a Calculator
```html
<form action="">
    <input type="text" name="num1" placeholder="Number 1" />
    <input type="text" name="num2" placeholder="Number 2" />
    <select name="operator" id="">
        <option value="None">None</option>
        <option value="Add">Add</option>
        <option value="Subtract">Subtract</option>
        <option value="Multiply">Multiply</option>
        <option value="Divide">Divide</option>
    </select>
    <br />
    <button type="submit" name="submit" value="submit">Calculate</button>
</form>
<p>
    The answer is:
</p>

<?php
...
?>
```
```php
// Check if the submit-button has been clicked
    if ( isset($_GET['submit']) ) {
        // Get information from URL
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];

        switch ($operator) {
            case "None": 
                echo "You need to select a method!";
            break;
            case "Add": 
                echo $result1 + $result2;
            break;
            case "Subtract": 
                echo $result1 - $result2;
            break;
            case "Multiply": 
                echo $result1 * $result2;
            break;
            case "Divide": 
                echo $result1 / $result2;
            break;
        }
    }
```
---

### 16. Exercise Using PHP | Scheduled Message Programming
[w3schools date parameters](https://www.w3schools.com/php/func_date_date.asp)

```php
$dayofweek = date('w'); 
// echo $dayofweek;
switch ($dayofweek) {
    case 1:
        echo "It is Monday!";
        break;

    case 2:
        echo "It is Tuesday!";
        break;

    case 3:
        echo "<p>It is Wednesday!</p>";
        break;

    case 4:
        echo "It is Thursday!";
        break;

    case 5:
        echo "It is Friday!";
        break;

    case 6:
        echo "It is Saturday!";
        break;

    case 0:
        echo "It is Sunday!";
        break;
}
```
---

### 27. Session and Cookies in PHP

```php
/*
$_COOKIE: saves information on the Client Side | has a time limit
$_SESSION: saves information on the Server Side | ends as soon as the browser is closed
*/

// setcookie("name", "Test", time() + 86400); // Creates cookie with name "Test"
setcookie("name", "Test", time() - 1); // Destroys cookie with name "Test"

$_SESSION['name'] = '12'; // Creates session with name "12"
```
---

### 28. How to Start a Session in PHP
On every page at the top:

```html
<?php
    session_start(); 
?>

```
```php
// Check if session's username is set
if(!isset($_SESSION['username'])) {
    // if false
} else {
    // if true
}
```
---

### 29. How to Create a MySQL Database for PHP
Create database: for example `phplessons`.   
! Use lower-letters & under_scores as a best practise.

---

### 30. Create a MySQL Table in Database
A table stores one type of data in the database.
1) `create` table called "posts".
2) first column "id" of type `int()` with max 11 numbers.
3) `not null`: it can not be empty
4) `PRIMARY KEY`: no other row can have the same id.
5)  `AUTO_INCREMENT`: each record will have an increased id.  
--
6) second column "subject" of type `varchar()` with max 128 characters.  
--
7) third column "content" of type `varchar()` with max 1000 characters.  
--
8) fourth column "date" of type `datetime`.
```sql
CREATE table posts (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    subject VARCHAR(128) NOT NULL,
    content VARCHAR(1000) NOT NULL,
    date DATETIME NOT NULL
);
```
---

### 31. MySQL Insert into Database
In database `phplessons`:
1) `insert` data in table "posts".
```sql
INSERT INTO posts (subject, content, date) VALUES ('This is the subject', 'Lorum ipsum blablabla', '2018-05-09 14:33:01');
```
---

### 32. Select Data From MySQL Database

```sql
-- select subject from posts
SELECT * FROM posts WHERE id='1' AND subject='This is the subject'
```
---

### 33. Update Data From MySQL Database

```sql
UPDATE posts
SET subject='This is a test', content='This is the content'
WHERE id='1'
```
---

### 34. Delete Data From MySQL Database

```sql
DELETE FROM posts
WHERE id='1'
```
---

### 35. Set Data Order From MySQL Database

```sql
-- SELECT * FROM posts ORDER BY id DESC
SELECT * FROM posts ORDER BY subject ASC
```
---

### 36. How to connect to a database in PHP
in /includes/dbh.inc.php:
```php
// XAMPP
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

// Call inside PHP-block
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
```
in index.php:
```html
<?php 
    // at the top:
    include_once './includes/dbh.inc.php';
?>
...
<?php 
    // connect to database:
    $conn;
?>
```
---

### 37. How to show database data on a website using MySQLi
```sql
CREATE TABLE users (
    user_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    user_first varchar(256) not null,
    user_last varchar(256) not null,
    user_email varchar(256) not null,
    user_uid varchar(256) not null,
    user_pwd varchar(256) not null
);

INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
    VALUES ('Nick', 'van der Sangen', 'sangen@x-ingredient.nl', 'Admin', 'test123');
INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
    VALUES ('Jane', 'Doe', 'jane@jane.com', 'jane249a', 'test789');
```

in index.php:
```php
    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn, $sql);

    // Only execute when there are results
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0) {
        // store each row in the $row-array
        while ($row = mysqli_fetch_assoc($result)) {
            // access by passing the name of the column
            echo $row['user_uid'] . "<br />";
        }
    }
```
---




