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
                    $postDetails = array('title' => 'To Die For Blueberry Muffins',
                    'briefdescription' => '<p>These muffins are extra large and yummy with the sugary-cinnamon crumb topping. I usually double the recipe and fill the muffin cups just to the top edge for a wonderful extra-generously-sized deli style muffin. Add extra blueberries too, if you want!</p>',
                    'author' => '<a href="https://www.allrecipes.com/recipe/6865/to-die-for-blueberry-muffins/">allrecipes</a>',
                    'image' => '<img src="images/blueberrymuffin.jpg" alt="Blueberry Muffins on Cooling Tray" title="Blueberry Muffins">',
                    'datepublished' => ' August 22, 2021',
                    'ingredients' => 'Ingredients',
                    'ingredientdetails' => '<ul><li>1 1/2 cups all-purpose flour</li><li>3/4 cup white sugar</li><li>1/2 tsp salt</li><li>2 tsp baking powder</li><li>1/3 cup vegetable oil</li><li>1 egg</li><li>1/3 cup milk, or more as needed</li><li>1 cup fresh blueberries</li><li>1/2 cup white sugar</li></ul>',
                    'topping' => 'Crumble Topping Ingredients',
                    'toppingdetails' => '<ul><li>1/3 cup all-purpose flour</li><li>1/4 cup butter, cubed</li><li>1 1/2 tsp ground cinnamon</li></ul>',
                    'directions' => 'Directions',
                    'directiondetails' => '<ol><li>Preheat oven to 400 degrees F (200 degrees C). Grease muffin cups or line with muffin liners.</li><li>To Make Crumb Topping: Mix together 1/2 cup sugar, 1/3 cup flour, 1/4 cup butter, and 1 1/2 teaspoons cinnamon. Mix with fork, and sprinkle over muffins before baking.</li><li>Combine 1 1/2 cups flour, 3/4 cup sugar, salt and baking powder. Place vegetable oil into a 1 cup measuring cup; add the egg and add enough milk to reach the 1-cup mark. Mix this with flour mixture. Fold in blueberries. Fill muffin cups right to the top, and sprinkle with crumb topping mixture.</li><li>Bake for 20 to 25 minutes in the preheated oven, or until done.</ol>',
                    'nutrition' => 'Nutrition',
                    'nutritiondetails' => '<p>383 calories</p><p>protein 4.3g</p><p>carbohydrates 56.9g</p><p>fat 16.1g</p><p>cholesterol 39.3mg</p> <p>sodium 321.8mg</p>');
                    return $postDetails;
                }
                ?>
                <?php
                    $postDetails = getPostDetailsFromDatabase();
                ?>
                <h2> <?php echo $postDetails ["title"]; ?> </h2>
                <div id ="briefdescription"> <?php echo $postDetails ["briefdescription"]; ?> </div>
                <div id ="author"> <?php echo $postDetails ["author"]; ?> </div>
                <div id ="datepublished"> <?php echo $postDetails ["datepublished"]; ?> </div>
                <div id ="image"> <?php echo $postDetails ["image"]; ?> </div>
                <h3> <?php echo $postDetails ["ingredients"]; ?> </h3>
                <div id ="ingredientdetails"> <?php echo $postDetails ["ingredientdetails"]; ?> </div>
                <h3> <?php echo $postDetails ["topping"]; ?> </h3>
                <div id ="toppingdetails"> <?php echo $postDetails ["toppingdetails"]; ?> </div>
                <h3> <?php echo $postDetails ["directions"]; ?> </h3>
                <div id ="directiondetails"> <?php echo $postDetails ["directiondetails"]; ?> </div>
                <h3> <?php echo $postDetails ["nutrition"]; ?> </h3>
                <div id ="nutritiondetails"> <?php echo $postDetails ["nutritiondetails"]; ?> </div>
        </main>,
    </div><!--close for main-->
    <?php include 'footer.php' ?>
    </body>
</html>