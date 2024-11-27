<?php


$name = "Dark Matter";
// $books = [
//   "Do Androids Dream of Electric Sheep",
//   "The Langoliers",
//   "Hail Mary"
// ];

$books = [
  [
    'name' => "Do Androids Dream of Electric Sheep",
    'author' => 'Philip K. Dick',
    'purchaseUrl' => 'www.example.com',
    'releaseYear' => 2020
  ],
  [
    'name' => "The Langoliers",
    'author' => 'Andy Weir',
    'purchaseUrl' => 'www.example.com',
    'releaseYear' => 2023
  ],
  [
    'name' => "Hail Mary",
    'author' => 'Andy Weir',
    'purchaseUrl' => 'www.example.com',
    'releaseYear' => 2022
  ]
];

// NAMED FUNCTION
// function filterByAuthor($books, $author)
// {
//   $filteredBooks = [];

//   foreach ($books as $book) {
//     if ($book['author'] === $author) {
//       $filteredBooks[] = $book;
//     }
//   }

//   return $filteredBooks;
// }

// $filteredBooks = filterByAuthor($books, 'Andy Weir');

// LAMBDA FUNCTION
// $filterByAuthor = function ($books, $author)
// {
//   $filteredBooks = [];

//   foreach ($books as $book) {
//     if ($book['author'] === $author) {
//       $filteredBooks[] = $book;
//     }
//   }

//   return $filteredBooks;
// };
// $filteredBooks = $filterByAuthor($books, 'Andy Weir');

// FUNCTION - MORE GENERIC
// function filter($items, $key, $value) {
//   $filteredItems = [];

//   foreach ($items as $book) {
//     if ($book[$key] === $value) {
//       $filteredItems[] = $book;
//     }
//   }

//   return $filteredItems;
// }
// $filteredBooks = filter($books, 'releaseYear', 2022);

// PHP array_filter method
// function filter($items, $fn) {
//   $filteredItems = [];

//   foreach ($items as $item) {
//     if ($fn($item)) {
//       $filteredItems[] = $item;
//     }
//   }

//   return $filteredItems;
// }
$filteredBooks = array_filter($books, function ($book) {
  return $book['releaseYear'] >= 2020;
});



require './views/index.view.php';

