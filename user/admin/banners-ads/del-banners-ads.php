<?php
include( realpath($_SERVER['DOCUMENT_ROOT']).'/connection.php');
$bannersId = $_GET['bannersId'];

$query = "delete from banners where `id`=".$bannersId;
$result = mysqli_query($con, $query);
if( $result > 0 ) {
?>
    <script>window.location.href = './banners-ads-list.php';</script>
<?php
}

?>