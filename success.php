<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Payment Successful - <?php echo APP_NAME; ?></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<style>
body {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Poppins', sans-serif;
}
.success-card {
    background: white;
    border-radius: 20px;
    padding: 50px;
    text-align: center;
    box-shadow: 0 20px 60px rgba(0,0,0,0.3);
    max-width: 500px;
}
.checkmark {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: inline-block;
    background: #4CAF50;
    position: relative;
    animation: scaleIn 0.5s ease;
}
.checkmark:after {
    content: '✓';
    font-size: 50px;
    color: white;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
@keyframes scaleIn {
    from { transform: scale(0); }
    to { transform: scale(1); }
}
h1 {
    color: #333;
    margin-top: 30px;
    font-weight: 600;
}
p {
    color: #666;
    margin: 20px 0;
    font-size: 16px;
}
.btn-home {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 12px 40px;
    border-radius: 50px;
    text-decoration: none;
    display: inline-block;
    margin-top: 20px;
    font-weight: 500;
    transition: transform 0.3s;
}
.btn-home:hover {
    transform: translateY(-2px);
    color: white;
    text-decoration: none;
}
</style>
</head>
<body>

<div class="success-card">
    <div class="checkmark"></div>
    <h1>Payment Successful!</h1>
    <p>Thank you for your membership purchase at <strong><?php echo APP_NAME; ?></strong>.</p>
    <p>Your payment has been processed successfully. A confirmation email will be sent shortly.</p>
    <p><small>Transaction completed on: <?php echo date('F d, Y h:i A'); ?></small></p>
    <a href="home.php" class="btn-home">Go to Dashboard</a>
</div>

</body>
</html>
