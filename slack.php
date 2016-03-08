<?php include 'magic8ball.php';?>
<?php
$fortune = get_fortune();

// echo "Magic 8-Ball: *" . $fortune["answer"] . "*";
$slack = array("response_type" => "in_channel",
               "text" => $fortune["answer"],
               "attachments" => array
               (
                "text" => "*" . $fortune["answer"] . "*"
               )
               );

header('Content-type: application/json');
echo json_encode($slack);
?>