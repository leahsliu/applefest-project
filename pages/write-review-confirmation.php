<?php
$activeRev = "active";
$form_name = $_POST['request-name']; // untrusted
$form_recommendation = $_POST['recommendation']; // untrusted
$form_comments = $_POST['comments']; // untrusted
$form_share = $_POST['share'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="/public/styles/style.css">
  <title>Home</title>
</head>

<body>
  <?php include "includes/header.php"; ?>


  <?php include "includes/nav.php"; ?>

  <h2>Write a Review</h2>
  <p>
    <?php echo htmlspecialchars($form_name); ?>, thank you for writing a review!
  </p>
  <p>Return back to home page <a href="/">here</a>.</p>
  <div class="output">
    <p class="form-question">Recommend?</p>
    <p><?php echo htmlspecialchars($form_recommendation) ?></p>

    <p class="form-question">Additional Comments: </p>
    <p><?php echo htmlspecialchars($form_comments) ?></p>

    <p class="form-question">Share?</p>
    <p><?php echo htmlspecialchars($form_share) ?></p>
  </div>

  <script type="text/javascript" src="/public/scripts/jquery-3.6.0.js"></script>
  <script type="text/javascript" src="/public/scripts/hamburger.js"></script>
</body>
<?php include "includes/footer.php"; ?>

</html>
