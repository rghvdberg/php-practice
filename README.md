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
  <?php foreach($myArray, as $item){
    // do stuff 
  }
  ?>
  ```

  - or

  ```php
  <?php foreach($myArray,as $item) : ?>
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
