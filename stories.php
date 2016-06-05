<?php
  include 'inc/header.php';
?>
<!-- Stories Headings -->
<section class="titleBlock">
  <div class="titleContent backOne">
    <h5>Stories</h5>
    <h2>Below is a collection of posts from the Old Mate army. These are a combination of social media posts
    with the hashtag #oldmate, as well as personal stories.</h2>
  </div>
</section>

<!-- STORIES FEED -->
<section class="contentMain contentColor">
    <?php
      include 'php/queries.php';

      echo getStories(5, 0);
    ?>
  <div class="clearfix"></div>
</section>

<section class="contentMain contentColor">
  <div class="contentRow">
    <div class="contentCenter">
      <h1>Add your own Old Mate Story</h1>
      <h2>We want to celebrate the Old Mates in your life! This area is an opportunity for you to share the story of your Old Mate with the world and how you foster your relationship with them</h2>
    </div>
    <div class="contentCenter">
      <div id="">
      <form action="postdataforstory" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
      <div id="">
      <div class="mc-field-group">
          <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Name">
      </div>
      <div class="mc-field-group">
          <textarea type="text" value="" name="NAME" class="required" id="mce-NAME" placeholder="Story"></textarea>
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
<section class="">
  <!-- Montly Old Mate Ideas -->
  <article>
    <div>
      <img src="img\hero.jpg"/>
    </div>
    <div>
      <img src="img\hero.jpg"/>
    </div>
    <div>
      <img src="img\hero.jpg"/>
    </div>
    <div>
      <img src="img\hero.jpg"/>
    </div>
    <div>
      <img src="img\hero.jpg"/>
    </div>
    <div>
      <img src="img\hero.jpg"/>
    </div>
  </article>
</section>


<?php
  include 'inc/footer.php';
?>
