<style>
  .slider {
    position: relative;
  }
  .slider .container {
    position: absolute;
    opacity: 0;
    transition: opacity 0.5s;
  }

  .slider .container.active {
    opacity: 1;
  }
</style>
<div class="slider contentCenter">
  <div class="container active">
    <img class="imgCircle" src="img/guy1.jpg"/>
  </div>
  <div class="container">
    <img class="imgCircle "  src="img/guy2.jpg"/>
  </div>
  <div class="container">
    <img class="imgCircle "  src="img/guy3.jpg"/>
  </div>
  <div class="container">
    <img class="imgCircle "  src="img/guy4.jpg"/>
  </div>
  <div class="container">
    <img class="imgCircle "  src="img/guy5.jpg"/>
  </div>
</div>

<script type="text/javascript">
setInterval(function () {
  var curac = $('.slider .active');
  curac.removeClass('active');
  var next = curac.next();
  if (!next.length) { next = $('.slider .container:first-child') };
  next.addClass('active');
}, 5 * 1000);
</script>
