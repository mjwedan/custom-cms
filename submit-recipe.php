<?php
 
 // get the data to insert into the db
 $title = $_POST["title"];
 $author = $_POST["author"];
 $date = $_POST["date"];
 $briefdescription = $_POST["briefdescription"];
 $ingredients = $_POST["ingredients"]
 $directions = $_POST["directions"];
 $nutrition = $_POST ["nutrition"];

 // insert the data with the sql query
 include_once 'dbconnect.php';
 $sql="INSERT INTO recipes (title, author, date, briefdescription, ingredients, directions, nutrition) VALUES ('" .     
     $title . "','" .  $author . "','" . $date . "','" . $briefdescription . "','" . $ingredients . "','" . $directions . "','" . $nutrition ."')";
 $result = mysqli_query($conn, $sql);
 
 // redirect to homepage
 header("Location: index.php");
?>