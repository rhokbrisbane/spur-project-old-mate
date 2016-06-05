<?php
  include 'inc/header.php';
?>
<!-- Stories Headings -->
<section class="titleBlock">
  <article class="titleContent backOne">
    <h5>Stories</h5>
    <ul>
      <li>Share your story</li>
    </ul>
    </h2>
  </article>
</section>

<!-- STORIES FEED -->
<section class="contentMain contentColor">
    <?php
      include 'php/queries.php';

      $results = getStories(5, 0);
      foreach ($results as $result) {
        echo '<div class="contentRow"><div class="contentCenter"><h1>' . $result['name'] . '</h1><h2>' . $result['text'] . '</h2></div></div>';
        // echo "<p>" . $result['name'] . ": " . $result['text'] . "</p>";
      }
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
          <input type="text" value="" name="NAME" class="required name" id="mce-NAME" placeholder="Name">
      </div>
      <div class="mc-field-group">
          <textarea type="text" value="" name="MESSAGE" class="required message" id="mce-MESSAGE" placeholder="Story"></textarea>
      </div>
	  <div class="mc-field-group">
          <textarea type="text" value="" name="POSTCODE" class="required postcode" id="mce-POSTCODE" placeholder="Post code"></textarea>
      </div>
      <div id="mce-responses" class="clear">
          <div class="response" id="mce-error-response" style="display:none"></div>
          <div class="response" id="mce-success-response" style="display:none"></div>
      </div>
       <div style="position: absolute; left: -5000px;" aria-hidden="true"></div>
       <div class="clear"><input type="submit" value="Submit" name="Submit" id="mc-embedded-subscribe" class="button submitButton"></div>
       </div>
      </form>
      </div>
    </div>
  </div>
</section>

<?php
  include 'inc/footer.php';
?>
