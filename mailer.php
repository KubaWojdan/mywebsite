<?php

    // Get the form fields, removes html tags and whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $surname = strip_tags(trim($_POST["surname"]));
    $surname = str_replace(array("\r","\n"),array(" "," "),$surname);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    // Check the data.
    if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: http://www.jakubwoj.pl/index.php?success=-1#form");
        exit;
    }

    // Set the recipient email address. Update this to YOUR desired email address.
    $recipient = "<kubawojdan4@gmail.com>";

    // Set the email subject.
    $subject = "Nowa wiadomość od $name";

    // Build the email content.
    $email_content = "Imię: $name\n";
    $email_content = "Nazwisko: $surname\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Wiadomość:\n$message\n";

    // Build the email headers.
    $email_headers = "Od: $name <$email>";

    // Send the email.
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Redirect to the index.html page with success code
    header("Location: http://www.jakubwoj.pl/index.php?success=1#form");

?>