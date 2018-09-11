<?php
require 'phpclass.php';
require 'phpcowclass.php';
require 'phplionclass.php';
$cow  = new Cow('Herbivore', 'Grass', 8);
$lion = new Lion('Canirval', 'Meat', 5);
echo '<b>Cow Object</b> <br>';
echo 'The Cow belongs to the ' . $cow->get_family() . ' family and eats ' . $cow->get_food() . ' and their family members count ' . $cow->get_counts() . '<br><br>';
echo '<b>Lion Object</b> <br>';
echo 'The Lion belongs to the ' . $lion->get_family() . ' family and eats ' . $lion->get_food() . ' and their family members count ' . $cow->get_counts();
?>