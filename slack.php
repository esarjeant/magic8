<?php include 'magic8ball.php';?>
<?php
$fortune = get_fortune();
//header('Content-type: application/json');
echo "Magic 8-Ball: *" . $fortune["answer"] . "*";
?>