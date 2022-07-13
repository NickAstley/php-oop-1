<?php 
require_once "classes/Movie.php";

$matrix = new Movie("Matrix", 1999, 8.7, "The Wachowski Sisters", "Action");
$shawshankRedemption = new Movie("The Shawshank Redemption", 1994, 9.3, "Frank Darabont", "Drama");

$matrix->printCard();
$shawshankRedemption->printCard();

?>