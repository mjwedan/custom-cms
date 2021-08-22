<?php
 
 // get the data to insert into the db
 $title = $_POST["title"];
 $author = $_POST["author"];
 $date = $_POST["date"];
 $briefdescription = $_POST["briefdescription"];
 $image = $_POST["image"];
 $ingredients = $_POST["ingredients"]
 $directions = $_POST["directions"];
 $nutrition = $_POST ["nutrition"];

 // insert the data with the sql query
 include_once 'dbconnect.php';
 $sql="INSERT INTO recipes (title, author, date, briefdescription, image, ingredients, directions, nutrition) VALUES ('" .     
     $title . "','" .  $author . "','" . $date . "','" . $briefdescription . "','" . $image . "','" . $ingredients . "','" . $directions . "','" . $nutrition ."')";
 $result = mysqli_query($conn, $sql);
 
 // redirect to homepage
 header("Location: index.php");

if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
//Insert image content into database
            $insert = $db->query("INSERT into images (image, created) VALUES ('$imgContent', '$dataTime')");
            if($insert){
                echo "File uploaded successfully.";
            }else{
                echo "File upload failed, please try again.";
            } 
        }else{
            echo "Please select an image file to upload.";
        }
?>