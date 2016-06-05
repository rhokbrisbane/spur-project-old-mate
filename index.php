<?php
  include 'inc/header.php';
?>

<main class="wrapper">
  <body>

    <!-- Call To Action-->
    <section class="titleBlock">
      <div class="titleContent backOne">
        <h5>#OLDMATE</h5>
        <h2>Suicide Prevention Never Gets Old</h2>
      </div>
    </section>

    <!-- Info Page -->
    <section class="contentMain contentColor">
      <div class="contentRow">
        <?php
        include 'inc/slider.php';
        ?>
        <div class="contentCenter">
          <h1>1 Hour Per Month</h1>
          <h2>Elderly men take their own lives at two times the national average. With just one hour per month, we can change that.</h2>
        </div>
      </div>
    </section>

    <!-- Join The Old Mate Army -->
    <section class="titleBlock">
      <div class="titleContent backTwo">
        <h1>Join The Old Mate Army</h1>
      </div>
    </section>

    <!-- Sign Up Page -->
    <section class="contentMain contentColor">
      <div class="contentRow">
        <div class="contentCenter">
          <h1>Take the Pledge</h1>
          <h2>I hereby take the pledge to spend at least one hour per month with an old mate for the next twelve months.</h2>
        </div>
        <div class="contentCenter">
          <div id="mc_embed_signup">
          <form action="/php/setpledgers.php" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">
          <div class="mc-field-group">
              <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email">
          </div>
          <div class="mc-field-group">
              <input type="text" value="" name="NAME" class="required" id="mce-NAME" placeholder="Name">
          </div>
          <div class="mc-field-group">
              <input type="text" value="" name="POSTCODE" class="required" id="mce-POSTCODE" placeholder="Postcode">
          </div>
              <div id="mce-responses" class="clear">
                  <div class="response" id="mce-error-response" style="display:none"></div>
                  <div class="response" id="mce-success-response" style="display:none"></div>
              </div>
             <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c319b91ac25607f4451c84e2b_a34e1c5eb6" tabindex="-1" value=""></div>
             <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button submitButton"></div>
             </div>
          </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Old Mate Updates -->
    <section class="titleBlock  contentColor">
      <div class="titleContent backThree">
        <h1>Old Mate Hours Tracked This Month: 6500</h1>
      </div>
    </section>

    <!-- Old Google Map -->
    <section class="mapSection contentColor">
      <div class="mapContent">
        <div id="map_canvas"></div>
      </div>
    </section>

    <!-- Old Mate Updates -->
    <section class="titleBlock contentColor">
      <div class="titleContent backFour">
        <h1>Old Mate Army Updates</h1>
      </div>
    </section>

    <!-- Twitter Page -->
    <section class="contentMain contentColor">
        <div class="contentTwitter">
          <?php include 'apis/twitter-feed.php' ?>
          <div class="clearfix"></div>
        </div>
    </section>

  </body>
</main>
</html>

<?php
  include 'inc/footer.php';
?>
