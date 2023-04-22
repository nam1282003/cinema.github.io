<?php
require_once 'config.php';


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>overview</title>
		<link rel="stylesheet" href="./styles/style.css" />
	</head>
	<body>
	<?php include_once "includes/navbar.php"?>
		<div class="draw-body">
			<?php include_once "includes/sidebar.php"?>
			<div class="content">
				<div class="button-bar-overview">
					<input
						type="text"
						placeholder="Search"
						name="search"
						id="search"
					/>
					<button>Sort By v</button>
					<button>New Screening</button>
				</div>
				<div class="main">
					<div class="box box-overview">
						<div class="left">
							<li>Screening ID:</li>
							<li>Movie:</li>
							<li>Location:</li>
							<li>Hall:</li>
							<li>Date:</li>
							<li>Time:</li>
						</div>
						<div class="right">
							<li>S00001</li>
							<li>M00001 The Batman Movie</li>
							<li>B0001 CFTv KLCC</li>
							<li>H0001 - 1</li>
							<li>3/3/2022</li>
							<li>1.30pm</li>
						</div>
						<div class="overview-btns">
							<button>Status</button>
							<button>Edit</button>
						</div>
					</div>
					<div class="box box-overview">
						<div class="left">
							<li>Screening ID:</li>
							<li>Movie:</li>
							<li>Location:</li>
							<li>Hall:</li>
							<li>Date:</li>
							<li>Time:</li>
						</div>
						<div class="right">
							<li>S00002</li>
							<li>M00002 Uncharted</li>
							<li>B0001 CFTv KLCC</li>
							<li>H0003 - 3</li>
							<li>1/3/2022</li>
							<li>3.45pm</li>
						</div>
						<div class="overview-btns">
							<button>Status</button>
							<button>Edit</button>
						</div>
					</div>
					<div class="box box-overview">
						<div class="left">
							<li>Screening ID:</li>
							<li>Movie:</li>
							<li>Location:</li>
							<li>Hall:</li>
							<li>Date:</li>
							<li>Time:</li>
						</div>
						<div class="right">
							<li>S00003</li>
							<li>M00001 The Batman Movie</li>
							<li>B0002 CFTv Kuching</li>
							<li>H0010 - 2</li>
							<li>1/3/2022</li>
							<li>10.05pm</li>
						</div>
						<div class="overview-btns">
							<button>Status</button>
							<button>Edit</button>
						</div>
					</div>
					<div class="box box-overview">
						<div class="left">
							<li>Screening ID:</li>
							<li>Movie:</li>
							<li>Location:</li>
							<li>Hall:</li>
							<li>Date:</li>
							<li>Time:</li>
						</div>
						<div class="right">
							<li>S00004</li>
							<li>M00003 The Spider Man: No Way Home</li>
							<li>B0003 CFTv Butterworth</li>
							<li>H0021 - 5</li>
							<li>2/3/2022</li>
							<li>1.30pm</li>
						</div>
						<div class="overview-btns">
							<button>Status</button>
							<button>Edit</button>
						</div>
					</div>
					<div class="footer">
						<button>< Previous</button>
						<input placeholder="Insert Page Number" type="text" />
						<button class="next">Next ></button>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
