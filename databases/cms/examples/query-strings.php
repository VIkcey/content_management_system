<?php
  require '../includes/database-connection.php';


  $id = $_GET[ 'id' ];
  if ( ! $id ) {
    include 'page-not-found.php';
  }

  $sql = "SELECT forename, surname 
    FROM member 
    WHERE id = :id;"
  ;
  $statement = $pdo->prepare( $sql );
  $statement->execute( [ ':id' => (int)$id ] );
  $member    = $statement->fetch();

  if ( ! $member ) {
    include 'page-not-found.php';
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Query strings and prepared statements</title>
    <link rel="stylesheet" type="text/css" href="/dw3/databases/cms/css/styles.css" />
  </head>
  <body>
    <p>
      <?= htmlspecialchars( $member[ 'forename' ] ) ?>
      <?= htmlspecialchars( $member[ 'surname'  ] ) ?>
    </p>
  </body>
</html>