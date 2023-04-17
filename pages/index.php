<?php $activeAbt = "active" ?>

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

  <h2>Dates &amp; Hours</h2>
  <div class="date-page">
    <div class="date-content">
      <!-- Source: instructor provided -->
      <p>Located on the Ithaca Commons</p>
      <p>171 E M.L.K. Jr. St, Ithaca, NY 14850</p>
      <a href="/directions">Get Directions</a>

      <ul>
        <!-- Source: instructor provided -->
        <li>Friday, October 1: 12pm - 6pm</li>
        <li>Saturday, October 2: 10am - 6pm</li>
        <li>Sunday, October 3: 10am - 6pm</li>
      </ul>
      <!-- Source: instructor provided -->
      <p>We are excited to welcome you back to one of Ithaca’s most celebrated events: the Apple Harvest Festival! Join us for three days of farm-fresh bites, local crafts, live music, and fall activities for all ages.</p>

      <p>This annual festival marks the beginning of the fall harvest season, and features local apples and the Finger Lakes food, craft, and entertainment community! The weekend's happenings gives Ithaca residents, students, and visitors an opportunity to interact with small businesses and creators in the area. Welcome fall with us by visiting one of Ithaca's most famous events!</p>
    </div>
    <div class="date-image">
      <!-- Source: instructor provided -->
      <img src="/public/images/map.png" alt="Apple Harvest Festival Map" />
      <a href="/public/images/map-big.png">Download Map</a>
    </div>
  </div>

  <!-- Source: instructor provided -->
  <h2>History of Festival</h2>
  <div class="history">
    <p>Since 1982, the Ithaca Apple Harvest Festival hosts apples, baked goods, family entertainment, games, prizes, live entertainment and more. Over 100 talented artists, crafters, bakers, and makers come together for the Apple Harvest Craft Fair! Find creative, unique works from clothing to woodworking, ceramics to paintings, fudge to essential oils and beyond throughout the festival. The festival is held in the Ithaca Commons, a few streets that are full of restaurants and shops.</p>
    <!-- Source: instructor provided -->
    <img src="/public/images/people-eating-apples.jpg" alt="Apple Harvest Participants" />
  </div>

  <h2>Reviews</h2>
  <div class="reviews">
    <div class="reviewContent">
      <p>The Apple Harvest Festival is the best place to go hangout during the fall if you're a college student!</p>
      <p>Recommend? Yes</p>
      <p class="identifier">Anonymous, 2/5/2023</p>
    </div>
    <div class="reviewContent">
      <p>I love the Apple Cider donuts! Make sure to bring cash because a lot of places don't take card.</p>
      <p>Recommend? Yes</p>
      <p class="identifier">Anonymous, 2/5/2022</p>
    </div>
    <div class="reviewContent">
      <p>Great place to spend time with family. There are many small vendors and people everywhere during Apple Harvest time.</p>
      <p>Recommend? Yes</p>
      <p class="identifier">Anonymous, 2/10/2023</p>
    </div>
  </div>

  <script type="text/javascript" src="/public/scripts/jquery-3.6.0.js"></script>
  <script type="text/javascript" src="/public/scripts/hamburger.js"></script>
</body>

<?php include "includes/footer.php"; ?>

</html>
