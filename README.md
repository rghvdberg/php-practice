# The PHP Practitioner

- <https://laracasts.com/series/php-for-beginners>
- start a server with `php -S localhost:8888`

## Step 3: Variables

- commands operations end with `;`
- variables start with `$`
  - `$var`
- period `.` is used for concatenation
  - `echo 'Hello ,' . $var;`
- double quotes for printing the variable in a string
  - `echo "Hello , $var";`
- curly braces can be used for better readability
  - `echo "Hello, {$var}";`

---

## Step 4: PHP and HTML

- a file with 100% php has no php closing tag `?>`
- `$_GET['var']` gets the value of a key value pair in the url
  - with url `http://localhost:8888?var=foo` , `$_GET['var']` will return `foo`
- `htmlspecialchars()`; Convert special characters to HTML entities
  - useful for making sure no html is parsed in `$_GET` , aka sanitize
- use `<?=` as a shorthand for `<?php echo`
- end css statements with `;`
- comment out html with `<!-- this is a comment -->`

---

## Step 5: Separate Logic From Presentation

- `require <file.php>` loads an external php file
  - allows separation of logic and rendering

---

## Step 6: Understanding Arrays

- `$myArray[]` defines an empty array
- assign values  

  ```php
  $myArray=[  
   'item1',
   'item2'
   ]
   ```

- loop over array

  ```php
  <?php foreach($myArray as $item){
    // do stuff 
  }
  ?>
  ```

  - or

  ```php
  <?php foreach($myArray as $item) : ?>
  // do stuff
  <?php endforeach; ?>
  ```

---

## Step 7: Associative Arrays

- key value pairs use arrow `=>`
  - `$myArray['key'=>'value]`
- add key/value to existing array `$myArray['newKey']='newValue'`
- add value to non associative array `myArray[]='newValue'`
- remove key/value `unset(myArray['key'])`
- dump variable info with `var_dump($myVar)`
- `die('message')` stops execution
  - e.g. `die(var_dump($myVar))`
  
---

## Step 8: Booleans

- boolean values `true` / `false`
  - e.g. `$completed = true;`
- ternary operator `$condition ? 'do this when true' : 'do this when false';`
- `ucwords('uppercase the first character of each word in a string')`

---

## Step 9: Conditionals

- ```php
  <?php 
    if (condition) {
      // do stuff
    }
    else {
      // do stuff
      }
  ?>
  ```
  
- or
  
  ```php
  <?php if(condition) : ?>
    // do html stuff
  <?php endif; ?>
  ```

- with `else`
  
  ```php
  <?php if(condition) : ?>
    //do html stuff
  <?php else : ?>
    // do other html stuff
  <?php endif; ?>
  ```

- use `!` for _not_
  - `! true` == `false`

- <https://www.w3schools.com/charsets/ref_utf_dingbats.asp>

---

## Step 10 : Functions

- ```php
  function functionName($arg){
    // do stuff
    
    // optionally return
    $returnValue = true;
    
    return $returnValue;
  }
  ```
  
---

## Step 11 : MySQL 101

- using mariadb instead of mysql ;-)
- cd into step_11
  - `docker compose up -d`
  - `docker compose exec db mariadb -uroot`
- sql commands end with `;`
- some commands
  - `show databases;`
  - `create database mytodos;`
  - `use mytodos;`
  
  - ```sql
    create table todos (id integer PRIMARY KEY AUTO_INCREMENT,
                        description  text NOT NULL,
                        completed boolean NOT NULL);
    ```
  
  - ```sql
    show tables;
    +------------------+
    | Tables_in_mytodo |
    +------------------+
    | todos            |
    +------------------+
    1 row in set (0.016 sec)

    ```

  - ```sql
    describe todos;
    +-------------+------------+------+-----+---------+----------------+
    | Field       | Type       | Null | Key | Default | Extra          |
    +-------------+------------+------+-----+---------+----------------+
    | id          | int(11)    | NO   | PRI | NULL    | auto_increment |
    | description | text       | NO   |     | NULL    |                |
    | completed   | tinyint(1) | NO   |     | NULL    |                |
    +-------------+------------+------+-----+---------+----------------+
    3 rows in set (0.097 sec)
    ```
  
  - `drop table table_name;`
  - insert new record

    - ```sql
      insert into todos (description, completed ) values('Go to the store', false);
      ```

  - show records

    - ```sql
      select * from todos;
      +----+-----------------+-----------+
      | id | description     | completed |
      +----+-----------------+-----------+
      |  1 | Go to the store |         0 |
      +----+-----------------+-----------+
      1 row in set (0.001 sec)
      ```

---

## Step 12 : Classes 101

- define a class with `class`
- properties
  - `protected $prop`
  - can also be 'private' and 'public'
- constructor `public function __construct($prop)`
- access member functions and properties with `$this->prop`
  - **note that `prop` gets no `$`**
- create new object with `new`
  - `new myClass('property');`
    - constructors can take arguments

---

## Step 13 : Intro to PDO

- <https://www.php.net/manual/en/book.pdo.php>
- connect to database with
  - SQLite: `PDO("sqlite:path_to_db);`
  - MySQL: `PDO('mysql:host=172.21.0.2;dbname=mytodos', 'root', '');`

- query in two parts
  - `prepare('QUERY_STRING')`
  - `execute()`

---

## Step 14 : PDO Refactoring and Collaborators

- split and move different functions over different files
- `static` function : use function without instantiating a class
- NOTE: php files can return value (see `bootstrap.php`)

---

## Step 15 : Hide Your Secret Passwords

- move database configurations in `config.php`

---

## Step 16 : Make a Router

- restructure code in **core** / **controllers** / **views**
- `$_SERVER['REQUEST_URI']` returns URI
- `static` function `Router::load($var)` 
  - create new `Router` object with `$router = new static;`
  - can't return `$this` because it's a static object
  - use `return $router`

---