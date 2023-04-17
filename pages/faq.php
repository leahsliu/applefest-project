<?php $activeFAQ = "active" ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="/public/styles/style.css">
  <title>FAQs</title>
</head>

<body>
  <?php include "includes/header.php"; ?>

  <?php include "includes/nav.php"; ?>


  <!-- Source: instructor provided -->
  <h2>Frequently Asked Questions</h2>
  <button type="button" class="faq-button" id="q1-button">+ What safety precautions are in place due to COVID-19?</button>
  <button type="button" class="faq-button hidden" id="q1-button-minus">- What safety precautions are in place due to COVID-19?</button>

  <p class="hidden" id="q1-answer">The event is typically crowded and adequate social distancing is not always possible, so we recommend that everyone, but especially unvaccinated individuals, wear a mask in crowded areas to protect our population.</p>

  <button type="button" class="faq-button" id="q2-button">+ How much money should I bring?</button>
  <button type="button" class="faq-button hidden" id="q2-button-minus">- How much money should I bring?</button>

  <p class="hidden" id="q2-answer">Entry to the event is completely free! The amount of money you should bring is dependent on what, if anything, you wish to purchase at the festival. If you are driving, there is a $5 charge to park at the parking garage (You can find more parking information here ). If you plan to eat at the festival, you may also wish to bring at least $10. Prices of the various baked goods, produce, and crafts vary by vendor. Many of our vendors and their items can be found here.</p>

  <button type="button" class="faq-button" id="q3-button">+ Can I pay with a credit card?</button>
  <button type="button" class="faq-button hidden" id="q3-button-minus">- Can I pay with a credit card?</button>
  <p class="hidden" id="q3-answer">Most of our vendors accept credit cards, however, you should bring some cash in case a shop you are interested in does not accept them.</p>

  <button type="button" class="faq-button" id="q4-button">+ Can I bring my dog?</button>
  <button type="button" class="faq-button hidden" id="q4-button-minus">- Can I bring my dog?</button>
  <p class="hidden" id="q4-answer">Bringing a dog is strongly discouraged due to pets not being allowed on the Commons. Additionally, the event will be crowded and may be overwhelming for your furry friend, or it may be difficult to move through the crowds. Registered service animals are permitted.</p>

  <button type="button" class="faq-button" id="q5-button">+ What should I wear?</button>
  <button type="button" class="faq-button hidden" id="q5-button-minus">- What should I wear?</button>
  <p class="hidden" id="q5-answer">If you are not familiar with the Ithaca area, it can get quite cold in the fall! Check the weather and bring layers.</p>

  <button type="button" class="faq-button" id="q6-button">+ When is the best time to attend?</button>
  <button type="button" class="faq-button hidden" id="q6-button-minus">- When is the best time to attend?</button>
  <p class="hidden" id="q6-answer">If you are looking to avoid the crowds, attending mid-day Friday is a good idea. However, many attendees find that the crowds on the weekend add to the energy and fun of the festival.</p>

  <button type="button" class="faq-button" id="q7-button">+ Will there be alcohol?</button>
  <button type="button" class="faq-button hidden" id="q7-button-minus">- Will there be alcohol?</button>
  <p class="hidden" id="q7-answer">Some vendors do sell alcohol (such as hard cider), so be sure to bring your ID if you are over 21. Many of these vendors also offer tastings.</p>

  <script type="text/javascript" src="/public/scripts/jquery-3.6.0.js"></script>
  <script type="text/javascript" src="/public/scripts/show-more.js"></script>
  <script type="text/javascript" src="/public/scripts/hamburger.js"></script>
</body>
<?php include "includes/footer.php"; ?>

</html>
