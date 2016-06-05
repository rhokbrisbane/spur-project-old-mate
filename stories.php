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
    <?php include 'apis/twitter-feed.php' ?>
  <div class="clearfix"></div>
</section>


<section class="">
  <!-- Montly Old Mate Ideas -->
  <article>
    <button>Add your own Old Mate story</button>
  </article>
  <article class="writeModal">
    <form action="" method="post" enctype="multipart/form-data">
      <fieldset>
        <legend>
          We want to celebrate the Old Mates in your life! This area is an opportunity
          for you to share the story of your Old Mate with the world and how you foster your
          relationship with them
        </legend>
          <label for="storiesname">Name</label>
          <input type="text" name="storiesname" id="storiesname"/>
          <label for="message">Message</label>
          <textarea type="message" name="message" id="message"/></textarea>
          <input type="file" name="image"/>
          <label for="terms"><a href="">Terms and Conditions</a></label>
          <input type="checkbox" name="terms" id="terms"/>
          <input type=submit id="storiesSubmit" value="Share"/>
      </fieldset>
    </form>
  </article>
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
