<?php
    include_once( realpath($_SERVER['DOCUMENT_ROOT']).'/env.php' );
    require_once(realpath($_SERVER['DOCUMENT_ROOT']).'/PHPMailer-master/src/PHPMailer.php');
    require_once(realpath($_SERVER['DOCUMENT_ROOT']).'/PHPMailer-master/src/Exception.php');
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    if($_POST && $_FILES) {
        $email = new PHPMailer();
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $fromEmail = $_POST['email'];
        $resume = $_FILES['resume'];

        $email->SetFrom($fromEmail, $firstName.' '.$lastName);
        $email->Subject = 'A resume is received';
        $email->Body = "A resume is received with a document attached herewith the mail. The candidate's name is: ". $firstName . ' ' . $lastName;
        $email->AddAddress( 'nikhilesh.ganvir29@gmail.com' );

        if( is_dir($baseRoot.'/uploads/resumes')) {
            $destinationFile = $baseRoot.'/'.'/uploads/resumes/'.$resume['name'];
            if(move_uploaded_file($resume['tmp_name'], $destinationFile)) {

                $email->AddAttachment( $destinationFile );

                print_r($email->send());

            } else {
                echo 'Could not upload the file. Please try again';
            }
        } else {
            echo 'No such directory presents';
        }

    }
?>