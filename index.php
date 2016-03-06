<?php include 'magic8ball.php';?>
<?php

$fortune = get_fortune();

header('Content-type: application/json');
echo json_encode($fortune);
?>