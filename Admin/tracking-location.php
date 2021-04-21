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
          <li>
            <a href="tracking.php">
              <i class="nc-icon nc-world-2"></i>
              <p>Tracking Management</p>
            </a>
          </li>
          <li class ="active">
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
    <div class="main-panel" style="height: 100vh;">
     <!-- Navbar -->
     <?php include 'includes/navigation.php' ?>
     <div class="content">  
        <form action="includes/functions.php" method = "post">
         
          <div class="form-group">
         
            <label for="locations">Location</label>
            <input type="text" class="form-control" name="location" id="locations"  placeholder="Add Tracking Code">
          </div>
          
          <button type="submit" name="add_location" class="btn btn-primary">Add Location</button>

      </form>


        <table class="table table-bordered">
          <thead>
            <tr>
              
              <th scope="col">Location ID</th>
              <th scope="col">Locations</th>
              <th scope="col">Delete</th>
              
            </tr>
          </thead>
          <tbody>
           <?php show_location(); ?> 
            
          </tbody>
        </table>
        </div>
              
            
            </div>
      <!-- End Navbar -->
    <?php include 'includes/footer.php' ?>