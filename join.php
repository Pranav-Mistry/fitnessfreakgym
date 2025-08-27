<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gym Membership Plans</title>
  <link rel="stylesheet" href="join.css">
  <script src="join.js"></script>
</head>
<body>

<div class="plans-container">
  <button class="plan-button" onclick="showDetails('basic')">Basic Plan</button>
  <button class="plan-button" onclick="showDetails('normal')">Weekly Plan</button>
  <button class="plan-button" onclick="showDetails('full')">Monthly Plan</button>

  <div id="basicDetails" class="plan-details">
    <h2>Basic Plan Details</h2>
    <p><strong>Price:</strong> &#8377; 1000 per month</p>
    <p>Our Basic Plan is the perfect starting point for individuals looking to kickstart their fitness journey or maintain an active lifestyle.</p>
    <p><strong>Services we provide :</strong></p>
    <ul>
      <li>Smart workout plan</li>
      <li>At home workouts</li>
    </ul>
    <button class="payment-button" onclick="redirectToPayment('Basic Plan', 1000)">Pay Now</button>
  </div>

  <div id="normalDetails" class="plan-details">
    <h2>Weekly Plan Details</h2>
    <p><strong>Price:</strong> &#8377; 1500 per week</p>
    <p>Our weekly plan is designed to provide structure and variety to your workouts, ensuring you stay motivated and on track.</p>
    <p><strong>Services we provide :</strong></p>
    <ul>
      <li>PRO Gyms</li>
      <li>Smart workout plan</li>
      <li>At home workouts</li>
    </ul>
    <button class="payment-button" onclick="redirectToPayment('Weekly Plan', 1500)">Pay Now</button>
  </div>

  <div id="fullDetails" class="plan-details">
    <h2>Monthly Plan Details</h2>
    <p><strong>Price:</strong> &#8377; 2500 per month</p>
    <p>With this flexible membership, you'll have access to our state-of-the-art gym facilities, expert trainers, and a vibrant fitness community.</p>
    <p><strong>Services we provide :</strong></p>
    <ul>
      <li>ELITE Gyms & Classes</li>
      <li>PRO Gyms</li>
      <li>Smart workout plan</li>
      <li>At home workouts</li>
      <li>Personal Training</li>
    </ul>
    <button class="payment-button" onclick="redirectToPayment('Monthly Plan', 2500)">Pay Now</button>
  </div>
</div>

</body>
</html>
