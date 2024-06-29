    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-image: url('images/Bg8.jpg'); 
            background-size: cover;
            padding: 0;
        }
        
        form {
            margin-left: 550px;
        }
        
        input[type="text"]{
           width: 50px;
           margin-left: 3%;
        }
        
        label {
            width: 100px; 
            display: inline-block;
            font-weight: bold;
        }
        
        #successMessage {
            color: green; 
            font-weight: bold; 
            text-align: center; 
            position: absolute;
            left: 43%;
            top: 25%;
            font-size: 12px; 
        }
        
        #errorMessage {
            color: red; 
            font-weight: bold;
            text-align: center; 
            position: absolute;
            left: 43%;
            top: 25%;
            font-size: 12px; 
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
        
        main {
            margin-top: 125px;
        }
    </style>
</head>
<body>
    <header>
         <a href="mainMenu.php">Main Menu</a><br>
    </header>
    
    <main>
        <form method="POST">
                <label for="chicken">Chicken:</label>
               <input type="text" name="Chicken">
                <input type="submit" name="addChicken" value="+">
        </form>
        
        <form method="POST">
                <label for="onions">Onions:</label>
                <input type="text" name="Onions">
                <input type="submit" name="addOnions" value="+">
        </form>
        
        <form method="POST">
                <label for="rice">Rice:</label>
                <input type="text" name="Rice">
                <input type="submit" name="addRice" value="+">
        </form>
        
        <form method="POST">
                <label for="salt">Salt:</label>
                <input type="text" name="Salt">
                <input type="submit" name="addSalt" value="+">
        </form>
        
        <form method="POST">
                <label for="potatoes">Potatoes:</label>
                <input type="text" name="Potatoes">
                <input type="submit" name="addPotatoes" value="+">
        </form>
        
        <form method="POST">
                <label for="tomatoes">Tomatoes:</label>
                <input type="text" name="Tomatoes">
                <input type="submit" name="addTomatoes" value="+">
        </form>
        
        <form method="POST">
                <label for="tomatosauce">Tomatosauce:</label>
                <input type="text" name="Tomatosauce">
                <input type="submit" name="addTomatosauce" value="+">
        </form>
        
        <form method="POST">
                <label for="garlic">Garlic:</label>
                <input type="text" name="Garlic">
                <input type="submit" name="addGarlic" value="+">
        </form>
        
        <form method="POST">
                <label for="beef">Beef:</label>
                <input type="text" name="Beef">
                <input type="submit" name="addBeef" value="+">
        </form>
        
        <form method="POST">
                <label for="pepper">Pepper:</label>
                <input type="text" name="Pepper">
                <input type="submit" name="addPepper" value="+">
        </form>
        
        <form method="POST">
                <label for="spaghetti">Spaghetti:</label>
                <input type="text" name="Spaghetti">
                <input type="submit" name="addSpaghetti" value="+">
        </form>
        
        <?php
         $connect = mysqli_connect("localhost", "root", "", "restaurant") or die("connection failed: ". mysqli_connect_error());
         $addIngredient;
         try{
          if(isset($_POST['addChicken'])){
             $addIngredient = $_POST['Chicken'];
             $updateChicken = "UPDATE `ingredients` SET `ingr_quantity` = `ingr_quantity` + $addIngredient WHERE `ingr_name` = 'chicken'";
             $queryChicken = mysqli_query($connect, $updateChicken);
             echo "<div id='successMessage'>Chicken is added</div>";
          }
          else if(isset ($_POST['addOnions'])){
             $addIngredient = $_POST['Onions'];
             $updateOnions = "UPDATE `ingredients` SET `ingr_quantity` = `ingr_quantity` + $addIngredient WHERE `ingr_name` = 'onions'";
             $queryOnions = mysqli_query($connect, $updateOnions);
             echo "<div id='successMessage'>Onions is added</div>";
          }
          else if(isset ($_POST['addRice'])){
             $addIngredient = $_POST['Rice'];
             $updateRice = "UPDATE `ingredients` SET `ingr_quantity` = `ingr_quantity` + $addIngredient WHERE `ingr_name` = 'rice'";
             $queryRice = mysqli_query($connect, $updateRice);
             echo "<div id='successMessage'>Rice is added</div>";
          }
          else if(isset ($_POST['addSalt'])){
             $addIngredient = $_POST['Salt'];
             $updateSalt = "UPDATE `ingredients` SET `ingr_quantity` = `ingr_quantity` + $addIngredient WHERE `ingr_name` = 'salt'";
             $querySalt = mysqli_query($connect, $updateSalt);
             echo "<div id='successMessage'>Salt is added</div>";
          }
          else if(isset ($_POST['addPotatoes'])){
             $addIngredient = $_POST['Potatoes'];
             $updatePotatoes = "UPDATE `ingredients` SET `ingr_quantity` = `ingr_quantity` + $addIngredient WHERE `ingr_name` = 'potatoes'";
             $queryPotatoes = mysqli_query($connect, $updatePotatoes);
             echo "<div id='successMessage'>Potatoes is added</div>";
          }
          else if(isset ($_POST['addTomatoes'])){
             $addIngredient = $_POST['Tomatoes'];
             $updateTomatoes = "UPDATE `ingredients` SET `ingr_quantity` = `ingr_quantity` + $addIngredient WHERE `ingr_name` = 'tomatoes'";
             $queryTomatoes = mysqli_query($connect, $updateTomatoes);
             echo "<div id='successMessage'>Tomatoes is added</div>";
          }
          else if(isset ($_POST['addTomatosauce'])){
             $addIngredient = $_POST['Tomatosauce'];
             $updateTomatosauce = "UPDATE `ingredients` SET `ingr_quantity` = `ingr_quantity` + $addIngredient WHERE `ingr_name` = 'tomatosauce'";
             $queryTomatosauce = mysqli_query($connect, $updateTomatosauce);
             echo "<div id='successMessage'>Tomato sauce is added</div>";
          }
          else if(isset ($_POST['addGarlic'])){
             $addIngredient = $_POST['Garlic'];
             $updateGarlic = "UPDATE `ingredients` SET `ingr_quantity` = `ingr_quantity` + $addIngredient WHERE `ingr_name` = 'garlic'";
             $queryGarlic = mysqli_query($connect, $updateGarlic);
             echo "<div id='successMessage'>Garlic is added</div>";
          }
          else if(isset ($_POST['addBeef'])){
             $addIngredient = $_POST['Beef'];
             $updateBeef = "UPDATE `ingredients` SET `ingr_quantity` = `ingr_quantity` + $addIngredient WHERE `ingr_name` = 'beef'";
             $queryBeef = mysqli_query($connect, $updateBeef);
             echo "<div id='successMessage'>Beef is added</div>";
          }
          else if(isset ($_POST['addPepper'])){
             $addIngredient = $_POST['Pepper'];
             $updatePepper = "UPDATE `ingredients` SET `ingr_quantity` = `ingr_quantity` + $addIngredient WHERE `ingr_name` = 'pepper'";
             $queryPepper = mysqli_query($connect, $updatePepper);
             echo "<div id='successMessage'>Pepper is added</div>";
          }
          else if(isset ($_POST['addSpaghetti'])){
             $addIngredient = $_POST['Spaghetti'];
             $updateSpaghetti = "UPDATE `ingredients` SET `ingr_quantity` = `ingr_quantity` + $addIngredient WHERE `ingr_name` = 'spaghetti'";
             $querySpaghetti = mysqli_query($connect, $updateSpaghetti);
             echo "<div id='successMessage'>Spaghetti is added</div>";
          }
         }
         catch(Exception $e){
            echo "<div id='errorMessage'>Invalid input</div>";
         }
            
        ?>
        </main>
    </body>


