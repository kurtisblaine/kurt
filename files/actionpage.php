
<?php // Initialize variables to null.
$name = $email = $subject = $message = ""; // Sender Name
$nameError = $emailError = $subjectError = $messageError = $successMessage = "";

if($_SERVER["REQUEST_METHOD"] == "POST") { // Checking null values in message.


    if (empty($_POST["name"])){
        $nameError = "Name is required";
    }
    else
    {
        $name = test_input($_POST["name"]); // check name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name))
        {
            $nameError = "Only letters and white space allowed";
        }
    } // Checking null values in the message.


    if (empty($_POST["email"]))
    {
        $emailError = "Email is required";
    }
    else
    {
        $email = test_input($_POST["email"]);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $emailError = "Invalid email format";
        }
    } // Checking null values inmessage.


    if (empty($_POST["subject"]))
    {
        $subjectError = "Subject is required";
    }
    else
    {
        $subject = test_input($_POST["subject"]);
    } // Checking null values inmessage.


    if (empty($_POST["message"]))
    {
        $messageError = "Message is required";
    }
    else
    {
        $message = test_input($_POST["message"]);
    } // Checking null values inthe message.


   /* if( ($nameError=='') and ($emailError=='') and ($subjectError=='') and ($messageError=='') ) { // Checking valid email.
        $message_body = '';
        unset($_POST['submit']);
        foreach ($_POST as $key => $value) {
            $message_body .= "$key: $value\n";
        }

        $to = 'kgcarriere@hotmail.com';
        if (mail($to, $subject, $message)) {
            $successMessage = "Message sent, thank you for contacting us!";
            $name = $email = $subject = $message = "";
        }
    }*/
        if (($nameError=='') and ($emailError=='') and ($subjectError=='') and ($messageError=='')) {
            $headers = "FormGet.com";
            $to = 'kgcarriere@hotmail.com';

            $msg = "Hello! $name Thank you...! For Contacting Us.
            Name: $name
            E-mail: $email
            Subject: $subject
            Message: $message
            
This is a confirmation email. I will contact you as soon as possible.";

            $msg1 = "$name contacted you. Here is some information about $name.
            Name: $name
            E-mail: $email
            Subject: $subject
            Message: $message ";

            if( (mail($email, $headers, $msg )) && (mail($to, $subject, $msg1 )) )
            {
                $successMessage = "Message sent, thank you for contacting me! ";
                $name = $email = $subject = $message = $msg1 = "";

            }

        }
        else
        {
            $emailError = "Invalid Email";
        }
}


// Function for filtering input values.function test_input($data)
function test_input($data){
    $data =trim($data);
    $data =stripslashes($data);
    $data =htmlspecialchars($data);
    return $data;
}
?>