<?php
$type = ($_GET['type'] ?? '') === 'book' ? 'demo booking' : 'form submission';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Thank You | PIIDM</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body class="success-page">
<div class="success-card">
  <div class="success-icon">✓</div>
  <h1>Thank You!</h1>
  <p>Your <?php echo htmlspecialchars($type); ?> has been submitted successfully.</p>
  <a class="btn btn-yellow" href="index.php">Back To Website</a>
</div>
</body>
</html>
