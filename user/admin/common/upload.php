<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'\env.php');
    $destinationFile = $baseRoot.$_POST['destination'].$_FILES['media']['name'];
    if(move_uploaded_file($_FILES['media']['tmp_name'], $destinationFile)) {
        $uploadedFile = [ 'message' => 'successfully uploaded', 'file' => urlencode($baseUrl.$_POST['destination'].$_FILES['media']['name']) ];
        echo json_encode($uploadedFile);
    } else {
        echo 'something went wrong';
    }
?>