<?php include 'includes/header.php' ?>
<?php include 'includes/navigation.php '?>

<div class="site-blocks-cover inner-page-cover overlay" style="background-image:linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white font-weight-light text-uppercase font-weight-bold">Track Order</h1>
            <p class="breadcrumb-custom"><a href="index.php">Home</a> <span class="mx-2">&gt;</span> <span>Track Order</span></p>
          </div>
        </div>
      </div>
    </div>  
</div>

<div class="site-section bg-light ">
<div class="container mt-5 mb-5 ">
<form action="track-search.php" method="post" class="p-5 bg-white ">
             

			 

			 <div class="row form-group">
			   
			   <div class="col-md-12">
				 <label class="text-black" for="tracking_no">Tracking Number</label> 
				 <input type="text" name="search"  id="tracking_no" class="form-control" style="max-width:500px; " placeholder="Enter your tracking number.....">
			   </div>
			 </div>

			

			 <div class="row form-group">
			   <div class="col-md-12">
				 <input type="submit" value="Track Order" name="track_shipment" class="btn btn-primary py-2 px-4 text-white">
			   </div>
			 </div>

 
		   </form>
</div>
	
</div>

<?php include 'includes/footer.php' ?>