<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grape</title>

  <link rel="shortcut icon" href="./public/favicon.png" type="image/x-icon">
</head>

<body>
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

  ?>


  <h1>
    <?php
    $greeting = 'Hello';
    echo $greeting . ' ' . 'World';
    // echo "$greeting World";
    ?>
  </h1>
  <p>You have read "<?= $name ?>"</p>

  <ul>
    <!-- <?php foreach ($books as $book) {
            echo "<li>{$book}™</li>";
          } ?> -->

    <?php foreach ($books as $book) : ?>
      <li><a href="<?= "{$book['purchaseUrl']}" ?>" ?><?= "{$book['name']}™" ?></a></li>
    <?php endforeach; ?>
  </ul>

  <u>Books of Andy Weir</u>

  <ul>
    <?php foreach ($books as $book) : ?>
      <?php if ($book['author'] == 'Andy Weir') : ?>
        <li><a href="<?= "{$book['purchaseUrl']}" ?>" ?><?= "{$book['name']}™" ?></a></li>
      <?php endif; ?>
    <?php endforeach; ?>
  </ul>

  <br />
  <u>Filter method - Non sophisticated way</u>
  <ul>
    <?php foreach ($filteredBooks as $book) : ?>
      <li>
        <a href="<?= $book['purchaseUrl'] ?>">
          <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>

  <br />

</body>

</html>