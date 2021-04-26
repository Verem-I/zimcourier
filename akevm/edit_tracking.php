<?php include 'includes/header.php' ?>
        <a href="#" class="simple-text logo-normal">
          Zim Courier
         
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="index.php">
              <i class="nc-icon nc-bank"></i>
              <p>Home</p>
            </a>
          </li>
          <li>
            <a href="contact.php">
              <i class="nc-icon nc-single-02"></i>
              <p>Contact Chat</p>
            </a>
          </li>
          <li>
            <a href="email_subscription.php">
              <i class="nc-icon nc-email-85"></i>
              <p>NewsLetter</p>
            </a>
          </li>
          <li >
            <a href="Quote.php">
              <i class="nc-icon nc-pin-3"></i>
              <p>Quote Request</p>
            </a>
          </li>
          <li class ="active">
            <a href="tracking.php">
              <i class="nc-icon nc-world-2"></i>
              <p>Tracking Management</p>
            </a>
          </li>
          <li >
            <a href="tracking-location.php">
              <i class="nc-icon nc-world-2"></i>
              <p>Tracking Location</p>
            </a>
          </li>
          <li>
            <a href="user-profile.php">
              <i class="nc-icon nc-circle-10"></i>
              <p>User Profile</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    
    <?php 
    global $connection;
     $sql = "SELECT * FROM locations";
     $res = mysqli_query($connection,$sql);
    //get trakining information by id
    if(isset($_GET['edit_track']) && $_GET['edit_track'] != " "){
        $edit_track_id = $_GET['edit_track'];
        $query = mysqli_query($connection, "SELECT * FROM tracking_code WHERE track_id=$edit_track_id");
        if(mysqli_num_rows($query) > 0){
            $data = mysqli_fetch_array($query);
            $tracking_no = $data['track_no'];
            $send_name = $data['client_name'];
            $receive_name = $data['receiver'];
            $content = $data['content'];
            $current_loc = $data['current_location'];
            $previous_loc = $data['previous_location'];
            $delivery_add = $data['delivery_address'];
            $estm_time = $data['estimated_delivery'];
        }else{
            die("no such data");
        }

    }else{
        die('failed');
}
    ?>
     <!-- Navbar -->
     
     <div class="main-panel" style="height: 100vh;">
     <?php include 'includes/navigation.php' ?>

     <div class="content">  
        <form action="includes/functions.php" method = "post" style="width:450px;">
         
          <div class="form-group">
         
            <label for="tracking-no">Tracking Code</label>
            <input type="text" id="tracking-no" class="form-control" name="track_no"  placeholder="Add Tracking Code" value="<?php echo  $tracking_no; ?>">
          </div>
          <div class="form-group">
         
            <label for="client-name">Sender Name</label>
            <input type="text" id="client-name" class="form-control" name="client_name"  placeholder="input senders name" value="<?php echo  $send_name; ?>">
          </div>
          <div class="form-group">
         
            <label for="receiver">Receiver Name</label>
            <input type="text" id="receiver" class="form-control" name="receiver"  placeholder="Input receivers name " value="<?php echo  $receive_name; ?>">
          </div>
          <div class="form-group">
         
            <label for="content">Package Content</label>
            <input type="text" id="content" class="form-control" name="content"  placeholder="package content" value="<?php echo $content ?>">
          </div>
          <div class="form-group">
          <div class="form-group">
         
            <label for="current_location">Current Location</label>
            <select name="current_location" class="form-control" id="">
              <option value="<?php echo $current_loc; ?>"><?php echo $current_loc; ?></option>
            <?php 
              while ($row = mysqli_fetch_array($res)){
                $locations = $row['locations'];
                echo" <option value='$locations'>$locations</option>";
              }
            
            ?>
           
           </select>
          </div>
          <div class="form-group">
         
            <label for="previous_location">Previous Location</label>
           <select name="previous_location" class="form-control" id="">
            <option value="<?php echo $previous_loc; ?>"><?php echo $previous_loc; ?></option>
           <?php
              $sql = "SELECT * FROM locations";
              $res = mysqli_query($connection,$sql);

              while ($row = mysqli_fetch_array($res)){
                $locations = $row['locations'];
                echo" <option value='$locations'>$locations</option>";
              }
            
            ?>
           </select>
          </div>
          <div class="form-group">
         
            <label for="delivery_address">Delivery Address</label>
            <input type="text" id="delivery_address" class="form-control" name="delivery_address"  placeholder="Input delivery address" value="<?php echo  $delivery_add; ?>">
            <br>
            
          </div>
          <div class="form-group">
            <input type="text" name="edit_track_id" value="<?php echo $edit_track_id; ?>" style="display: none;">
          </div>
          <div class="form-group">
         
            <label for="estimated_delivery">Estimated Delivery Time</label>
            <input type="text" id="estimated_delivery" class="form-control" name="estimated_delivery"  placeholder="Input estimated delivery time" value="<?php echo  $estm_time; ?>">
          </div>
          <button type="submit" name="edit_tracking" class="btn btn-primary">Modify Tracking</button>

      </form>


        </div>
              
            
  </div>
     
      <!-- End Navbar -->
    <?php// include 'includes/footer.php' ?>