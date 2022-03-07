<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Football</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/home_page.css" />
</head>
<body class="homepage" style="font-family: monospace;">
    <div class="homepage_section">
		<!-- navMenu start -->
		<div id="mySidepanel" class="sidepanel">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
			<a href="/index.php">Home</a>
			<a href="/news.php">News</a>
		</div>
		<!-- navMenu end -->
		<!-- header start -->
		<div class="homepage_header">
			<img src="img/logo.png" />
			<button class="openbtn" onclick="openNav()">☰</button> 
		</div>
		<!-- header end -->

		<div class="homepage_body">
			<div class="row">
				<div class="col-md-4">
					<div class="exploringNews">
						<div class="box">
							<p class="title1">Loading...</p>
							<p class="title2">Loading...</p>
							<button class="readBtn">Read more -></button>
							<div class="lineBox">
								<p class="line"></p>
							</div>
						</div>
						<div class="box">
							<p class="title1">Loading...</p>
							<p class="title2">Loading...</p>
							<button class="readBtn">Read more -></button>
							<div class="lineBox">
								<p class="line"></p>
							</div>
						</div>
						<div class="box">
							<p class="title1">Loading...</p>
							<p class="title2">Loading...</p>
							<button class="readBtn">Read more -></button>
							<div class="lineBox">
								<p class="line"></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 newsImageBoxPanel">
					<div class="newsImageBox">
						Loading...
					</div>
				</div>
				<div class="col-md-4">
					<div class="popularNews">
						<div class="box">
							<p class="title1">Loading...</p>
							<p class="title2">Loading...</p>
							<button class="readBtn">Read more -></button>
							<div class="lineBox">
								<p class="line"></p>
							</div>
						</div>
						<div class="box">
							<p class="title1">Loading...</p>
							<p class="title2">Loading...</p>
							<button class="readBtn">Read more -></button>
							<div class="lineBox">
								<p class="line"></p>
							</div>
						</div>
						<div class="box">
							<p class="title1">Loading...</p>
							<p class="title2">Loading...</p>
							<button class="readBtn">Read more -></button>
							<div class="lineBox">
								<p class="line"></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	  
	  <!-- Modal -->
	  <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLongTitle">Detail</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
			  <p id="news_src"></p>
			  <p id="news_title"></p>
			  <p id="news_detail"></p>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		  </div>
		</div>
	  </div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="js/homepage.js"></script>
	<script>
		function openNav() {
			document.getElementById("mySidepanel").style.width = "250px";
		}

		function closeNav() {
			document.getElementById("mySidepanel").style.width = "0";
		}
	</script>
</body>
</html>