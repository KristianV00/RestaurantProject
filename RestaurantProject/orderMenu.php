    <style>

        body {
            font-family: 'Arial', sans-serif;
            background-image: url('images/Bg8.jpg'); 
            background-size: cover;
            margin: 15px;
            padding: 0;
        }
        
        main {
            max-width: 600px;
            height: 130%;
            margin: 0px auto;
            padding: 5px;
            background-color: brown;
            background-image: url('images/Bg3.jpg'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            border-radius: 8px;
        }

        form {
            max-width: 300px;
            margin-left: 150px;
            margin-top: 86px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

         .dish-images {
             display: grid;
             grid-template-columns: repeat(2, 1fr);
             gap: 35px;
             margin-top: 45px;
        }
         
        .dish-images img {
             height: 100px; 
             width: 150px; 
             border-radius: 8px;
             margin: 0 auto; 
             margin-top: 5px;
             display: block; 
        }
         
        .dish-images p {
            margin-top: 50px; 
            color: #333; 
            font-weight: bold; 
            margin-left: 85px;
        }
        
        #errorMessage {
            color: red; 
            font-weight: bold; 
            text-align: center;
            position: absolute;
            left: 45%;
            top: 40%;
            font-size: 12px; 
        }
        #successMessage {
            color: green; 
            font-weight: bold; 
            text-align: center; 
            position: absolute;
            left: 43%;
            top: 40%;
            font-size: 12px; 
        }
        
        .invisible-button {
            opacity: 0; 
            width: 165px;
            padding: 7px;
            margin-left: 67px;
            margin-top: 9px;
            cursor: pointer;
        }
        
        header {
            background-color: transparent;
            color: white; 
            padding: 10px;
            text-align: left;
            width: 70%;
        }
        header a {
            text-decoration: none;
            color: white;
            padding: 10px;
            margin-left: 50px;
            border: 3px solid white;
            border-radius: 5px;
        }
        
    </style>
    
