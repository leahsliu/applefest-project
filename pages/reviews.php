<?php $activeRev = "active" ?>

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
  <form id="write-review-form" action="/write-review/confirmation" method="post" novalidate>
    <div class="form-content">
      <label for="request-name">Name:</label>
      <input type="text" id="request-name" name="request-name" />
    </div>

    <div class="form-content">
      <label>Would you recommend going to the Apple Harvest Festival?</label>
      <div class="form-content">
        <label for="recommendation-yes">Yes</label>
        <input type="radio" name="recommendation" id="recommendation-yes" value="Yes" />
        <label for="recommendation-no">No</label>
        <input type="radio" name="recommendation" id="recommendation-no" value="No" />
      </div>
    </div>

    <div class="form-content">
      <label for="comments">Additional Comments:</label>
      <div class="form-content">
        <textarea id="comments" name="comments" rows="5" cols="33"></textarea>
      </div>
    </div>

    <div class="form-content">
      <label>Are you willing to share your review publicly?</label>
      <div class="form-content">
        <label for="share-yes">Yes</label>
        <input type="radio" id="share-yes" name="share" value="Yes" />
        <label for="share-no">No</label>
        <input type="radio" id="share-no" name="share" value="No" />
      </div>
    </div>

    <div class="form-content align-right">
      <input class="reset-button" type="reset" value="Reset Form">
      <input class="submit-button" type="submit" value="Submit Review">
    </div>
  </form>

  <script type="text/javascript" src="/public/scripts/jquery-3.6.0.js"></script>
  <script type="text/javascript" src="/public/scripts/hamburger.js"></script>
</body>
<?php include "includes/footer.php"; ?>

</html>
