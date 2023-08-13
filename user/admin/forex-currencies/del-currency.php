<?php
include( realpath($_SERVER['DOCUMENT_ROOT']).'/connection.php');
$currencyId = $_GET['currency'];

$query = "delete from currency where id=".$currencyId;
$result = mysqli_query($con, $query);
if( $result > 0 ) {
?>
    <script>window.location.href = './currency-list.php';</script>
<?php
}

?>