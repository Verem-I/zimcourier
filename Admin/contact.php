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
          <li class ="active">
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
          <li >
            <a href="tracking-location.php">
              <i class="nc-icon nc-world-2"></i>
              <p>Tracking Location</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" style="height: 100vh;">
      <!-- Navbar -->
     <?php include 'includes/navigation.php' ?>
    <div class="content">  
        <table class="table table-bordered">
          <thead>
            <tr>
              
              <th scope="col">Contact ID</th>
              <th scope="col"> First Name</th>
              <th scope="col"> Last Name</th>
              <th scope="col">Email Address</th>
              <th scope="col">Subject</th>
              <th scope="col">Message</th>
              <th scope="col">View</th>
              <th scope="col">Delete</th>
              
            </tr>
          </thead>
          <tbody>
            <?php show_contact(); ?>
          </tbody>
        </table>
    </div>
              
            
            </div>
      </div>     
      
    
      <!-- End Navbar -->
    <?php include 'includes/footer.php' ?>
      