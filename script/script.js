$( document ).ready(function(){
	$('.loader_container').delay (800).fadeOut(300);

			//auto expand textarea
			function adjust_textarea(h) {
			    h.style.height = "20px";
			    h.style.height = (h.scrollHeight)+"px";
			}

	// if ($('#btn1').click()){
	// 	$( "#contenu_creation" ).load( "test.html #eperience", function() {
	// 		alert( "blabla." );
	// 	});
	// }else{
	// 	$( "#contenu_creation" ).load( "test.html #eperience2", function() {
	// 		alert( "ahhhh." );
	// 	});
	// }
	var $btn0 = $("#btn01") ;

	var $btn = $("#btn1") ;

	var $btn2 = $("#btn2") ;

	var $btn3 = $("#btn3") ;

	var $target = $( "#contenu_creation" );

	var anim = function(toload){
		toload.fadeIn("slow", function() {
			alert("nickel");
		});
	};



	
		// $btn .click(function(){
		// 	$target .fadeOut( function(){
		// 		$target .load( "test.html #experience", function() {
		// 	 		alert( "jeudi." );
		// 	 	});
		//  	});
		// });

		$btn0 .click(function(){
			$target.hide( 'slow', function(){
				$target .load( "creation.php #contenu_creation", function() {
			 		$target .show('slow');
			 	});
		 	});
		});

		$btn .click(function(){
			$target.hide( 'slow', function(){
				$target .load( "test.html", function() {
			 		$target .show('slow');
			 	});
		 	});
		});

		$btn2 .click(function(){
			$target .hide( 'slow', function(){
				$target .load( "test2.html", function() {
			 		$target .show('slow');
			 	});
		 	});
		});

		$btn3 .click(function(){
			$target .hide( 'slow', function(){
				$target .load( "test3.html", function() {
			 		$target .show('slow');
			 	});
		 	});
		});



//  map

jQuery(function()
                            {
             jQuery('#map12').maphilight();
                            });


	// /* Lors de l'envois du formulaire */
	// $('form').submit(function(e){
	// 	e.preventDefault(); /* Empeche le navigateur de rediriger l'internaute */
	// });
});
