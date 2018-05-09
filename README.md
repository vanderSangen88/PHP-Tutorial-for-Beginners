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



