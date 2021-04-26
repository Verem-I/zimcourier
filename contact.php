<?php include 'includes/header.php' ?>
<?php include 'includes/navigation.php' ?>
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image:linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white font-weight-light text-uppercase font-weight-bold">Contact Us</h1>
            <p class="breadcrumb-custom"><a href="index.php">Home</a> <span class="mx-2">&gt;</span> <span>Contact</span></p>
          </div>
        </div>
      </div>
    </div>  

    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5">

            

            <form action="includes/functions.php" class="p-5 bg-white" method ="post" enctype="multipart/form-data" onsubmit="return validateContactForm()">
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname" id="fname-info">First Name</label>
                  <input type="text" id="fname" class="form-control" name = "first_name">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname" id="lname-info">Last Name</label>
                  <input type="text" id="lname" class="form-control" name = "last_name">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email" id="email-info">Email</label> 
                  <input type="email" id="email" class="form-control" name = "user_email">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject" id="subject-info">Subject</label> 
                  <input type="subject" id="subject" class="form-control" name = "subjects">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message" id="message-info">Message</label> 
                  <textarea name="messages" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..." ></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white" name="send_message">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">Off CDP House, Nukutuku Road, Lami, Fiji.</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="TEL:+1 (513) 428-9826">+1 (513) 428-9826</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="mailTO:zimcourierdeliveryserviceltd@gmail.com">zimcourierdeliveryservices@gmail.com</a></p>

            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p>If you have an inquiry about zim courier products and services, such as express document and parcel shipping, or our time and day definite express services, please complete the form. We reply to all mails in 24 hours</p>
              
            </div>

          </div>
        </div>
      </div>
    </div>
<script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#fname").val();
            var lastName = $("#lname").val();
            var userEmail = $("#email").val();
            var subject = $("#subject").val();
            var content = $("#message").val();
            
            if (userName == "") {
                $("#fname-info").html("Required.");
                $("#fname").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (lastName == "") {
                $("#lname-info").html("Required.");
                $("#lname").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#email-info").html("Required.");
                $("#email").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#email-info").html("Invalid Email Address.");
                $("#email").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#message-info").html("Required.");
                $("#message").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>
 <?php include 'includes/footer.php' ?>