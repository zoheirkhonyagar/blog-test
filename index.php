<?php
include 'config.php';
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo getSiteName();?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
<!-- start main -->
		<div class="main">
			<div class="logo">
				<a href="#"><img src="images/logo.png" alt="logo"></a><!-- logo -->
			</div>
			<div class="social">
				<ul>
					<li><a href="#"><img src="images/facebook.png" alt="facebook"></a></li>
					<li><a href="#"><img src="images/twitter.png" alt="twitter"></a></li>
					<li><a href="#"><img src="images/gplus.png" alt="gplus"></a></li>
					<li><a href="#"><img src="images/youtube.png" alt="youtube"></a></li>
				</ul>
			</div>
		</div>
<!-- end main -->
<div class="clearfix"></div>
		<nav>
			<ul class="main">
				<li><a href="#">صفحه اصلی</a></li>
				<li><a href="#">خدمات ما</a></li>
				<li><a href="#">نمونه کارها</a></li>
				<li><a href="#">درباره ما</a></li>
				<li><a href="#">تماس باما</a></li>
			</ul>
		</nav>
	</header>
<!-- start main -->
	<section class="main">
		<aside>
			<div class="sidebar-block">
				<div class="news-letter">
					<h2>عضویت در خبرنامه</h2>
					<form method="post" action="#">
						<input id="nametxt" type="text" placeholder="نام و نام خانوادگی">
						<input id="emailtxt" type="text" placeholder="آدرس ایمیل">
						<button class="register">عضویت در خبرنامه</button>
					</form>
				</div><!-- newsletter -->
			</div>
			<div class="sidebar-block">
				<div class="lastpost-head">
					<h2>آخرین ارسالات سایت</h2>
				</div>
				<div class="lastpost-content">
					<ul>
						<li><a href="#">آخرین ارسالات سایت</a></li>
						<li><a href="#">آخرین ارسالات سایت</a></li>
						<li><a href="#">آخرین ارسالات سایت</a></li>
						<li><a href="#">آخرین ارسالات سایت</a></li>
						<li><a href="#">آخرین ارسالات سایت</a></li>
						<li><a href="#">آخرین ارسالات سایت</a></li>
					</ul>
				</div>
			</div><!-- last-posts -->
		</aside><!-- sidebar -->
		<div class="left-side">
			<div class="post-block">
				<div class="postbox-head">
					<h1>عنوان مطلب</h1>
				</div>
				<div class="postbox-content">
					<img class="post-img" src="images/post-img.png" alt="post-img">
					<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیستری را برای طراحان رایانه ای و فرهنگ پیشرو در زبان فارسی ایجاد کرد.</p>
				</div>
				<div class="postbox-foot">
						<span class="date">تاریخ ارسال : 30 بهمن 1393</span>
						<span class="more"><a href="#">+ ادامه مطلب</a></span>
				</div>
			</div><!-- post-block -->
			<div class="post-block">
				<div class="postbox-head">
					<h1>عنوان مطلب</h1>
				</div>
				<div class="postbox-content">
					<img class="post-img" src="images/post-img.png" alt="post-img">
					<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیستری را برای طراحان رایانه ای و فرهنگ پیشرو در زبان فارسی ایجاد کرد.</p>
				</div>
				<div class="postbox-foot">
					<span class="date">تاریخ ارسال : 30 بهمن 1393</span>
					<span class="more"><a href="#">+ ادامه مطلب</a></span>
				</div>
			</div><!-- post-block -->
		</div><!-- left-side -->
	</section>
	<div class="clearfix"></div>
	<footer>
		<div class="main">
			<div class="right-foot">
				<ul>
					<li><a href="#">صفحه نخست</a></li>
					<li><a href="#">خدمات ما</a></li>
					<li><a href="#">نمونه کار</a></li>
					<li><a href="#">درباره ما</a></li>
					<li><a href="#">تماس با ما</a></li>
				</ul>
				<p class="copyright">
					تمامی حقوق و مطالب سایت برای سون لرن محفوظ می باشد و کپی برداری از آن پیگرد قانونی دارد
				</p>
			</div><!-- right-foot -->
			<img class="designer" src="images/7learn.png" alt="designer">
		</div>
	</footer>
</body>
</html>