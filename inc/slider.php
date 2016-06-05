<style>
  .slider {
    position: relative;
  }
  .slider .container {
    position: absolute;
    opacity: 0;
    transition: opacity 0.3s;
  }

  .slider .container.active {
    opacity: 1;
  }
</style>
<div class="slider contentCenter">
  <div class="container active">
    <img class="imgCircle" src="img/guy.png"/>
  </div>
  <div class="container">
    <img class="imgCircle "  src="img/guy.png"/>
  </div>
  <div class="container">
    <img class="imgCircle "  src="img/guy.png"/>
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
