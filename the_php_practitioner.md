# The PHP Practitioner

- <https://laracasts.com/series/php-for-beginners>
- start a server with `php -S localhost:8888`

## Step 3: Variables

- commands operations end with `;`
- variables start with `$`
  - `$var`
- period `.` is used for concatination
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
- comment out html with `<! -- this is a comment -->`

---

## Step 5: Seperate Logic From Presentation

- `require <file.php>` loads an external php file
  - allows seperation of logig and rendering

---
