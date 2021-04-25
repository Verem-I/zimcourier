<?php include 'includes/header.php' ?>
<?php include 'includes/navigation.php '?>

<div class="site-blocks-cover inner-page-cover overlay" style="background-image:linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white font-weight-light text-uppercase font-weight-bold">Track Order</h1>
            <p class="breadcrumb-custom"><a href="index.html">Home</a> <span class="mx-2">&gt;</span> <span>Track Order</span></p>
          </div>
        </div>
      </div>
    </div>  
</div>

<div class="site-section bg-light ">
<div class="container mt-5 mb-5 ">

<style>
  @media only screen and  (max-width: 420px){
    track-info{
        font-size:14px !important;
    }
}

</style>
  <div class="site-section bg-light">
        <div class="container">
          <div class="row">
            <div class="col-md-7 mb-5">
              <h2 class="text-primary text-black mb-5">Order Details:</h2>
              <?php include "includes/search_tracking_number.php"?>
            </div>
          </div>
        </div>
  </div>
</div>
	
</div>

<?php include 'includes/footer.php' ?>