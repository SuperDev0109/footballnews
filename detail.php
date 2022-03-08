<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Football</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/detail.css" />
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
			<a href="/"><img src="img/logo.png" /></a>
			<button class="openbtn" onclick="openNav()">☰</button> 
		</div>
		<!-- header end -->

        <div class="newspage_section">
            <div class="container">
                <div class="news_body">
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
                        <!-- <div class="box">
                            <div><img src="img/news1_detail1.png" /></div>
                            <div><img src="img/news1_detail2.png" /></div>
                            <div><img src="img/news1_detail3.png" /></div>
                        </div> -->
                        <!-- <p class="title2">FOOTBALL WORLD CUP </p>
                        <p class="title1">But by and by pap got too handy with his hick’ry, and I couldn’t stand it. I was all over welts. He got to going away 
                            so much, too, and locking me in. Once he locked me in and was gone three days. It was dreadful lonesome. 
                            I judged he had got drownded, and I wasn’t ever going to get out any more. I was scared. 
                            I made up my mind I would fix up some way to leave there.But by and by pap got too handy with his hick’ry, and I couldn’t stand it. 
                            I was all over welts. He got to going away so much, too, and locking me in. Once he locked me in and was gone three days. It was dreadful lonesome. 
                            I judged he had got drownded, and I wasn’t ever going to get out any more. I was scared. 
                            I made up my mind I would fix up some way to leave there.But by and by pap got too handy with his hick’ry, and I couldn’t stand it. I was all over welts. 
                            He got to going away so much, too, and locking me in. Once he locked me in and was gone three days. It was dreadful lonesome. 
                            I judged he had got drownded, and I wasn’t ever going to get out any more. I was scared. </p> -->
                    </div>
                    <div class="panel3"></div>
                    <!-- <div class="panel4">
                        <p class="title1">Leave a Comment</p>
                        <textarea class="customTextarea" rows="10" placeholder="Type..."></textarea>
                        <div class="box">
                            <input type="text" placeholder="Name" />
                            <input type="email" placeholder="Email" />
                        </div>
                        <button>Post Comment</button>
                    </div> -->
                </div>

                <!-- footer -->
                <div class="footer">
                    <div class="left">
                        <span>©2022.footballviral</span>
                    </div>
                    <div class="right">
                        <span>Privacy Policy | </span>
                        <span>Term and conditions | </span>
                        <span>Faqs</span>
                    </div>
                </div>
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
			document.getElementById("mySidepanel").style.width = "250px";
		}

		function closeNav() {
			document.getElementById("mySidepanel").style.width = "0";
		}
	</script>
</body>
</html>