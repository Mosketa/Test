<?php

// classe de base, avec des propriétés et des méthodes membres
class Vegetable {

   var $edible;
   var $titi;
   var $color;
   var $toto;
   var $titititi;
   var $hello;

   function __construct($edible, $color="green")
   {
       $this->edible = $edible;
       $this->color = $color;
   }

   function is_edible()
   {
       return $this->edible;
   }

   function what_color()
   {
       return $this->color;
   }
} // fin de la classe Vegetable

?>