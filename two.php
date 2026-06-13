<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo APP_NAME; ?> - Weekly Plan</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="mainpage.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 

<style>
.swiper-wrapper {
  display: flex;
  flex-wrap: nowrap; /* Ensure all slides are in a single row */
  overflow-x: auto;  /* Enable horizontal scrolling if necessary */
}

.swiper-slide {
  min-width: 300px; /* Adjust as necessary for your design */
  flex: 0 0 auto;   /* Prevent flex items from shrinking or growing */
}

.client__card {
  width: 100%; /* Ensure each card takes up the full width of its container */
  margin: 0 10px; /* Add some space between the cards */
}

</style>

</head>
  <body>
<center>   
   <section class="section__container price__container" id="price">
      <h2 class="section__header">Our Pricing</h2>
      <p class="section__description">
        Our pricing plan comes with various membership tiers, each tailored to
        cater to different preferences and fitness aspirations.
      </p>
      <div class="price__grid">
        <div class="price__card">
          <div class="price__content">
            <h4>Yearly Plan</h4>
            <img src="Images/price-2.png" alt="price" />
            <p>
              Best value! Save big with our annual membership and commit to
              your fitness goals with full access to PRO facilities.
            </p>
            <hr />
            <h4>Key Features</h4>
            <p>ELITE Gyms & Classes</p>
            <p>PRO Gyms access</p>
            <p>Smart workout plan</p>
            <p>At home workouts</p>
            <p>Nutrition guidance</p>
			<div>
		  <h3 style="color:red">₹15,000/- per year</h3>
		  <p style="color:green;font-weight:bold;">💰 Save ₹3,000!</p>
		  </div>
          </div>
          <a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" data-amount="15000" data-id="2">Join Now</a> 
        </div>
        
      </div>
    </section>

<div style="text-align: center; margin: 30px 0;">
    <a href="home.php" class="btn" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 12px 30px;">← Back to Home</a>
</div>
</center>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

  $('body').on('click', '.buy_now', function(e){

    var totalAmount = $(this).attr("data-amount");
    var product_id =  $(this).attr("data-id");
    var options = {
    "key": "<?php echo RAZORPAY_KEY_ID; ?>",
    "amount": (15000*100), // Amount in paise (15000 INR = 1500000 paise)
    "name": "<?php echo APP_NAME; ?>",
    "description": "Payment",
    "image": "ganesh1.png",
    "handler": function (response){
          $.ajax({
            url: 'payment-process.php',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
            }, 
            success: function (msg) {

               window.location.href = 'success.php';
            }
        });
     
    },

    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.preventDefault();
  });

</script>


