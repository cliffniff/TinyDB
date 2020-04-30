# TinyDB
Incredibly lightweight portable JSON database built with PHP.
A mongodb like database.
Inspired by python library TinyDb.(Though not very functional like it , will be in the future)
Uses a JSON file as a database.
You can search,
        insert,
        update,
        delete data.
For now it only supports two-dimensional data.
       
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
