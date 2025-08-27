function showDetails(plan) {
  document.querySelectorAll('.plan-details').forEach(function (element) {
    element.classList.remove('active');
  });
  document.getElementById(`${plan}Details`).classList.add('active');
}

function redirectToPayment(planName, price) {
  const rupeeSymbol = '\u20B9';
  const confirmation = confirm(`Do you want to proceed to payment for ${planName}? Total amount: ${rupeeSymbol}${price}`);
  
  if (confirmation) {
    // Redirect to payment methods
    window.location.href = 'payment.html'; // Redirecting to payment page
  } else {
    // User clicked cancel, do nothing or provide any additional feedback
    alert('Payment canceled.');
  }
}
