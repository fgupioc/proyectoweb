	</div>	
		<script src="js/jquery-2.1.1.min.js"></script>   
			<script src="js/bootstrap.min.js"></script> 
			<script src="js/jquery.bxslider.min.js"></script>
			<script src="js/owl.carousel.min.js"></script>
	</body>
	<script type="text/javascript">
	$(document).ready(main);
 
var contador = 1;
 
function main () {
	$('.menu_bar').click(function(){
		if (contador == 1) {
			$('nav').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				left: '-100%'
			});
		}
	});
 
	// Mostramos y ocultamos submenus
	$('.submenu').click(function(){
		$(this).children('.children-hombre').slideToggle();
		$(this).children('.children-mujer').slideToggle();
		$(this).children('.children-boy').slideToggle();
		$(this).children('.children-deporte').slideToggle();
		$(this).children('.children-escolar').slideToggle();
	});
}
	</script>
</html>