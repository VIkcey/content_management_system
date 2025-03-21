<?php
  require '../includes/database-connection.php';

  $sql = "SELECT forename, surname
    FROM member
    WHERE id = 4;"
  ;

  $statement = $pdo->query( $sql );
  $member    = $statement->fetch();

  if ( ! $member ) {
    include 'page-not-found.php';
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Checking the database returned data</title>
    <link rel="stylesheet" type="text/css" href="/dw3/databases/cms/css/styles.css" />
  </head>
  <body>
    <p>
      <?= htmlspecialchars( $member[ 'forename' ] ) ?>
      <?= htmlspecialchars( $member[ 'surname'  ] ) ?>
    </p>
  </body>
</html>