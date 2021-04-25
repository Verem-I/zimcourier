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
     $sql = "SELECT * FROM locations";
     $res = mysqli_query($connection,$sql);
    
    ?>
     <!-- Navbar -->
     
     <div class="main-panel" style="height: 100vh;">
     <?php include 'includes/navigation.php' ?>

     <div class="content">  
        <form action="includes/functions.php" method = "post" style="width:450px;">
         
          <div class="form-group">
         
            <label for="tracking-no">Tracking Code</label>
            <input type="text" id="tracking-no" class="form-control" name="track_no"  placeholder="Add Tracking Code">
          </div>
          <div class="form-group">
         
            <label for="client-name">Sender Name</label>
            <input type="text" id="client-name" class="form-control" name="client_name"  placeholder="input senders name">
          </div>
          <div class="form-group">
         
            <label for="receiver">Receiver Name</label>
            <input type="text" id="receiver" class="form-control" name="receiver"  placeholder="Input receivers name ">
          </div>
          <div class="form-group">
          <div class="form-group">
         
            <label for="content">Package Content</label>
            <input type="text" id="content" class="form-control" name="content"  placeholder="package content">
          </div>
          <div class="form-group">
         
            <label for="current_location">Current Location</label>
            <select name="current_location" class="form-control" id="">
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
            <input type="text" id="delivery_address" class="form-control" name="delivery_address"  placeholder="Input delivery address">
          </div>
          <div class="form-group">
         
            <label for="estimated_delivery">Estimated Delivery Time</label>
            <input type="text" id="estimated_delivery" class="form-control" name="estimated_delivery"  placeholder="Input estimated delivery time">
          </div>
          <button type="submit" name="add_track" class="btn btn-primary">Add Tracking Details</button>

      </form>


        </div>
              
            
  </div>
     
      <!-- End Navbar -->
    <?php// include 'includes/footer.php' ?>