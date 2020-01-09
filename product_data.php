<?php

/*
    Hardcoded demo data.
    Imagine this coming from a MySQL database like this:
    $query = "SELECT products.name, products.price, products.desc, products.sale, products.rating
        FROM products 
        WHERE products.featured=1";
    $result = mysqli_query($conn, $query);
    
*/

$products = array();

$products[] =
    [
        'name'  => 'Dark roast beans',
        'desc'  => '100% arabica coffee beans from Colombia. Dark roast with a strong flavor. Great for espresso and lattes.',
        'price' => 7,
        'sale'  => false,
        'rating' => 4.5, //yay trailing commas in PHP 7
    ];
    
$products[] =
    [
        'name'  => 'Light roast beans',
        'desc'  => '100% arabica coffee beans from Colombia. Light roast with a lighter flavor. A good coffee to drink black.',
        'price' => 7,
        'sale'  => false,
        'rating' => 4.1,
    ];

$products[] =
    [
        'name'  => 'Cold coffee',
        'desc'  => 'We left it out by accident',
        'price' => 2.5,
        'sale'  => true,
        'rating' => 1,
    ];
    
$d20 = rand(1,20);
$products[] =
    [
        'name'  => 'd20',
        'desc'  => 'Test your luck, roll your price',
        'price' => $d20,
        'sale'  => $d20<=5,
        'rating' => 3,
    ];    
    
$products[] =
    [
        'name'  => 'English breakfast tea',
        'desc'  => 'A fresh cuppa. Blended black tea with a bold flavor.',
        'price' => 3,
        'sale'  => false,
        'rating' => 3,
    ];
    


?>