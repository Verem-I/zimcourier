<?php include "db.php"; ?>
<?php

//add quote data to database
function add_quote(){
    global $connection;
    if (isset($_POST['request_quote'])) {
        if (empty($_POST['quote_name'] || $_POST['quote_email'])) {
            header("Location: ../index.php?Fields_cannot_be_empty");
        }else{
        $quote_name = $_POST['quote_name'];
        $quote_email= $_POST['quote_email'];
        $query = "INSERT INTO quote(quote_name,quote_email) VALUES('$quote_name','$quote_email')";
        $result = mysqli_query($connection,$query);
            if (!$result) {
                die("could not send data" . mysqli_error($connection));
            }else{
                header("Location: ../index.php?quote_info_added");
            }
        }
    }
}
add_quote();
//add contact details
function add_contact_details(){
    global $connection;
    if (isset($_POST['send_message'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $user_email = $_POST['user_email'];
        $subject = $_POST['subjects'];
        $message =mysqli_real_escape_string($connection, $_POST['messages']) ;
        $query = "INSERT INTO contact(first_name,last_name,user_email,topic,body) VALUES('$first_name','$last_name','$user_email','$subject','$message')";
        $result = mysqli_query($connection,$query);
        if(!$result){
            die("could not send data" . mysqli_error($connection));
        }else{
            header("Location: ../contact.php?message_sent");
        }

    }
}
add_contact_details();
?>
 