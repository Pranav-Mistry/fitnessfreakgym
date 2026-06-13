<?php
require_once 'config.php';

header('Content-Type: application/json');

// Ensure user session is validated
if (!isset($_SESSION['user'])) {
    echo json_encode(['msg' => 'Unauthorized session access', 'status' => false]);
    exit();
}

$username = $_SESSION['user'];
$payment_id = isset($_POST['razorpay_payment_id']) ? trim($_POST['razorpay_payment_id']) : '';
$amount = isset($_POST['totalAmount']) ? trim($_POST['totalAmount']) : '';
$product_id = isset($_POST['product_id']) ? trim($_POST['product_id']) : '';

if (empty($payment_id)) {
    echo json_encode(['msg' => 'Invalid transaction parameters', 'status' => false]);
    exit();
}

$con = getDBConnection();

// Auto-create tblonlinepay table if it doesn't exist in the database
$table_check = mysqli_query($con, "SHOW TABLES LIKE 'tblonlinepay'");
if (mysqli_num_rows($table_check) == 0) {
    $create_table_query = "CREATE TABLE `tblonlinepay` (
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `username` VARCHAR(50) NOT NULL,
        `payment_id` VARCHAR(100) NOT NULL,
        `product_id` VARCHAR(50) NOT NULL,
        `amount` INT NOT NULL,
        `payment_date` DATETIME NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";
    mysqli_query($con, $create_table_query);
}

$payment_date = date('Y-m-d H:i:s');

// Prepare transaction statement to prevent SQL injection
$stmt = mysqli_prepare($con, "INSERT INTO tblonlinepay (username, payment_id, product_id, amount, payment_date) VALUES (?, ?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, "sssis", $username, $payment_id, $product_id, $amount, $payment_date);

$success = mysqli_stmt_execute($stmt);

mysqli_stmt_close($stmt);
mysqli_close($con);

if ($success) {
    echo json_encode(['msg' => 'Payment successfully credited', 'status' => true]);
} else {
    echo json_encode(['msg' => 'Database persistence failed', 'status' => false]);
}
?>
