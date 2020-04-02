<?php

$num1 = $num2 = $sum = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $sum = $num1 + $num2;
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP Sample</title>
</head>
<body>
<form method="POST">
  <input type="text" name="num1" value="<?php echo $num1;?>"> + <input type="text" name="num2" value="<?php echo $num2; ?>">
  <button type="submit">=</button> <?php echo $sum; ?>
</form>
</body>
</html>
