<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Demo</title>
  <style>
    body {
      display: grid;
      place-items: center;
      margin: 0;
      height: 100vh;
      font-family: poppins;
    }
  </style>
</head>
<body>
  <h1>Recommended Books for you</h1>

  <?php 
    $books = [
      [
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Philip K. Dick',
        'purchaseUrl' => 'https://example.com'
      ],
      [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'purchaseUrl' => 'https://example.com'
      ],

    ];

  ?>

  <ul>
    <?php foreach($books as $book) : ?>
        <li>
          <a href="<?= $book['purchaseUrl']; ?>">
            <?= $book['name']; ?>
          </a>
        </li>
    <?php endforeach; ?>
  
  </ul>
</body>
</html>