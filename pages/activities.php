<?php $activeAct = "active" ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="/public/styles/style.css">
  <title>What To Do</title>
</head>

<body>
  <?php include "includes/header.php"; ?>

  <?php include "includes/nav.php"; ?>


  <!-- Source: instructor provided -->
  <h2>Vendors</h2>
  <p>With over 100 vendors present at the festival, there are many opportunities to be introduced to the rich artisan and culinary community in Ithaca. Our food vendors feature apple-centric and other fall classics for you to taste, and the craft vendors offer homemade goods like soaps, jewelry, sculptures, clothing, and more! This is the perfect place to learn about and support Ithaca's small businesses that encompass the heart of the town.</p>

  <div class="content-box">
    <div class="all-buttons">
      <button type="button" class="tab-button" id="produce-tab">Apple &amp; Produce</button>
      <button type="button" class="tab-button" id="cider-tab">Cider &amp; Wine</button>
      <button type="button" class="tab-button" id="food-tab">Food</button>
      <button type="button" class="tab-button" id="craft-tab">Craft</button>
    </div>
    <!-- Source: instructor provided -->
    <div class="main-produce" id="vendor-tab-1">
      <h3>Apple &amp; Produce Vendors</h3>
      <div class="product-vendors">
        <ul>
          <li>AJ Teeter Farm</li>
          <li>Bakers' Acres</li>
          <li>Ella's Acres</li>
          <li>Little Tree Orchards</li>
          <li>MacDonald Farms</li>
          <li>Robbies Farm Market</li>
          <li>Society of Horticulture</li>
          <li>Schoolyard Sugar Bush</li>
        </ul>
        <!-- Source: instructor provided -->
        <img src="/public/images/apple-basket.jpg" alt="Apple Vendor" />
      </div>
    </div>
    <!-- Source: instructor provided -->
    <div class="main-wine hidden" id="vendor-tab-2">
      <h3>Cider &amp; Wine Vendors</h3>
      <div class="wine-vendors">
        <ul>
          <li>Ashley Lynn Winery</li>
          <li>Black Duck Cidery</li>
          <li>Finger Lakes Cider House</li>
          <li>New York Cider Company</li>
          <li>Thousand Islands Winery</li>
        </ul>
        <!-- Source: instructor provided -->
        <img src="/public/images/cider-apples-stand.jpg" alt="Cider Vendor" />
      </div>
    </div>

    <!-- Source: instructor provided -->
    <div class="main-food hidden" id="vendor-tab-3">
      <h3>Food Vendors</h3>
      <div class="food-vendors">
        <ul>
          <li>Coltivare</li>
          <li>CreamCycle</li>
          <li>Momo Bar</li>
          <li>On the Street Pitas</li>
          <li>Little Grey Bakery</li>
          <li>Lou's Covert City Store</li>
          <li>Mr. Squeeze Lemonade</li>
          <li>Knot of this World Pretzels</li>
          <li>Ithaca Coffee Company</li>
          <li>Kettle Corn Shoppe</li>
        </ul>
        <!-- Source: instructor provided -->
        <img src="/public/images/bakedup.jpg" alt="Bakedup Pie" />
      </div>
    </div>

    <!-- Source: instructor provided -->
    <div class="main-craft hidden" id="vendor-tab-4">
      <h3>Craft Vendors</h3>
      <div class="craft-vendors">
        <ul>
          <li>Art by Mary Shelley</li>
          <li>Balance Aromatherapy</li>
          <li>Carolina Perez Designs</li>
          <li>Carriage House Woodcrafters</li>
          <li>Dear Elaan Jewelry</li>
          <li>Earth 'n' Fire Pottery</li>
          <li>Easy Living Hats</li>
          <li>Ithaca Sheepskins</li>
          <li>Planetarium Designs</li>
        </ul>
        <!-- Source: instructor provided -->
        <img src="/public/images/craft-earrings.jpg" alt="Bone Fire Craft Earrings" />
      </div>
    </div>
  </div>

  <!-- Source: instructor provided -->
  <h2>Entertainment</h2>
  <div class="entertainment">
    <div class="entertainment-info">
      <p>Located at the Bernie Milton Pavilion</p>
      <h3>Saturday, October 2, 2021</h3>
      <ul>
        <li>12:00 - 12:45PM - Mirage</li>
        <li>1:00 - 1:45PM - East Hill Trio</li>
        <li>2:00 - 2:45PM - GIAC Jumpers</li>
        <li>3:00 - 3:45PM - Good Dog</li>
        <li>4:00 - 4:45PM - Busking Raed ft. Jow Haywood</li>
        <li>5:00 - 5:45PM - Papa Muse</li>
      </ul>

      <!-- Source: instructor provided -->
      <h3>Sunday, October 3, 2021</h3>
      <ul>
        <li>12:00 - 12:45PM - IthAccordian</li>
        <li>1:00 - 1:45PM - Dragon Recorder Quartet</li>
        <li>2:00 - 2:45PM - Fall Creek Brass Band</li>
        <li>3:00 - 3:45PM - Go Gone</li>
        <li>4:00 - 4:45PM - Kitestring</li>
        <li>5:00 - 5:45PM - DJ WhoIsBrianTech</li>
      </ul>
    </div>
    <!-- Source: instructor provided -->
    <img src="/public/images/fire.jpg" alt="Fire Performance" />
  </div>

  <script type="text/javascript" src="/public/scripts/jquery-3.6.0.js"></script>
  <script type="text/javascript" src="/public/scripts/vendor-tabs.js"></script>
  <script type="text/javascript" src="/public/scripts/hamburger.js"></script>
</body>
<?php include "includes/footer.php"; ?>

</html>
