<!DOCTYPE html>
<html>
<head>
	<title>Course Recommendation</title>
	  	
	  	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    	<link rel="stylesheet" href="main-styles.css">

    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: #4f4f4f">
	
	<div class="container">
		<h5 align="center">Let's start the session, you need to answer couple of questions accurately</h5>
		<div class="message-div">
			<div class="msg-header">
				<p><img src="images/bot.png" class="robot-img"> Counsellor CRS <span class="dot"></span></p>
				<hr>
			</div>

			<div class="msg-main">
				<!-- Dummy values for now -->
				<div class="msg-block">
					<!-- Crs system will generate the new questions instead of suggestions or recommendations using crs-message-response id the generated question will be passed to it -->
					<div class="crs-message-block">
						<p id="response-crs">Hello, what is your name ?</p>
					</div>

					<div class="usr-message-block">
						<p id="response-usr">My name is roy</p>
					</div>
				</div>

				<div class="msg-block">
					<div class="crs-message-block">
						<p id="response-crs">What's your qualification?</p>
					</div>

					<div class="usr-message-block">
						<p id="response-usr">Bca</p>
					</div>
				</div>

				<div class="msg-block">
					<div class="crs-message-block">
						<p id="response-crs">And what subject do you like the most?</p>
					</div>

					<div class="usr-message-block">
						<p id="response-usr">Programming</p>
					</div>
				</div>
			</div>
		</div>
		<div align="center">
		<div class="msg-footer">
			<div class="input-group mb-3" id="css-input-group">
  				<input type="text" class="form-control" placeholder="Type here..." aria-label="Recipient's username" aria-describedby="basic-addon2" style="background-color: #5c5c5c; border-color: #5c5c5c; color: white; height: 60px; outline: none !important" autofocus>
  				<div class="input-group-append">
    				<button class="btn btn-outline-secondary" type="button"><img src="images/send.svg" style="width: 20px; height: 20px;"></button>
  				</div>
			</div>
		</div>
		</div>
	

 
</body>


	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>