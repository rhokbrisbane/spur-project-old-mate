<?php
  include 'inc/header.php';
?>

<main class="wrapper">
  <body>

  <!-- About Headings -->
  <section class="contentMain">
    <article class="contentCenter contentColor">
    <div class="contentRow">
      <h1>About</h1>
      <h2>
        Old Mate<br>
        әʊld meɪt<br>
        n. Australian colloquialism.
        <ol>
          <li>A word to describe a good friend</li>
          <li>A word to describe a perfect stranger, or someone’s name you don’t know</li>
          <li>A replacement term for a person's name within a sentence</li>
        </ol>
      </h2>
    </div>
    </article>
  </section>
  <section class="contentMain">
    <article class="contentCenter altText">
      <div class="contentRow">
        <h2>
          Suicide is national epidemic with over 2,000 Australian men taking their lives each year. Much of the focus and resources within
          preventative men’s mental health is aimed at men between the ages of the 14­44, which is understandable: Suicide is the leading
          cause of death amongst men in this age bracket:
        </h2>
    </article>
    <article class="contentCenter">
      <img src="img\aboutGraph1.png">
    </article>
      </div>
  </section>
  <section class="contentMain contentColor">
    <article class="contentCenter">
    <div class="contentRow">
      <img src="img\aboutGraph1.png">
    </div>
    </article>
    <article class="contentCenter">
    <div class="contentRow">
        <h2>
          These statistics, however, are misleading in understanding the real number of suicides.
          As men age, not only do a range of other health factors start to play a larger role in
          life ­expectancy, but exposure to accidental and other forms of death increases, too. As a
          result, suicide accounts for just 0.3% of deaths of men aged 80+.  However, It is a mistake
          to assume that the rate of suicide decreases as men age. In fact, quite the opposite is true.
          Suicide, in raw numbers, spikes in the 35­45 age bracket, and again in the 80+ age brackets;
          in this age bracket, exponentially so.
        </h2>
    </div>
    </article>
  </section>

  <!-- Get In Touch -->
  <section class="subheading">
    <article class="contentCenter">
      <h1>Get in touch</h1>
      <!-- Form Mails to mail@spurprojects.org -->
      <form class="contactForm" action="">
          <input type="text" name="subject" id="subject" class="contactInput" placeholder="Subject"/><textarea type="message" name="message" id="message" class="contactText" placeholder="Message"/></textarea><input class="submitButton" type=submit id="contactSubmit" value="Email"/>
      </form>
    </article>
  </section>
</body>
</main>
</html>

<?php
include 'inc/footer.php';
?>
