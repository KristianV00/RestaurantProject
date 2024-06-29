<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-image: url('images/Bg8.jpg'); 
            background-size: cover;
            margin: 15%;
            padding: 0;
        }
        
        a {
             display: block; 
             padding: 10px 20px; 
             margin: 1% 38% 0%; 
             background-color: #ffffff; 
             color: #d2b48c; 
             text-decoration: none; 
             border-radius: 5px; 
             font-weight: bold; 
             text-align: center;
        }

        a:hover {
            background-color: #006400;
        }

    </style>
</head>
<body>

    <main>
         <a href="orderMenu.php">Order Menu</a><br>
        <a href="addIngredients.php">Add Ingredient</a><br>
        <?php
         include 'ingredientsSQL.php';

        ?>
        </main>
    </body>
</html>