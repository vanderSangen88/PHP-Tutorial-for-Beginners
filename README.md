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
    case 2:
        echo "The answer is 2";
    break;
    default: 
        echo "There is no answer";
} 
```
---




