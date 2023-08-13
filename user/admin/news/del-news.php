<?php
include( realpath($_SERVER['DOCUMENT_ROOT']).'/connection.php');
$newsId = $_GET['news'];

$query = "delete from posts where id=".$newsId;
$result = mysqli_query($con, $query);
if( $result > 0 ) {
?>
    <script>window.location.href = './news-list.php';</script>
<?php
}

?>