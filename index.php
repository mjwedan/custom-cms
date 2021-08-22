<html>
    <head>
        <?php include 'head.php' ?>
    </head>
    <body>
        <?php include 'header.php' ?>
        <?php include 'nav.php' ?>
    <div id="main">
        <main>
            <?php function getPostTitlesFromDatabase() {
                $postTitles = array("To Die For Blueberry Muffins", "Tiffany's Chocolate Chip Cookies", "MMMMM...Brownies");
                return $postTitles;
            }
            ?>
            <br><br><br>
            <ul>
            <?php
                $postTitles = getPostTitlesFromDatabase();
                foreach($postTitles as $postTitle) {
                    echo "<li><a href='post.php?title=" . $postTitle . "'>" . $postTitle . 
                    "</a></li>"; 
                }
                ?>
            </ul>   
        </main>
    </div><!--close for main-->
    <?php include 'footer.php' ?>
    </body>
</html>