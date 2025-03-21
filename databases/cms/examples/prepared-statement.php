<?php
  require '../includes/database-connection.php';

  $id  = 1;
  $sql = "SELECT forename, surname 
    FROM  member 
    WHERE id = :id;"
  ;
  $statement = $pdo->prepare( $sql );
  $statement->execute( [ 'id' => $id ] );
  $member    = $statement->fetch();

  if ( ! $member ) {
    include 'page-not-found.php';
  }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Prepared statements</title>
    <link rel="stylesheet" type="text/css" href="/dw3/databases/cms/css/styles.css" />
  </head>
  <body>
    <p>
      <?= htmlspecialchars( $member[ 'forename' ] ) ?>
      <?= htmlspecialchars( $member[ 'surname'  ] ) ?>
    </p>
  </body>
</html>