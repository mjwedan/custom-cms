<?php
 
 // get the data to insert into the db
 $title = $_POST["title"];
 $briefdescription = $_POST["briefdescription"];
 $author = $_POST["author"];
 $datepublished = $_POST["datepublished"];
 $image = $_POST["image"];
 $ingredients = $_POST["ingredients"]
 $ingredientdetails = $_POST["ingredientdetails"];
 $directions = $_POST["directions"];
 $directiondetails = $_POST["directiondetails"];
 $nutrition = $_POST ["nutrition"];
 $nutritiondetails = $_POST["nutritiondetails"];

 // insert the data with the sql query
 include_once 'db_connect.php';
 $sql="INSERT INTO posts (title, content, author, date) VALUES ('" .     
     $title . "','" .  $content . "','" . $author . "','" . $date . "')";
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