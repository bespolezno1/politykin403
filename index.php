<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<?php   
 $host = '127.0.0.1';
 $db   = 'sakila';
 $user = 'root';
 $pass = '';
 $charset = 'utf8';

 $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
 $opt = [
     PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
     PDO::ATTR_EMULATE_PREPARES   => false,
 ];
 $pdo = new PDO($dsn, $user, $pass, $opt);

 $stmt = $pdo->query('SELECT * FROM film LIMIT 25');


?>
<h1> Sakila Database!</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Description</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
       <?php
        while ($row = $stmt->fetch())
        { ?>
              <tr>
            <td><?=$row['film_id']?></td>
            <td><?=$row['title']?></td>
            <td><?=$row['description']?></td>
            <td></td>
        </tr>
        <?php
    }
    ?>

    </tbody>
</table>

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
</body>

</html>