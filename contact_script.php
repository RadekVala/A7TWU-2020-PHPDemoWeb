<?php

    $mailsent = false;

    if(
        (isset($_POST['name']) && $_POST['name'] != '') && // key name exists and not empty
        (isset($_POST['email']) && $_POST['email'] != '') && // key email exists and not empty
        (isset($_POST['message']) && $_POST['message'] != '') // key name exists and not empty
    ) {
        // data are valid, send an email...
        $message = 'Uzivatel '.$_POST['email'].' vam zaslal zpravu: '.$_POST['message'];
        $mailsent = mail('vala@utb.cz', 'GET in touch form message', $message);
    }

    header('location:index.php?mailsent='.$mailsent);
?>