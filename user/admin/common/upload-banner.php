<?php
    include_once( realpath($_SERVER['DOCUMENT_ROOT']).'/env.php' );
    $dest_dir = '/uploads/assets/banner-img/';
    if( is_dir($baseRoot.$dest_dir)) {
        $destinationFile = $baseRoot.$dest_dir.$_FILES['files']['name'][0];
        if(move_uploaded_file($_FILES['files']['tmp_name'][0], $destinationFile)) {
            // $src = ['src' => urldecode( $baseUrl.$dest_dir.$_FILES['files']['name'][0] ), 'type': 'image'];
            $uploadedFile = [ 'data' => array( $baseUrl.$dest_dir.$_FILES['files']['name'][0] ) ];
            echo json_encode( $uploadedFile, JSON_UNESCAPED_SLASHES );
        } else {
            echo 'something went wrong';
        }
    } else {
        echo $baseRoot.$dest_dir.'either directory not found or is not writable.';
        header('status', 400);
    }
?>