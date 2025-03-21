<?php
  require '../includes/database-connection.php';

  $sql = "SELECT forename, surname 
    FROM member;"
  ;

  $statement = $pdo->query( $sql );
  $members   = $statement->fetchAll();



?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Getting multiple rows of data from the database</title>
    <link rel="stylesheet" type="text/css" href="/dw3/databases/cms/css/styles.css" />
  </head>
  <body>


    <?php foreach ( $$statement->fetch() as $member ) { ?>
      <p>
        <?= htmlspecialchars( $member[ 'forename' ] . " " .  $member[ 'surname'  ] ) ?>
      </p>
    <?php } ?>


  </body>
</html>