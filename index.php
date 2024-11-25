<?php
$title = "My PHP Website";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
</head>
<body>
  <h1>Welcome to my website!</h1>
  <p>This is a simple website built with PHP.</p>

  <?php
  $current_year = date("Y");
  echo "<p>Copyright &copy; $current_year</p>";
  ?>
</body>
</html>