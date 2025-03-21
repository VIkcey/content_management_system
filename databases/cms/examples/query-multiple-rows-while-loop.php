<?php
  require '../includes/database-connection.php';

  $sql = "SELECT forename, surname
    FROM member;"
  ;

  $statement = $pdo->query( $sql );
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Getting multiple rows of data with a while loop</title>
    <link rel="stylesheet" type="text/css" href="/dw3/databases/cms/css/styles.css" />
  </head>
  <body>
    <?php while ( $member = $statement->fetch() ) { ?>
      <p>
        <?= htmlspecialchars( $member[ 'forename' ] ) ?>
        <?= htmlspecialchars( $member[ 'surname'  ] ) ?>
      </p>
    <?php } ?>
  </body>
</html>
