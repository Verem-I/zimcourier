<?php include "db.php"; ?>
<?php 
    
    
   function add_tracking_number(){
        global $connection;
        if (isset($_POST['add_track'])) {
            if (empty($_POST['track_no'] || $_POST['client_name'])) {
                header("Location: ../tracking.php?Fields_cannot_be_empty");
            }
            else{
                $track_no = $_POST['track_no'];
                $client_name = $_POST['client_name'];
                $receiver = $_POST['receiver'];
                $current_location = $_POST['current_location'];
                $content = $_POST['content'];
                $previous_location = $_POST['previous_location'];
                $delivery_address = $_POST['delivery_address'];
                $estimated_delivery = $_POST['estimated_delivery'];
                $date = date("l d F Y");
                
                $query = "INSERT INTO tracking_code(track_no,client_name,receiver,current_location,previous_location,delivery_address,estimated_delivery, track_date, content) VALUES('$track_no','$client_name', '$receiver' ,'$current_location','$previous_location', '$delivery_address','$estimated_delivery', '$date' , '$content')";
                $result = mysqli_query($connection,$query);
                if (!$result) {
                    die("could not send data" . mysqli_error($connection));
                }else{
                    header("Location: ../tracking.php?track_info_added");
                }
            }
        }
        
        
    }


    add_tracking_number();
  

    function show_tracking_no(){
        global $connection;
        $query = "SELECT * FROM tracking_code";
        $result = mysqli_query($connection,$query);

        while ($row= mysqli_fetch_assoc($result)) { 
            $track_id = $row['track_id'];
            $track_no = $row['track_no'];
            $client_name= $row['client_name'];
            $receiver= $row['receiver'];
            $content = substr($row['content'],0,10);
            $current_location = $row['current_location'];
            $previous_location = $row['previous_location'];
            $delivery_address = substr($row['delivery_address'],0,20);
            $estimated_delivery = substr($row['estimated_delivery'],0,30);
            $date = $row['track_date'];
            echo"<tr>";
            echo"<td>{$track_id}</td>";
            echo"<td>{$track_no}</td>";
            echo"<td>{$client_name}</td>";
            echo"<td>{$receiver}</td>";
            echo"<td>{$content}..</td>";
            echo"<td>{$current_location}</td>";
            echo"<td>{$previous_location}</td>";
            echo"<td>{$delivery_address}...</td>";
            echo"<td>{$estimated_delivery}</td>";
            echo"<td>{$date}</td>";
            echo"<td><a class='btn btn-primary'  href='edit_tracking.php?edit_track=$track_id'>Upadate</a></td>";
            echo"<td><a class='btn btn-danger'  href='index.php?delete_track={$track_id}'>Delete</a></td>";
            
            echo"</tr>";
        }
    }
    function delete_track_no(){
        global $connection;
        if (isset($_GET['delete_track'])) {
            $track_id = $_GET['delete_track'];
           $query = "DELETE FROM tracking_code where track_id=$track_id";
           $result= mysqli_query($connection,$query);
           
            if (!$result) {
                die("could not send data" . mysqli_error($connection));
            }else{
                header("Location: index.php?track_no_deleted");
            }

        }
    }
    
    
    delete_track_no();
//show quotes
    function show_quotes_request(){
        global $connection;
        $query = "SELECT * FROM quote";
        $result = mysqli_query($connection,$query);

        while ($row= mysqli_fetch_assoc($result)) { 
            $quote_id = $row['Quote_ID'];
            $quote_name = $row['Quote_name'];
            $quote_email= $row['Quote_email'];
            echo"<tr>";
            echo"<td>{$quote_id}</td>";
            echo"<td>{$quote_name}</td>";
            echo"<td>{$quote_email}</td>";
            echo"<td><a class='btn btn-danger'  href='quote.php?delete_quote={$quote_id}'>Delete</a></td>";
            echo"</tr>";
        }
    }
    //show newsletter
    function show_newsletter(){
        global $connection;
        $query = "SELECT * FROM newsletter";
        $result = mysqli_query($connection,$query);

        while ($row= mysqli_fetch_assoc($result)) { 
            $newsletter_id = $row['newsletter_id'];
            $newsletter_email= $row['newsletter_email'];
            echo"<tr>";
            echo"<td>{$newsletter_id}</td>";
            echo"<td><a href='mailto:{$newsletter_email}'>{$newsletter_email}</a></td>";
            echo"<td><a class='btn btn-danger'  href='quote.php?delete_newsletter={$newsletter_id}'>Delete</a></td>";
            echo"</tr>";
        }
    }
    function delete_newsletter(){
        global $connection;
        if (isset($_GET['delete_newsletter'])) {
            $newsletter_id = $_GET['delete_newsletter'];
           $query = "DELETE FROM newsletter where newsletter_id=$newsletter_id";
           $result= mysqli_query($connection,$query);
           
            if (!$result) {
                die("could not send data" . mysqli_error($connection));
            }else{
                header("Location: email_subscription.php?newsletter_deleted");
            }

        }
    }
    delete_newsletter();
    //delete quote
    function delete_quote(){
        global $connection;
        if (isset($_GET['delete_quote'])) {
            $quote_id = $_GET['delete_quote'];
           $query = "DELETE FROM quote where Quote_ID=$quote_id";
           $result= mysqli_query($connection,$query);
           
            if (!$result) {
                die("could not send data" . mysqli_error($connection));
            }else{
                header("Location: quote.php?quote_deleted");
            }

        }
    }
    delete_quote();
    function show_contact(){
        global $connection;
        $query = "SELECT * FROM contact";
        $result = mysqli_query($connection,$query);

        while ($row= mysqli_fetch_assoc($result)) { 
            $contact_id = $row['contact_id'];
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $user_email = $row['user_email'];
            $subject = substr($row['topic'], 0, 30);
            $message =substr($row['body'], 0, 50);
            echo"<tr>";
            echo"<td>{$contact_id}</td>";
            echo"<td>{$first_name}</td>";
            echo"<td>{$last_name}</td>";
            echo"<td>{$user_email}</td>";
            echo"<td>{$subject}...</td>";
            echo"<td>{$message}...</td>";
            echo"<td><a class='btn btn-primary'  href='view-contact.php?view_contact={$contact_id}'>View</a></td>";
            echo"<td><a class='btn btn-danger'  href='contact.php?delete_contact={$contact_id}'>Delete</a></td>";
            echo"</tr>";
        }
    }
    //delete contact
    function delete_contact(){
        global $connection;
        if (isset($_GET['delete_contact'])) {
            $contact_id = $_GET['delete_contact'];
           $query = "DELETE FROM contact where contact_id =$contact_id";
           $result= mysqli_query($connection,$query);
           
            if (!$result) {
                die("could not send data" . mysqli_error($connection));
            }else{
                header("Location: contact.php?contact_deleted");
            }

        }
    }
    delete_contact();
