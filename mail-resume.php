<?php
    include_once( realpath($_SERVER['DOCUMENT_ROOT']).'/env.php' );
    if($_POST && $_FILES) {
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $fromEmail = $_POST['email'];
        $resume = $_FILES['resume'];
        print_r($resume);

        // boundary
        $boundary = uniqid();

        // header information
        $headers = "From: $fromEmail\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary=\".$boundary.\"\r\n";
        $attachment = chunk_split(base64_encode(file_get_contents($resume['tmp_name'])));

        $mailBody = 'A resume is received with a document attached herewith the mail. Full name of candidate is: '.$firstName.' '.$lastName;

        // mailBody with attachment
        $mailBody = "--".$boundary."\r\n";
        $mailBody .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $mailBody .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $mailBody .= chunk_split(base64_encode($mailBody));
        $mailBody .= "--".$boundary."\r\n";
        $mailBody .= "Content-Type: application/octet-stream; name=".$resume['name']."\r\n";
        $mailBody .= "Content-Transfer-Encoding: base64\r\n";
        $mailBody .= "Content-Disposition: attachment; filename=".$resume['name']."\r\n\r\n";
        $mailBody .="X-Attachment-Id: ".rand(1000, 99999)."\r\n\r\n";
        $mailBody .= $attachment."\r\n";
        $mailBody .= "--".$boundary."--";
        // if( is_dir($baseRoot.'/uploads/resumes')) {
        //     $destinationFile = $baseRoot.'/uploads/resumes/'.time().$resume['name'];
        //     if(move_uploaded_file($resume['tmp_name'], $destinationFile)) {
        //         $mailSubject = 'A resume is received';
        //         $mailBody = 'A resume is received with a document attached herewith the mail. Full name of candidate is: '.$firstName.' '.$lastName;
        //         mail('nikhilesh.ganvir29@gmail.com', $mailSubject, $mailBody, NULL, ['attachment' => $destinationFile]);
        //     } else {
        //         echo 'something went wrong';
        //     }
        // }
        $mailSubject = 'A resume is received';
        if (mail('nikhilesh.ganvir29@gmail.com', $mailSubject, $mailBody, $headers)) {
            echo "Email with attachment sent successfully.";
        } else {
            echo "Failed to send email with attachment.";
        }
    }
?>