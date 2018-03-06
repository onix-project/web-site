
		<!-- Latest jQuery -->
        <script src="{{url('public/pagina/js/jquery-1.12.4.min.js')}}"></script>
		<!--<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>-->
		<!-- Latest compiled and minified Bootstrap -->
			<script src="{{url('public/pagina/bootstrap/js/bootstrap.min.js')}}"></script>


		<!-- modernizer JS -->		
			<script src="{{url('public/pagina/js/modernizr-2.8.3.min.js')}}"></script>	
		<!-- owl-carousel min js  -->
			<script src="{{url('public/pagina/owlcarousel/js/owl.carousel.min.js')}}"></script>			
		<!-- stellar js -->
			<script src="{{url('public/pagina/js/jquery.stellar.min.js')}}"></script>		
		<!-- MAGNIFICANT JS -->
			<script src="{{url('public/pagina/js/jquery.magnific-popup.min.js')}}"></script>	
		<!-- scrolltopcontrol js -->
			<script src="{{url('public/pagina/js/scrolltopcontrol.js')}}"></script>
		<!-- aos js -->
			<script src="{{url('public/pagina/js/aos.js')}}"></script>			
		<!-- scripts js -->
			<script src="{{url('public/pagina/js/scripts.js')}}"></script>
        <!-- scripts js -->
			<script src="{{asset('public/plugins/wow.min.js')}}"></script>
			<script src="{{url('public/js/acciones.js')}}"></script>
		
			<script type="text/javascript">
				$(function(){
					$("#menu-collapse a").click(function(){
						if($(this).hasClass('collapsed'))
							$("i", this).css('transform', 'rotate(180deg)');
						else
							$("i", this).css('transform', 'rotate(0deg)');
					});
				});
			</script>
			
			@stack('js')