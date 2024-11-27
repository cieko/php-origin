<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grape</title>

  <link rel="shortcut icon" href="./public/favicon.png" type="image/x-icon">
</head>

<body>
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