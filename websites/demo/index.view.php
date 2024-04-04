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
  

  <ul>
    <?php foreach($filteredBooks as $book) : ?>
      
        <li>
          <a href="<?= $book['purchaseUrl'] ?>">
            <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
          </a>
        </li>
  
    <?php endforeach; ?>
  </ul>
</body>
</html>