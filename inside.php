<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>BBC IMD</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- Leave those next 4 lines if you care about users using IE8 -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>


	<ul class="nav">
	  <li class="nav-item">
	    <a class="nav-link active" href="#">&larr; Back to Map</a>
	  </li>
	</ul>

  <div class="container">
		<div class="row">

			<div class="col-lg-6">
				<img src="https://placehold.it/555x325" alt="">
				<h1>The Baggetts</h1>
				<h2 class="subtitle">Missionaries to the US Military</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis inventore ipsum ut molestiae eaque cum, doloribus quos illum a sapiente dicta minus, assumenda, harum amet cupiditate placeat facilis nihil. Labore.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis inventore ipsum ut molestiae eaque cum, doloribus quos illum a sapiente dicta minus, assumenda, harum amet cupiditate placeat facilis nihil. Labore.</p>
			</div>

			<div class="col-lg-6">

				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item active">
					  <a class="nav-link" id="mission-field-tab" data-toggle="tab" href="#mission-field" role="tab" aria-controls="mission-field" aria-selected="true">Mission Field</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
					</li>
				  <li class="nav-item">
				    <a class="nav-link active" id="prayer-letters-tab" data-toggle="tab" href="#prayer-letters" role="tab" aria-controls="prayer-letters" aria-selected="false">Prayer Letters (0)</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="photos-tab" data-toggle="tab" href="#photos" role="tab" aria-controls="photos" aria-selected="false">Photos (0)</a>
				  </li>
				</ul>

				<div class="tab-content" id="myTabContent">
				  
				  <!-- MISSION FIELD -->
				  <div class="tab-pane show active fade in" id="mission-field" role="tabpanel" aria-labelledby="mission-field-tab">
					  <p>This section describes how to install the plugin and get it working. e.g. Upload plugin-directory to the /wp-content/plugins/ directory Activate the plugin through the ‘Plugins’ menu in WordPress Use shortcode in page, post or in widgets. If you want player in your theme php, Place <?php echo do_shortcode('YOUR_SHORTCODE'); ?> in your templates</p>
					  <p>This section describes how to install the plugin and get it working. e.g. Upload plugin-directory to the /wp-content/plugins/ directory Activate the plugin through the ‘Plugins’ menu in WordPress Use shortcode in page, post or in widgets. If you want player in your theme php, Place <?php echo do_shortcode('YOUR_SHORTCODE'); ?> in your templates</p>
					  <p>This section describes how to install the plugin and get it working. e.g. Upload plugin-directory to the /wp-content/plugins/ directory Activate the plugin through the ‘Plugins’ menu in WordPress Use shortcode in page, post or in widgets. If you want player in your theme php, Place <?php echo do_shortcode('YOUR_SHORTCODE'); ?> in your templates</p>
				  </div>
				  
				  <!-- CONTACT -->
				  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">3</div>
				  
				  <!-- PRAYER LETTERS -->
				  <div class="tab-pane fade" id="prayer-letters" role="tabpanel" aria-labelledby="prayer-letters-tab">ONE</div>
				  
				  <!-- PHOTOS -->
				  <div class="tab-pane fade" id="photos" role="tabpanel" aria-labelledby="photos-tab">

				  	<div class="row" id="gallery">
				  	  <div class="col-6 col-md-4">
				  	    <a href="https://placehold.it/750x750" class="pop"><img src="https://placehold.it/150x150"></a>
				  	  </div>
				  	  <div class="col-6 col-md-4">
				  	    <a href="https://placehold.it/750x750" class="pop"><img src="https://placehold.it/150x150"></a>
				  	  </div>
				  	  <div class="col-6 col-md-4">
				  	    <a href="https://placehold.it/750x750" class="pop"><img src="https://placehold.it/150x150"></a>
				  	  </div>
				  	  <div class="col-6 col-md-4">
				  	    <a href="https://placehold.it/750x750" class="pop"><img src="https://placehold.it/150x150"></a>
				  	  </div>
				  	</div>

				  </div>

				</div>

			</div>

		</div>
	</div>




	<!-- Creates the bootstrap modal where the image will appear -->
	<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	      </div>
	      <div class="modal-body" style="text-align: center">
	        <img src="#" id="imagepreview" class="d-block w-100 h-100">
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>




  <!-- Including Bootstrap JS (with its jQuery dependency) so that dynamic components work -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="./assets/js/main.js"></script>

</body>
</html>