</head>
<body>
    
    <header>
         <a href="mainMenu.php">Main Menu</a><br>
    </header>
    
    <main>
        <form method="POST">
            <input type="text" name="selectedDish"><br>
            <input class ="invisible-button" type="submit" name="submit">
        </form>
        <?php
               include 'classes.php';
         
               echo '<div class="dish-images">';
               echo '<p>Chicken with rice</p>';
               echo '<img src="images/ChickenAndRice.jpg" alt="Chicken with Rice">';
               echo '<p>Spaghetti Bolognese</p>';
               echo '<img src="images/SpaghettiBolognesse.jpg" alt="Spaghetti Bolognese">';
               echo '<p>Tomato And Pepper Soup</p>';
               echo '<img src="images/TomatoAndPepperSoup.jpg" alt="Tomato and Pepper Soup">';
               echo '<p>Beef And Vegetables</p>';
               echo '<img src="images/BeefAndVegetables.jpg" alt="Beef and Vegetables">';
               echo '</div>';
               
               
               $ChickenRice = new Dish("Chicken with rice");
               $ChickenRice->addIngredients(new Ingredient("rice", 200));
               $ChickenRice->addIngredients(new Ingredient("chicken", 150));
               $ChickenRice->addIngredients(new Ingredient("salt", 30));

               $SpaghettiBolognese = new Dish("Spaghetti Bolognese");
               $SpaghettiBolognese->addIngredients(new Ingredient("beef", 200));
               $SpaghettiBolognese->addIngredients(new Ingredient("tomatosauce", 500));
               $SpaghettiBolognese->addIngredients(new Ingredient("spaghetti", 400));
               $SpaghettiBolognese->addIngredients(new Ingredient("salt", 50));

               $TomatoSoup = new Dish("Tomato And Pepper Soup");
               $TomatoSoup->addIngredients(new Ingredient("tomatoes", 250));
               $TomatoSoup->addIngredients(new Ingredient("onions", 80));
               $TomatoSoup->addIngredients(new Ingredient("garlic", 50));
               $TomatoSoup->addIngredients(new Ingredient("pepper", 150));

               $BeefVegetables = new Dish("Beef And Vegetables");
               $BeefVegetables->addIngredients(new Ingredient("beef", 250));
               $BeefVegetables->addIngredients(new Ingredient("onions", 45));
               $BeefVegetables->addIngredients(new Ingredient("garlic", 55));
               $BeefVegetables->addIngredients(new Ingredient("pepper", 100));         

               $connect = mysqli_connect("localhost", "root", "", "restaurant") or die("connection failed: ". mysqli_connect_error());
               $selectedDish = "";
               if(isset($_POST['submit'])){
                   $selectedDish = $_POST['selectedDish'];
                   if($selectedDish == $ChickenRice->getName()){
                      $updateRice = "UPDATE `ingredients` SET `ingr_quantity` = `ingr_quantity` - {$ChickenRice->getIngredientQuantity('rice')} WHERE `ingr_name` = 'rice'";
                      $updateChicken = "UPDATE `ingredients` SET `ingr_quantity` = `ingr_quantity` - {$ChickenRice->getIngredientQuantity('chicken')} WHERE `ingr_name` = 'chicken'";
                      $updateSalt = "UPDATE `ingredients` SET `ingr_quantity` = `ingr_quantity` - {$ChickenRice->getIngredientQuantity('salt')} WHERE `ingr_name` = 'salt'";
                      $queryRice = mysqli_query($connect, $updateRice);
                      $queryChicken = mysqli_query($connect, $updateChicken);
                      $querySalt = mysqli_query($connect, $updateSalt);

                      echo "<div id='successMessage'>You ordered - " . $ChickenRice->getName() . '</div>';
                   }
                   else if($selectedDish == $SpaghettiBolognese->getName()){
                      $updateBeef = "UPDATE `ingredients` SET `ingr_quantity` = `ingr_quantity` - {$SpaghettiBolognese->getIngredientQuantity('beef')} WHERE `ingr_name` = 'beef'";
                      $updateTomatosauce = "UPDATE `ingredients` SET `ingr_quantity` = `ingr_quantity` - {$SpaghettiBolognese->getIngredientQuantity('tomatosauce')} WHERE `ingr_name` = 'tomatosauce'";
                      $updateSpaghetti = "UPDATE `ingredients` SET `ingr_quantity` = `ingr_quantity` - {$SpaghettiBolognese->getIngredientQuantity('spaghetti')} WHERE `ingr_name` = 'spaghetti'";
                      $updateSalt = "UPDATE `ingredients` SET `ingr_quantity` = `ingr_quantity` - {$SpaghettiBolognese->getIngredientQuantity('salt')} WHERE `ingr_name` = 'salt'";
                      $queryBeef = mysqli_query($connect, $updateBeef);
                      $queryTomatosauce = mysqli_query($connect, $updateTomatosauce);
                      $querySpaghetti = mysqli_query($connect, $updateSpaghetti);
                      $querySalt = mysqli_query($connect, $updateSalt);

                      echo "<div id='successMessage'>You ordered - " . $SpaghettiBolognese->getName() . '</div>';

                   }
                   else if($selectedDish == $TomatoSoup->getName()){
                      $updateTomatoes = "UPDATE `ingredients` SET `ingr_quantity` = `ingr_quantity` - {$TomatoSoup->getIngredientQuantity('tomatoes')} WHERE `ingr_name` = 'tomatoes'";
                      $updateOnions = "UPDATE `ingredients` SET `ingr_quantity` = `ingr_quantity` - {$TomatoSoup->getIngredientQuantity('onions')} WHERE `ingr_name` = 'onions'";
                      $updateGarlic = "UPDATE `ingredients` SET `ingr_quantity` = `ingr_quantity` - {$TomatoSoup->getIngredientQuantity('garlic')} WHERE `ingr_name` = 'garlic'";
                      $updatePepper = "UPDATE `ingredients` SET `ingr_quantity` = `ingr_quantity` - {$TomatoSoup->getIngredientQuantity('pepper')} WHERE `ingr_name` = 'pepper'";
                      $queryTomatoes = mysqli_query($connect, $updateTomatoes);
                      $queryOnions = mysqli_query($connect, $updateOnions);
                      $queryGarlic = mysqli_query($connect, $updateGarlic);
                      $queryPepper = mysqli_query($connect, $updatePepper);

                      echo "<div id='successMessage'>You ordered - " . $TomatoSoup->getName() . '</div>';
                   }
                   else if($selectedDish == $BeefVegetables->getName()){
                      $updateBeef = "UPDATE `ingredients` SET `ingr_quantity` = `ingr_quantity` - {$BeefVegetables->getIngredientQuantity('beef')} WHERE `ingr_name` = 'beef'";
                      $updateOnions = "UPDATE `ingredients` SET `ingr_quantity` = `ingr_quantity` - {$BeefVegetables->getIngredientQuantity('onions')} WHERE `ingr_name` = 'onions'";
                      $updateGarlic = "UPDATE `ingredients` SET `ingr_quantity` = `ingr_quantity` - {$BeefVegetables->getIngredientQuantity('garlic')} WHERE `ingr_name` = 'garlic'";
                      $updatePepper = "UPDATE `ingredients` SET `ingr_quantity` = `ingr_quantity` - {$BeefVegetables->getIngredientQuantity('pepper')} WHERE `ingr_name` = 'pepper'";
                      $queryBeef = mysqli_query($connect, $updateBeef);
                      $queryOnions = mysqli_query($connect, $updateOnions);
                      $queryGarlic = mysqli_query($connect, $updateGarlic);
                      $queryPepper = mysqli_query($connect, $updatePepper);

                      echo "<div id='successMessage'>You ordered - " . $BeefVegetables->getName() . '</div>';
                   }
                   else{
                      echo '<div id="errorMessage">There is no such dish</div>';
                   }

                }
        ?>
        </main>
    </body>



