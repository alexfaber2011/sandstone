	<div class="contact-wrapper wrapper">
      <div class="container">
      	<div class="row">
	        <div class="col-sm-12 text-center">
	          <h1 class="section-title" style="color:white">Contact Tom</h1>
	        </div>
	      </div>
	      <div class="row">
	        <div class="col-sm-6">
	            <form role="form" id="contact_form">
				  <div class="form-group">
				    <input type="email" class="form-control" id="emailInput" placeholder="Your email" required>
				  </div>
				  <div class="form-group">
				    <textarea class="form-control" id="messageInput" placeholder="Message" required></textarea>
				  </div>
				 
				  <div class="row">
				  	<div class="col-sm-6 col-sm-offset-3"><button type="submit" id="send" class="btn btn-primary btn-lg btn-block">Send Message</button></div>
		  		  </div>
				</form>
	        </div>

	        <div class="col-sm-6">
	          <p class="defer-requests text-center">At this time, all website requests will be directed to <a href="http://badgerinnovations.com">Badger Innovations</a>.</p>
	          <p class="text-center icons">
	            <a href="http://facebook.com/t.jessessky"><i class="fa fa-facebook-square fa-inverse"></i></a>
	            <a href="http://twitter.com/tomjessessky"><i class="fa fa-twitter-square fa-inverse "></i></a>
	            <a href="http://www.linkedin.com/pub/thomas-jessessky-jr/49/789/178"><i class="fa fa-linkedin-square fa-inverse "></i></a>
	            <a href="https://plus.google.com/114502222984134013474/posts"><i class="fa fa-google-plus-square fa-inverse "></i></a>
	            <a href="http://github.com/tomjessessky"><i class="fa fa-github-square fa-inverse "></i></a>
	          </p>
	        </div>
	      </div>
	      <div class="row">
	      	<div class="col-sm-12 text-center copyright">
	      		&copy<?php echo date('Y'); ?> <a href="http://tomjessessky.com">Tom Jessessky</a>
      		</div>
      	  </div>
      </div>
    </div>		
			
		
		</div> <!-- end  -->
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>


		<script>
		jQuery(document).ready(function ($) {

			var validator = $("#contact_form").validate();

			$("#send").click(function(evt) {
				if ($("#contact_form").valid()) {
					console.log("sending");
					var data = {
						"key": "93rERbKWVKwbMxt0AKgTLA",
						"message": {
			              "html": "<p>From: " + $("#emailInput").val() + "</p><p>Message: " + $("#messageInput").val() + "</p>",
			              "subject": "TomJessessky.com Contact Form Submission",
			              "from_email": "contact@tomjessessky.com",
			              "from_name": "TomJessessky.com",
			              "to": [
			                  {
			                      "email": "tomjessessky@gmail.com",
			                      "name": "Tom Jessessky",
			                      "type": "to"
			                  }
			              ],
			              "headers": {
			                  "Reply-To": $("#emailInput").val()
			              },
			              "important": false,
			              "track_opens": null,
			              "track_clicks": null,
			              "auto_text": null,
			              "auto_html": null,
			              "inline_css": null,
			              "url_strip_qs": null,
			              "preserve_recipients": null,
			              "view_content_link": null,
			              "tracking_domain": null,
			              "signing_domain": null,
			              "return_path_domain": null,
			              "merge": true,
			              "global_merge_vars": [
			                  {
			                      "name": "merge1",
			                      "content": "merge1 content"
			                  }
			              ]	
		              }
		          };

		          $.post("https://mandrillapp.com/api/1.0/messages/send.json", data, function(return_data) {
		          	console.log(return_data);
		          	console.log(return_data[0].status);
		          	if (return_data[0].status == "sent") {
		          		$("#send").removeClass("btn-primary").addClass("btn-success").html("<span class='glyphicon glyphicon-ok'></span> Sent!");
		          		validator.resetForm();
		          	}
		          });
				  evt.preventDefault();
			  }
			});

		});

	  </script>
	</body>

</html>