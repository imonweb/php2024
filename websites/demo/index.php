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
        'releaseYear' => 1968,
        'purchaseUrl' => 'https://example.com'
      ],
      [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'releaseYear' => 2021,
        'purchaseUrl' => 'https://example.com'
      ],
      [
        'name' => 'The Martin',
        'author' => 'Andy Weir',
        'releaseYear' => 2011,
        'purchaseUrl' => 'https://example.com'
      ],

    ];

    function filter($items, $fn) {
      // 
      $filteredItems = [];

      foreach($items as $item){
        if($fn($item)){
          $filteredItems[] = $item;
        }
      }
      return $filteredItems;
    };

    $filteredBooks = array_filter($books, function($book){
      return $book['releaseYear'] < 2000;
      // return $book['author'] === 'Andy Weir';
    });
 

  ?>

  <ul>
    <?php foreach($filteredBooks as $book) : ?>
      
        <li>
          <a href="<?= $book['purchaseUrl'] ?>">
            <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
          </a>
        </li>
   
    <?php endforeach; ?>
  
  </ul>

  <p>
    <?= filterByAuthor($books); ?>
  </p>
</body>
</html>