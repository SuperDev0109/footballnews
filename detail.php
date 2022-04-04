<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Football</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css" />

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109815160-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-109815160-1');
    </script>
</head>
<body class="homepage" style="font-family: monospace;">
    <div class="homepage_section">
		<!-- navMenu start -->
		<div id="mySidepanel" class="sidepanel">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
			<a href="/index.php">Home</a>
			<a href="/news.php">News</a>
			<a href="/privacy.php">Privacy Policy</a>
			<a href="/terms.php">Terms and Conditions</a>
		</div>
		<!-- navMenu end -->
		<!-- header start -->
		<div class="homepage_header">
			<a href="/"><img src="img/logo.png" /></a> 
			<button class="openbtn" onclick="openNav()">☰</button> 
		</div>
		<!-- header end -->

        <div class="newspage_section">
            <div class="container">
                <div class="news_body_detail">
                    <div class="panel1">
                        <p class="title1"><?= str_replace(array('T', 'Z'), array(' ', ' '), $_GET['publishDate']) ?></p>
                        <p class="title2">FOOTBALL EURO SPORT <br />
                            CUP </p>
                    </div>
                    <div class="panel2">
                        <p class="title1">Loading...</p>
						<p class="title_detail">Loading...</p>
						<div class="imgBox"><img src=<?= $_GET['imgUrl'] ?> /></div>
						<p class="title_alt">Loading...</p>
                    </div>
                    <div class="panel3"></div>
                </div>

                <!-- footer -->
                <?php include('./footer.php'); ?>
                <!-- footer end -->
            </div>
        </div>
	</div>

	<input type="text" hidden value=<?= $_GET['story'] ?> id="storyValue" />
    <input type="text" hidden value=<?= $_GET['imgUrl'] ?> id="imgUrl" />
    <input type="text" hidden value=<?= $_GET['publicationTime'] ?> id="publicationTime" />

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="js/detail.js"></script>
	<script>
		function openNav() {
			document.getElementById("mySidepanel").style.width = "400px";
		}

		function closeNav() {
			document.getElementById("mySidepanel").style.width = "0";
		}
	</script>
</body>
</html>