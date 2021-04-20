<div class="col-md-3">
    <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
    <form method="post" onsubmit="return validateNewsletterForm()">
        <div class="input-group mb-3">
        <label for="newsletter-email" id="newsletter-email-info"></label>
        <input type="email" class="form-control border-secondary text-white bg-transparent .input-field" placeholder="Enter Email" name="newsletter_email" aria-label="Enter Email" aria-describedby="button-addon2" id="newsletter-email">
        <div class="input-group-append">
            <button class="btn btn-primary text-white" type="button" id="button-addon2" name="send_newsletter">Send</button>
        </div>
        </div>
    </form>
    <?php
    
        function add_newsletter(){
            global $connection;
            if (isset($_POST['send_newsletter'])) {
                $newsletter_email = $_POST['newsletter_email'];
                $query = "INSERT INTO newsletter(newsletter_email) VALUES('$newsletter_email')";
                $result = mysqli_query($connection,$query);
                if (!$result) {
                    die("could not send data" . mysqli_error($connection));
                }else{
                    header("Location: ?email_info_added");
                }
            }
        }

add_newsletter();


?>
</div>
<script type="text/javascript">
        function validateNewsletterForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid ');
            var userEmail = $("#newsletter-email").val();
          
            if (userEmail == "") {
                $("#newsletter-email-info").html("Required.");
                $("#newsletter-email").css('border', '#e66262 1px solid !important');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#newsletter-email-info").html("Invalid Email Address.");
                $("#newsletter-email").css('border', '#e66262 1px solid');
                valid = false;
            }

           
            return valid;
        }
</script>