function view_contact_details(){
    global $connection;
        if (isset($_GET['view_contact'])) {
            $contact_id = $_GET['view_contact'];
            $query = "SELECT * FROM contact where contact_id =$contact_id";
            $result= mysqli_query($connection,$query);
           
            if (!$result) {
                die("could not send data" . mysqli_error($connection));
            }else{
                while ($row= mysqli_fetch_assoc($result)) { 
                    $contact_id = $row['contact_id'];
                    $first_name = $row['first_name'];
                    $last_name = $row['last_name'];
                    $user_email = $row['user_email'];
                    $subject = $row['topic'];
                    $message = $row['body'];
                    $fullName = $first_name." ". $last_name;
                    echo"<h3 class='mt-5'>{$subject}</h3>";
                    echo"<p>Senders Name: {$fullName}</p>";
                    echo" <p>Senders Email: <a href='mailto:{$user_email}'>{$user_email}</a></p>";
                    echo"<p style='max: width 500px;'>{$message}</p>";
                    echo"<p><a href='contact.php'>Back to contact list</a> </p>";
   
        
                }
            }

        }

        
}
//add current location
function add_location(){
    global $connection;
    if (isset($_POST['add_location'])) {
        if (empty($_POST['location'])) {
            header("Location: ../tracking.php?Fields_cannot_be_empty");
        }
        else{
            $location = $_POST['location'];
            $query = "INSERT INTO locations(locations) VALUES('$location')";
            $result = mysqli_query($connection,$query);
            if (!$result) {
                die("could not send data" . mysqli_error($connection));
            }else{
                header("Location: ../tracking-location.php?track_info_added");
            }
        }
    }
    
    
}
add_location();
//show locations
function show_location()
{
  global $connection;
  $query = "SELECT * FROM locations";
  $result = mysqli_query($connection, $query);

  while ($row = mysqli_fetch_assoc($result)) {
    $location_id = $row['location_id'];
    $locations = $row['locations'];

    echo "<tr>";
    echo "<td>{$location_id}</td>";
    echo "<td>{$locations}</td>";
    echo "<td><a href='tracking-location.php?delete_location={$location_id}' class='btn btn-danger'>Delete</a></td>";
    echo "</tr>";
  }
}
//delete location
function delete_location()
{
  global $connection;
  if (isset($_GET['delete_location'])) {
    $location_id = $_GET['delete_location'];
    $query = "DELETE FROM locations WHERE location_id = $location_id";
    $result = mysqli_query($connection, $query);
    if (!$result) {
      die("Could not delete data " . mysqli_error($connection));
    } else {
      header("Location: tracking-location.php?location_deleted");
    }
  }
}
delete_location();


//modify tracking info
if(isset($_POST['edit_tracking'])) {
    global $connection;

    $edit_id = $_POST['edit_track_id'];
    $tracking_no = $_POST['track_no'];
    $send_name = $_POST['client_name'];
    $receive_name = $_POST['receiver'];
    $content = $_POST['content'];
    $current_loc = $_POST['current_location'];
    $previous_loc = $_POST['previous_location'];
    $delivery_add = $_POST['delivery_address'];
    $estm_time = $_POST['estimated_delivery'];

	$query = mysqli_query($connection, "UPDATE tracking_code  SET track_no='$tracking_no', client_name='$send_name',receiver='$receive_name', current_location='$current_loc',previous_location='$previous_loc', delivery_address='$delivery_add',estimated_delivery='$estm_time', content='$content' WHERE track_id='$edit_id'");
	if(!$query) {
        die("Could not modify post " . mysqli_error($connection));
    }else{
		header("Location: ../index.php?tracking_details_updated");
	}

	//echo "<script>alert('$edit_id')</script>";
}
