
 


  <script type='text/javascript' src='assets/js/jquery.js'></script>
  <script type='text/javascript' src='assets/js/bootstrap.min.js'></script>
</body>
</html>

<!-- for RTL support -->
  
 

<script type="text/javascript">
	$("document").ready(function(){
		$(".before_flip").hover(
			function(){

				$(".flip_overlay").css("display","none");
				if($(this).next().css("display")!="block")
					$(this).next().slideDown("slow");
			},

			function(){				
				if(!$(this).is(':hover'))
				{
					$(this).next().slideUp("slow");
				}	
			}

			);	
	    });

	var body = document.body,
    timer;

	window.addEventListener('scroll', function() {
	  clearTimeout(timer);
	  if(!body.classList.contains('disable-hover')) {
	    body.classList.add('disable-hover')
	  }
	  
	  timer = setTimeout(function(){
	    body.classList.remove('disable-hover')
	  },300);
	}, false)
</script>
