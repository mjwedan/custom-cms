<html>
    <head>
        <?php include 'head.php' ?>
    </head>
    <body>
        <?php include 'header.php' ?>
        <?php include 'nav.php' ?>
    <div id="main">
        <main>
        <div id="form">
                <h2>Submit a New Recipe!</h2>
                <form class="recipe-submissions-form" action="submit-recipe.php" method="post">
<label for="title">Name of Recipe</label><br>
<input type="text" id="title" name="title" placeholder="Title"></input><br><br>
<label for="author">Author</label><br>
<input type="text" id="author" name="author" placeholder="Author"></input><br><br>
<label for="date">Date</label><br>
<input type="date" id="date" name="date" placeholder="Date"></input><br><br>
<label for="briefdescription">Brief Description</label><br>
<input type="text" id="briefdescription" name="briefdescription" placeholder="Brief Description"></input><br><br>
<label for="ingredients">Ingredients</label><br>
<textarea id="ingredients" name="ingredients" rows="4" cols="50"></textarea> <br><br>
<label for="directions">Directions</label><br>
<textarea id="directions" name="directions" rows="4" cols="50"></textarea> <br><br>
<label for="nutrition">Nutrition Facts</label><br>
<textarea id="nutrition" name="nutrition" rows="4" cols="50"></textarea> 
<button type="submit" value="Submit">SUBMIT</button>
</form>
        </main>
    </div><!--close for main-->
    <?php include 'footer.php' ?>
    </body>
</html>