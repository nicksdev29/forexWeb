<?php
include( realpath($_SERVER['DOCUMENT_ROOT']).'/connection.php');
$packagesId = $_GET['packagesId'];

$query = "delete from packages where `id`=".$packagesId;
$result = mysqli_query($con, $query);
if( $result > 0 ) {
?>
    <script>window.location.href = './packages-list.php';</script>
<?php
}

?>