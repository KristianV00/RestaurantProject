
<?php
                  /*
                 $connect = mysqli_connect("localhost", "root", "", "restaurant") or die("connection failed: ". mysqli_connect_error());
                 $sql = "INSERT INTO `ingredients`(`ingr_name`, `ingr_quantity`) 
                  VALUES 
                  ('chicken', 3500),
                  ('onions', 3400),
                  ('rice', 3300),
                  ('salt', 3200),
                  ('potatoes', 3700),
                  ('tomatoes',2500),
                  ('tomatosauce', 2400),
                  ('garlic',1900),
                  ('beef', 1700),
                  ('pepper', 3000),
                  ('spaghetti', 2300)";
                $query = mysqli_query($connect, $sql);
                */
                
               $connect = mysqli_connect("localhost", "root", "", "restaurant") or die("connection failed: " . mysqli_connect_error());
               $sql = "
                   UPDATE `ingredients` 
                   SET `ingr_quantity` = CASE 
                       WHEN `ingr_name` = 'chicken' THEN 3500
                       WHEN `ingr_name` = 'onions' THEN 3400
                       WHEN `ingr_name` = 'rice' THEN 3300
                       WHEN `ingr_name` = 'salt' THEN 3200
                       WHEN `ingr_name` = 'potatoes' THEN 3700
                       WHEN `ingr_name` = 'tomatoes' THEN 2500
                       WHEN `ingr_name` = 'tomatosauce' THEN 2400
                       WHEN `ingr_name` = 'garlic' THEN 1900
                       WHEN `ingr_name` = 'beef' THEN 1700
                       WHEN `ingr_name` = 'pepper' THEN 3000
                       WHEN `ingr_name` = 'spaghetti' THEN 2300
                   END
                   WHERE `ingr_name` IN ('chicken', 'onions', 'rice', 'salt', 'potatoes', 'tomatoes', 'tomatosauce', 'garlic', 'beef', 'pepper', 'spaghetti');
               ";

               $query = mysqli_query($connect, $sql);
               

               


/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

