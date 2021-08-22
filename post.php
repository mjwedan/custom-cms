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
                <div> <?php echo $postDetails ["briefdescription"]; ?> </div>
                <div> <?php echo $postDetails ["author"]; ?> </div>
                <div> <?php echo $postDetails ["date"]; ?> </div>
                <div> <?php echo $postDetails ["image"]; ?> </div>
                <h3> <?php echo $postDetails ["ingredients"]; ?> </h3>
                <h3> <?php echo $postDetails ["directions"]; ?> </h3>
                <h3> <?php echo $postDetails ["nutrition"]; ?> </h3>
        </main>
    </div><!--close for main-->
    <?php include 'footer.php' ?>
    </body>
</html>