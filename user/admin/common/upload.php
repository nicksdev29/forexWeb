<?php
    include_once( realpath($_SERVER['DOCUMENT_ROOT']).'/env.php' );
    if( is_dir($baseRoot.$_POST['destination'])) {
        chmod($baseRoot.$_POST['destination'], 755);
        $destinationFile = $baseRoot.'/'.$_POST['destination'].$_FILES['media']['name'];
        if(move_uploaded_file($_FILES['media']['tmp_name'], $destinationFile)) {
            $uploadedFile = [ 'message' => 'successfully uploaded', 'file' => urlencode($baseUrl.$_POST['destination'].$_FILES['media']['name']) ];
            echo json_encode($uploadedFile);
        } else {
            echo 'something went wrong';
        }
        chmod($baseRoot.$_POST['destination'], 744);
    } else {
        echo $baseRoot.$_POST['destination'].'either directory not found or is not writable.';
        header('status', 400);
    }
?>