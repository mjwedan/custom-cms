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
            function getPostTitlesFromDatabase() {
                // Get all the post titles from the posts table
                include_once 'dbconnect.php';
                $sql = "SELECT title FROM recipes";
                $result = mysqli_query($conn, $sql);

                // Get each result row as an assoc array, then add title to $postTitles
                $postTitles = array();
                while($row = mysqli_fetch_assoc($result)){
                    array_push($postTitles, $row['title']);
                }
                return $postTitles;
            }
            ?>
            <ul>
            <?php 
                    $postTitles = getPostTitlesFromDatabase();

                    foreach($postTitles as $postTitle) {
                        echo "<li><a href='post.php?title=" . $postTitle
                        . " ' class='title'>" . $postTitle . "</a></li>";
                    }
                ?>
            </ul>
        </main>
    </div><!--close for main-->
    <?php include 'footer.php' ?>
    </body>
</html>