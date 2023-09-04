<?php
include( realpath($_SERVER['DOCUMENT_ROOT']).'/connection.php');
if( isset($_POST) ) {
    $currencyId = $_POST['currencyId'];
    $buyRate = $_POST['buyRate'];
    $sellRate = $_POST['sellRate'];

    $query = "update `currency` set `buy_rate`=".$buyRate.", `sell_rate`=".$sellRate." where id=".$currencyId;
    $result = mysqli_query($con, $query);
    if( $result > 0 ) {
        echo json_encode( ['status' => 200, 'message' => 'updated buy/sell rate successfully'] );
    } else {
        echo 'An error occurred. Please try again.';
        header('status', 400);
    }
}
?>