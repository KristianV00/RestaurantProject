<?php
        class Ingredient{
           private $name;
           private $quantity;
           
           public function __construct($name, $quantity) {
               $this->name = $name;
               $this->quantity = $quantity;
           }   
           
           public function getQuantity() {
              return $this->quantity;
           }
           
           public function getName(){
              return $this->name;
           }
       }
        
        class Dish{
           private $name;
           private $ingredients = [];
           
           public function __construct($name) {
              $this->name = $name;
           }
           
           public function getName(){
              return $this->name;
           }
           
           public function addIngredients(Ingredient $ingredient){
              $this->ingredients[] = $ingredient;
           }
           
           public function getIngredientQuantity($ingredientName) {
               foreach ($this->ingredients as $ingredient) {
                  if ($ingredient->getName() == $ingredientName) {
                     return $ingredient->getQuantity();
                  }
               }      
           }    
       }
        
         
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

