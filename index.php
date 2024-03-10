<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>หน้าแรก</title>
	<link rel="icon" type="image" href="./assets/img/Logo2.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@100..700&family=IBM+Plex+Sans+Thai:wght@100;200;300;400;500;600;700&family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/1e7826ad59.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="index1.css">
</head>

<body>

	<?php
	include("./navbar.php");
	?>

	<!--ปุ่ม-->
	<button onclick="topFunction()" id="myBtn" title="Go to top">&Delta;</button>

	<!--รูปสไลด์-->
	<header>
		<div id="carouselSouth" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="./assets/img/Banner.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="./assets/img/BANNER (1).png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="./assets/img/หมากขุม banner.jpg" class="d-block w-100" alt="...">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselSouth" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselSouth" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</header>

	<section>
		<div class="container">
			<div class="infoPlay">
				<div class="row g-5">
					<div class="head-text col-lg-4 col-md-6">
						<h4>โนราแขก</h4>
						<p>โนราแขกเป็นการละเล่นพื้นเมืองภาคใต้ ลักษณะของโนราแขกเป็นการแสดง ซึ่งมีการขับบทร้อง
							โต้ตอบระหว่างพ่อโนรากับนางโนรา ลำดับการแสดงเริ่มจากดนตรีโหมโรง การว่าบทเทศครู การแต่ง
							ตัวแล้วว่าบทร่ายแตระ การร้องโต้ตอบ</p>
						<a href="./components/Nora Khaek.html">อ่านเพิ่มเติม</a>
						<img src="./assets/img/โนราแขก.jpg" alt="">
					</div>
					<div class="img col-lg-4 col-md-6">
						<img src="./assets/img/Nora2.jpg" alt="">
					</div>
					<div class="img col-lg-4 col-md-12">
						<img src="./assets/img/Nora1.jpg" alt="">
					</div>
				</div>
			</div>

			<div class="infoPlayM">
				<div class="row g-5">
					<div class="img col-lg-4 col-md-3">
						<img src="./assets/img/makkhum1.jpg" alt="">
					</div>
					<div class="img col-lg-4 col-md-3">
						<img src="./assets/img/makkhum.jpg" alt="">
					</div>
					<div class="head-text col-lg-4 col-md-6">
						<h4>หมากขุม</h4>
						<p>เป็นการละเล่นยามว่าง สามารถเล่นได้ทั้งเด็กและผู้ใหญ่ แต่โดยมากจะเป็นผู้หญิงเป็นกีฬาที่ใช้ฝึกสมองคิดคำนวณ
							ฝึกให้ผู้เล่นรู้จักคิดวางแผนในการทำงานทุกอย่างสามารถนำมาประยุกต์ใช้ในชีวิตประจำวัน</p>
						<a href="./components/Makkhum.html">อ่านเพิ่มเติม</a>
						<img src="./assets/img/makkhum2.jpg" alt="">
					</div>
				</div>
			</div>

			<div class="infoPlay">
				<div class="row g-5">
					<div class="head-text col-lg-4 col-md-6">
						<h4>หมากเก็บ</h4>
						<p>เป็นการละเล่นพื้นบ้านที่นิยมในหมู่เด็กผู้หญิง ปกติจะใช้เล่น ๒-๔ คน หรือมากกว่า และใช้ก้อนกรวดกลมๆ ๕ 
							ก้อนเป็นอุปกรณ์การเล่น เล่นในสถานที่มีพื้นเรียบ วิธีการเล่นต้องเสี่ยงทายว่าใครจะได้เล่นก่อน</p>
						<a href="./components/Makkeb.html">อ่านเพิ่มเติม</a>
						<img src="./assets/img/makkeb1.jpg" alt="">
					</div>
					<div class="img col-lg-8 col-md-6">
						<img src="./assets/img/makkeb.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
	include("./footer.php");
	?>

	<script src="upBtn.js"></script>

</body>

</html>