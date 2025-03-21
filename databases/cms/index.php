<?php
  declare(strict_types=1);
  require 'includes/database-connection.php';

  $sql = "SELECT
      A.id,   A.title, A.summary,
      C.name AS category,
      CONCAT( M.forename, ' ', M.surname ) AS author,
      I.file AS image_file,
      I.alt  AS image_alt
    FROM article AS A
    JOIN      category AS C ON A.category_id = C.id
    JOIN      member   AS M ON A.member_id   = M.id
    LEFT JOIN image    AS I ON A.image_id    = I.id
    WHERE
      A.summary LIKE '%design%' AND
      A.published = 1
    ORDER BY A.created DESC
    LIMIT 6;"
  ;

  $statement = $pdo->query( $sql );
  $articles  = $statement->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <pre>
    <?= var_dump( $articles ); ?>
  </pre>
</body>
</html>