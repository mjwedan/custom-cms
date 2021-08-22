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
                <h2><?php echo $postDetails["title"]; ?></h2>
                <div><?php echo $postDetails ["briefdescription"]; ?></div>
                <br>
                <div><?php echo $postDetails ["author"]; ?></div>
                <br>
                <div><?php echo $postDetails ["date"]; ?></div>
                <br>
                <div><?php echo $postDetails ["image"]; ?></div>
                <br>
                <h3>Ingredients</h3>
                <div><?php echo $postDetails ["ingredients"]; ?></div>
                <br>
                <h3>Directions</h3>
                <div><?php echo $postDetails ["directions"]; ?></div>
                <br>
                <h3>Nutrition</h3>
                <div><?php echo $postDetails ["nutrition"]; ?></div>
        </main>
    </div><!--close for main-->
    <?php include 'footer.php' ?>
    </body>
</html>