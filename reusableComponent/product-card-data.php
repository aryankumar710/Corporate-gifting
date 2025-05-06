<?php
$cards = [
    [
        'productimage' => 'images/Product-img1.jpeg',
        'sellername' => 'Aryan',
        'productname' => 'Book',
        'productprice' => '1000 INR',
        'producturl' => 'https://example.com/card1'
    ],
    [
        'productimage' => 'images/Product-img2.jpeg',
        'sellername' => 'Chandresh',
        'productname' => 'Pen',
        'productprice' => '2000 INR',
        'producturl' => 'https://example.com/card1'
    ],
    [
       'productimage' => 'images/Product-img3.jpeg',
        'sellername' => 'Tushar',
        'productname' => 'Bag',
        'productprice' => '3000 INR',
        'producturl' => 'https://example.com/card1'
    ],
    [
       'productimage' => 'images/Product-img4.jpeg',
        'sellername' => 'Ritik',
        'productname' => 'Calendar',
        'productprice' => '4000 INR',
        'producturl' => 'https://example.com/card1'
    ],
    [
        'productimage' => 'images/Product-img5.jpeg',
        'sellername' => 'Aryan',
        'productname' => 'Book',
        'productprice' => '1000 INR',
        'producturl' => 'https://example.com/card1'
    ],
    [
        'productimage' => 'images/Product-img6.jpeg',
        'sellername' => 'Chandresh',
        'productname' => 'Pen',
        'productprice' => '2000 INR',
        'producturl' => 'https://example.com/card1'
    ],
    [
       'productimage' => 'images/Product-img7.jpeg',
        'sellername' => 'Tushar',
        'productname' => 'Bag',
        'productprice' => '3000 INR',
        'producturl' => 'https://example.com/card1'
    ],
    [
       'productimage' => 'images/Product-img8.jpeg',
        'sellername' => 'Ritik',
        'productname' => 'Calendar',
        'productprice' => '4000 INR',
        'producturl' => 'https://example.com/card1'
    ],
   
   
  
    // ... more cards
];

foreach ($cards as $card) {
    $ProductImage = $card['productimage'];
    $SellerName = $card['sellername'];
    $ProductName = $card['productname'];
    $ProductPrice = $card['productprice'];
    $cardUrl = $card['producturl'];
    include 'reusableComponent/product-card.php';
}