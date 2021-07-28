# TinyDB
TinyDB is a portable database API made with PHP. This was never intended ti be used in any program. This program was built as a fun project.
You can search, insert, update and delete data.
It only supports two-dimensional data.


## Usage
```
<?php
  include "TinyDB.php";
  
  $db = new TinyDB("db.json");
  $db.insert("John in a businessman.","John");
  $db.insert("He is 24 years old.","John");
  $db.delete("John");
  $db.clear();
?>
```
