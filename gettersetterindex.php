<?php
require_once "gettersetterclass.php";

$category = new Category();
$category->setName("Product");
$category->setExpensive(true);

$category->setName("     ");

echo "Category : " . $category->getName() . PHP_EOL;
echo "Is Expensive : " . $category->isExpensive() . PHP_EOL;
