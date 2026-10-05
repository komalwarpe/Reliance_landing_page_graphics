<?php
require_once __DIR__ . '/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$name  = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');

if ($name === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match('/^[0-9+\-\s]{10,15}$/', $phone)) {
    exit('Please enter valid name, email and phone details.');
}

$stmt = $pdo->prepare("INSERT INTO leads (name, email, phone, lead_type, created_at) VALUES (?, ?, ?, 'Book Now', NOW())");
$stmt->execute([$name, $email, $phone]);

header('Location: success.php?type=book');
exit;
?>
