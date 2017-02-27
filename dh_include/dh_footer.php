
<footer class="container">
	<div class="row">
		<div class="col-12">
			<div class='footer line-footer centro'>
				<p style="color:#8A8A8A; font-size: 13px">
					Iniciativa devHuayra 
					<a href="">
						<img src="assets/img/logo-devhuayra.png" class='icon-devhuayra'>
					</a>
					Copyright 2017
				</p>
			</div>
		</div>
	</div>
</footer>
</body>
<script type="text/javascript">
	/*
	 *Ralentizar el scrooll vertical
	 */
	if (window.addEventListener) window.addEventListener('DOMMouseScroll', wheel, false);
	window.onmousewheel = document.onmousewheel = wheel;

	function wheel(event) {
	    var delta = 0;
	    if (event.wheelDelta) delta = event.wheelDelta / 120;
	    else if (event.detail) delta = -event.detail / 3;

	    handle(delta);
	    if (event.preventDefault) event.preventDefault();
	    event.returnValue = false;
	}

	function handle(delta) {
	    var time = 800;
	    var distance = 300;

	    $('html, body').stop().animate({
	        scrollTop: $(window).scrollTop() - (distance * delta)
	    }, time );
	}
	/*
	 *END Ralentizar el scrooll vertical
	 */

	/*
	 *disqus
	 */
	(function() { // DON'T EDIT BELOW THIS LINE
	var d = document, s = d.createElement('script');
	s.src = '//devhuayra-com.disqus.com/embed.js';
	s.setAttribute('data-timestamp', +new Date());
	(d.head || d.body).appendChild(s);
	})();

	/*
	 * add y quitar clase al icono flotante
	 */
	function myFunction() {
	    var x = document.getElementById('iconflot');
	    if (x.style.display === 'none') {
	        x.style.display = 'block';
	    } else {
	        x.style.display = 'none';
	    }
	}

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<noscript>
	Please enable JavaScript to view the 
	<a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a>
</noscript>