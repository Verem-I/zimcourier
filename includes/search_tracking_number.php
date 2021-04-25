<style>

</style>

<?php
if(isset($_POST['track_shipment'])){
    $search = $_POST['search'];
    $query = "SELECT *FROM tracking_code WHERE track_no LIKE '%$search%'";
    $result = mysqli_query($connection,$query);
    $found = mysqli_num_rows($result);
    if($found === 0){
        echo"<div class='alert alert-danger' style='max-width:500px;'>Tracking number deos not exit.</div>";
    }else{
     
    
            while ($row= mysqli_fetch_assoc($result)) { 
                $track_id = $row['track_id'];
                $track_no = $row['track_no'];
                $client_name= $row['client_name'];
                $receiver= $row['receiver'];
                $content= $row['content'];
                $current_location = $row['current_location'];
                $previous_location = $row['previous_location'];
                $delivery_address = $row['delivery_address'];
                $estimated_delivery = $row['estimated_delivery'];
                $date = $row['track_date'];
                
                echo"<h4 class ='mb-3 track-info' '>Tracking Number: {$track_no}</h4>";
                echo"<h4 class = 'mb-3 track-info'>Sender's Name:  {$client_name}</h4>";
                echo"<h4 class = 'mb-3 track-info'>Receivers Name: {$receiver}</h4>";
                echo"<h4 class = 'mb-3 track-info'>Content: {$content}</h4>";
                echo"<h4 class = 'mb-3 track-info'>Current Location: {$current_location}</h4>";
                echo"<h4 class = 'mb-3 track-info'>Previous Location: {$previous_location}</h4>";
                echo"<h4 class = 'mb-3 track-info'>Delivery / Pickup Address: {$delivery_address}</h4>";
                echo"<h4 class = 'mb-3 track-info'>Estimated Delivery Time: {$estimated_delivery}</h4>";
                echo"<h4 class = 'mb-3 track-info'>Percel Placement Date: {$date}</h4>";
                
            }
    }
}


?>
