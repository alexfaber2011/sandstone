	<div class="contact-wrapper wrapper footer">
      <div class="container">
	      <div class="row">
	        <div class="col-sm-6">
	        	<h1 class="section-title text-center" style="color:white">Contact</h1>
	            <table class="center-50-50">
	            	<tr>
	            		<td>Address</td>
	            		<td>1815 Easy St.<br />Mineral Point, WI 55555</td>
	            	</tr>
	            	<tr>
	            		<td>Phone</td>
	            		<td>(123) 456-7890</td>
	            	</tr>
	            	<tr>
	            		<td>Email:</td>
	            		<td>bill@sandstonenursery.net</td>
	            	<tr>
	            	<tr>
	            		<td>Hours:</td>
	            		<td>
	            			M-F 8am-5pm<br />
							Sat 10am-4pm<br />
							Sun Closed
	            		</td>
	            	</tr>
	            </table>
	        </div>
	        <div class="col-sm-6">
	        	<h1 class="section-title text-center" style="color:white">Email List Signup</h1>
	        	<p class="text-center">
	        		Sign up for our email list and get special offers sent to you on your birthday!
	        	</p>
	        	<form>
	        		<table class="center-50-50">
	        			<tr>
	        				<td>Email:</td>
	        				<td><input name="email" type="text" /></td>
	        			</tr>
	        			<tr>
	        				<td>Birthday:</td>
	        				<td><input name="birthday" type="text" /><td>
	        			</tr>
	        		</table>
	        		<input style="margin-left: 50%" type="submit" value="Sign Up" />
	        	</form>
	        </div>
      </div>
      <div class="row">
   		<div class="col-xs-12 text-center">
  			<p>&copy; 2014 Badger Innovations</p>
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