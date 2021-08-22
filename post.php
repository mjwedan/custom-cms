<html>
    <head>
        <?php include 'head.php' ?>
    </head>
    <body>
        <?php include 'header.php' ?>
        <?php include 'nav.php' ?>
    <div id="main">
        <main>
            <?php
                function getPostDetailsFromDatabase() {
                    // Get the post title
                    $postTitle = rawurldecode($_GET["title"]);

                    // Get the post that matches the postTitle
                    include_once 'dbconnect.php';
                    $sql = "SELECT * FROM recipes WHERE title='" . $postTitle . "'";
                    $result = mysqli_query($conn, $sql);

                    // Get the first row from the result as an associative array
                    $postDetails = mysqli_fetch_assoc($result);
                    return $postDetails;
                }
            ?>
            <?php
                // Post details contain all the data to generate the blog from

                $postDetails = getPostDetailsFromDatabase();
                ?>
                <h2> <?php echo $postDetails["title"]; ?> </h2>
                <div id ="briefdescription"> <?php echo $postDetails ["briefdescription"]; ?> </div>
                <div id ="author"> <?php echo $postDetails ["author"]; ?> </div>
                <div id ="date"> <?php echo $postDetails ["date"]; ?> </div>
                <div id ="image"> <?php echo $postDetails ["image"]; ?> </div>
                <h3> <?php echo $postDetails ["ingredients"]; ?> </h3>
                <div id ="ingredients"> <?php echo $postDetails ["ingredients"]; ?> </div>
                <h3> <?php echo $postDetails ["directions"]; ?> </h3>
                <div id ="directions"> <?php echo $postDetails ["directions"]; ?> </div>
                <h3> <?php echo $postDetails ["nutrition"]; ?> </h3>
                <div id ="nutrition"> <?php echo $postDetails ["nutrition"]; ?> </div>
        </main>
    </div><!--close for main-->
    <?php include 'footer.php' ?>
    </body>
</html>