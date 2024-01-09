<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:title" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:image" content="https://w3crm.dexignzone.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- PAGE TITLE HERE -->
	<title>NEW SYSTEN</title>
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">

	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css">
	<link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="vendor/jvmap/jquery-jvectormap.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
	<link href="vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

	<!-- font-awesome icon cdn -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<!-- tagify-css -->
	<link href="vendor/tagify/dist/tagify.css" rel="stylesheet">

	<!-- easy-autocomplete css link -->
	<link href="https://cdn.jsdelivr.net/npm/easy-autocomplete@1.3.5/dist/easy-autocomplete.min.css" rel="stylesheet">

	<!-- Style css -->
	<link href="css/style.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">

</head>

<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="black" data-headerbg="color_1">

	<!--*******************
        Preloader start
    ********************-->
	<div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
	</div>
	<!--*******************
        Preloader end
    ********************-->

	<!--**********************************
        Main wrapper start
    ***********************************-->
	<div id="main-wrapper">
		<!--**********************************
            Nav header start
        ***********************************-->
		<div class="nav-header">
			<a href="index.php" class="brand-logo">
				<svg class="logo-abbr" width="39" height="23" viewBox="0 0 39 23" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path class="w3" d="M32.0362 22H19.0466L20.7071 18.7372C20.9559 18.2484 21.455 17.9378 22.0034 17.9305L31.1036 17.8093C33.0753 17.6497 33.6571 15.9246 33.7015 15.0821C33.7015 13.2196 32.1916 12.5765 31.4367 12.4878H23.7095L25.9744 8.49673H30.4375C31.8763 8.3903 32.236 7.03332 32.236 6.36814C32.3426 4.93133 30.9482 4.61648 30.2376 4.63865H28.6955C28.2646 4.63865 27.9788 4.19212 28.1592 3.8008L29.7047 0.44798C31.0903 0.394765 32.8577 0.780573 33.5683 0.980129C38.6309 3.42801 37.0988 7.98676 35.6999 9.96014C38.1513 11.9291 38.4976 14.3282 38.3644 15.2816C38.098 20.1774 34.0346 21.8005 32.0362 22Z" fill="var(--primary)" />
					<path class="react-w" d="M9.89261 21.4094L0 2.80536H4.86354C5.41354 2.80536 5.91795 3.11106 6.17246 3.59864L12.4032 15.5355C12.6333 15.9762 12.6261 16.5031 12.3842 16.9374L9.89261 21.4094Z" fill="white" />
					<path class="react-w" d="M17.5705 21.4094L7.67786 2.80536H12.5372C13.0894 2.80536 13.5954 3.11351 13.8489 3.60412L20.302 16.0939L17.5705 21.4094Z" fill="white" />
					<path class="react-w" d="M17.6443 21.4094L28.2751 0H23.4513C22.8806 0 22.361 0.328884 22.1168 0.844686L14.8271 16.2416L17.6443 21.4094Z" fill="white" />
					<path class="react-w" d="M9.89261 21.4094L0 2.80536H4.86354C5.41354 2.80536 5.91795 3.11106 6.17246 3.59864L12.4032 15.5355C12.6333 15.9762 12.6261 16.5031 12.3842 16.9374L9.89261 21.4094Z" stroke="white" />
					<path class="react-w" d="M17.5705 21.4094L7.67786 2.80536H12.5372C13.0894 2.80536 13.5954 3.11351 13.8489 3.60412L20.302 16.0939L17.5705 21.4094Z" stroke="white" />
					<path class="react-w" d="M17.6443 21.4094L28.2751 0H23.4513C22.8806 0 22.361 0.328884 22.1168 0.844686L14.8271 16.2416L17.6443 21.4094Z" stroke="white" />
				</svg>
				<svg class="brand-title" width="47" height="16" viewBox="0 0 47 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M8.36 15.2C7.2933 15.2 6.3 15.0267 5.38 14.68C4.4733 14.32 3.68 13.82 3 13.18C2.3333 12.5267 1.8133 11.76 1.44 10.88C1.0667 9.99999 0.880005 9.03999 0.880005 7.99999C0.880005 6.95999 1.0667 5.99999 1.44 5.11999C1.8133 4.23999 2.34 3.47999 3.02 2.83999C3.7 2.18666 4.49331 1.68666 5.40001 1.33999C6.30671 0.979988 7.3 0.799988 8.38 0.799988C9.5267 0.799988 10.5733 0.999988 11.52 1.39999C12.4667 1.78666 13.2667 2.36666 13.92 3.13999L12.24 4.71999C11.7333 4.17332 11.1667 3.76666 10.54 3.49999C9.9133 3.21999 9.2333 3.07999 8.5 3.07999C7.7667 3.07999 7.0933 3.19999 6.48 3.43999C5.88 3.67999 5.35331 4.01999 4.90001 4.45999C4.46001 4.89999 4.1133 5.41999 3.86 6.01999C3.62 6.61999 3.5 7.27999 3.5 7.99999C3.5 8.71999 3.62 9.37999 3.86 9.97999C4.1133 10.58 4.46001 11.1 4.90001 11.54C5.35331 11.98 5.88 12.32 6.48 12.56C7.0933 12.8 7.7667 12.92 8.5 12.92C9.2333 12.92 9.9133 12.7867 10.54 12.52C11.1667 12.24 11.7333 11.82 12.24 11.26L13.92 12.86C13.2667 13.62 12.4667 14.2 11.52 14.6C10.5733 15 9.52 15.2 8.36 15.2ZM16.4113 15V0.999988H22.1713C23.4113 0.999988 24.4713 1.19999 25.3513 1.59999C26.2446 1.99999 26.9313 2.57332 27.4113 3.31999C27.8913 4.06666 28.1313 4.95332 28.1313 5.97999C28.1313 7.00669 27.8913 7.89329 27.4113 8.63999C26.9313 9.37329 26.2446 9.93999 25.3513 10.34C24.4713 10.7267 23.4113 10.92 22.1713 10.92H17.8513L19.0113 9.73999V15H16.4113ZM25.5713 15L22.0313 9.91999H24.8112L28.3713 15H25.5713ZM19.0113 10.02L17.8513 8.77999H22.0513C23.1979 8.77999 24.0579 8.53329 24.6312 8.03999C25.2179 7.54669 25.5113 6.85999 25.5113 5.97999C25.5113 5.08666 25.2179 4.39999 24.6312 3.91999C24.0579 3.43999 23.1979 3.19999 22.0513 3.19999H17.8513L19.0113 1.91999V10.02ZM31.0402 15V0.999988H33.1802L39.3002 11.22H38.1802L44.2002 0.999988H46.3402L46.3602 15H43.9002L43.8802 4.85999H44.4002L39.2802 13.4H38.1202L32.9202 4.85999H33.5202V15H31.0402Z" fill="black" />
				</svg>
			</a>
			<div class="nav-control">
				<div class="hamburger">
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
				</div>
			</div>
		</div>
		<!--**********************************
            Nav header end
        ***********************************-->



		<!--**********************************
            Header start
        ***********************************-->
		<div class="header">
			<div class="header-content">
				<nav class="navbar navbar-expand">
					<div class="collapse navbar-collapse justify-content-between">
						<div class="header-left">
							<form>
								<div class="input-group search-area">
									<span class="input-group-text"><button class="bg-transparent border-0">
											<svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="8.78605" cy="8.78605" r="8.23951" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M14.5168 14.9447L17.7471 18.1667" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
											</svg>
										</button></span>
									<input type="text" class="form-control" placeholder="Search">
								</div>
							</form>
						</div>
						<ul class="navbar-nav header-right">
							<li class="nav-item dropdown notification_dropdown">
								<a class="nav-link " href="javascript:void(0);" data-bs-toggle="dropdown">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M20.8067 7.62358L20.1842 6.54349C19.6577 5.62957 18.4907 5.31429 17.5755 5.83869V5.83869C17.1399 6.09531 16.6201 6.16812 16.1307 6.04106C15.6413 5.91399 15.2226 5.59749 14.9668 5.16134C14.8023 4.88412 14.7139 4.56836 14.7105 4.24601V4.24601C14.7254 3.72919 14.5304 3.22837 14.17 2.85764C13.8096 2.48691 13.3145 2.27783 12.7975 2.27805H11.5435C11.037 2.27804 10.5513 2.47988 10.194 2.83891C9.83669 3.19795 9.63717 3.68456 9.63961 4.19109V4.19109C9.6246 5.23689 8.77248 6.07678 7.72657 6.07667C7.40421 6.07332 7.08846 5.98491 6.81123 5.82038V5.82038C5.89606 5.29598 4.72911 5.61126 4.20254 6.52519L3.53435 7.62358C3.00841 8.53636 3.3194 9.70258 4.23 10.2323V10.2323C4.8219 10.574 5.18653 11.2056 5.18653 11.889C5.18653 12.5725 4.8219 13.204 4.23 13.5458V13.5458C3.32056 14.0719 3.00923 15.2353 3.53435 16.1453V16.1453L4.16593 17.2346C4.41265 17.6798 4.8266 18.0083 5.31619 18.1474C5.80578 18.2866 6.33064 18.2249 6.77462 17.976V17.976C7.21108 17.7213 7.73119 17.6515 8.21934 17.7822C8.70749 17.9128 9.12324 18.233 9.37416 18.6716C9.5387 18.9489 9.62711 19.2646 9.63046 19.587V19.587C9.63046 20.6435 10.487 21.5 11.5435 21.5H12.7975C13.8505 21.5 14.7055 20.6491 14.7105 19.5961V19.5961C14.7081 19.088 14.9089 18.6 15.2682 18.2407C15.6275 17.8814 16.1155 17.6806 16.6236 17.6831C16.9452 17.6917 17.2596 17.7797 17.5389 17.9394V17.9394C18.4517 18.4653 19.6179 18.1543 20.1476 17.2437V17.2437L20.8067 16.1453C21.0618 15.7075 21.1318 15.186 21.0012 14.6963C20.8706 14.2067 20.5502 13.7893 20.111 13.5366V13.5366C19.6718 13.2839 19.3514 12.8665 19.2208 12.3769C19.0902 11.8873 19.1603 11.3658 19.4154 10.9279C19.5812 10.6383 19.8214 10.3982 20.111 10.2323V10.2323C21.0161 9.70286 21.3264 8.54346 20.8067 7.63274V7.63274V7.62358Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
										<circle cx="12.1751" cy="11.889" r="2.63616" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
									</svg>

								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<div id="DZ_W_TimeLine02" class="widget-timeline dz-scroll style-1 p-3 height370">
										<ul class="timeline">
											<li>
												<div class="timeline-badge primary"></div>
												<a class="timeline-panel text-muted" href="javascript:void(0);">
													<span>10 minutes ago</span>
													<h6 class="mb-0">Youtube, a video-sharing website, goes live <strong class="text-primary">$500</strong>.</h6>
												</a>
											</li>
											<li>
												<div class="timeline-badge info">
												</div>
												<a class="timeline-panel text-muted" href="javascript:void(0);">
													<span>20 minutes ago</span>
													<h6 class="mb-0">New order placed <strong class="text-info">#XF-2356.</strong></h6>
													<p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...</p>
												</a>
											</li>
											<li>
												<div class="timeline-badge danger">
												</div>
												<a class="timeline-panel text-muted" href="javascript:void(0);">
													<span>30 minutes ago</span>
													<h6 class="mb-0">john just buy your product <strong class="text-warning">Sell $250</strong></h6>
												</a>
											</li>
											<li>
												<div class="timeline-badge success">
												</div>
												<a class="timeline-panel text-muted" href="javascript:void(0);">
													<span>15 minutes ago</span>
													<h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
												</a>
											</li>
											<li>
												<div class="timeline-badge warning">
												</div>
												<a class="timeline-panel text-muted" href="javascript:void(0);">
													<span>20 minutes ago</span>
													<h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
												</a>
											</li>
											<li>
												<div class="timeline-badge dark">
												</div>
												<a class="timeline-panel text-muted" href="javascript:void(0);">
													<span>20 minutes ago</span>
													<h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</li>
							<li class="nav-item dropdown notification_dropdown">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M18 8C18 6.4087 17.3679 4.88258 16.2426 3.75736C15.1174 2.63214 13.5913 2 12 2C10.4087 2 8.88258 2.63214 7.75736 3.75736C6.63214 4.88258 6 6.4087 6 8C6 15 3 17 3 17H21C21 17 18 15 18 8Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
										<path d="M13.73 21C13.5542 21.3031 13.3019 21.5547 12.9982 21.7295C12.6946 21.9044 12.3504 21.9965 12 21.9965C11.6496 21.9965 11.3054 21.9044 11.0018 21.7295C10.6982 21.5547 10.4458 21.3031 10.27 21" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<div id="DZ_W_Notification1" class="widget-media dz-scroll p-3" style="height:380px;">
										<ul class="timeline">
											<li>
												<div class="timeline-panel">
													<div class="media me-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-info">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-success">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-danger">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-primary">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-info">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-success">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-danger">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-primary">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<a class="all-notification" href="javascript:void(0);">See all notifications <i class="ti-arrow-end"></i></a>
								</div>
							</li>

							<li class="nav-item dropdown notification_dropdown">
								<a class="nav-link bell dz-fullscreen" href="javascript:void(0);">
									<svg id="icon-full" viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
										<path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path>
									</svg>
									<svg id="icon-minimize" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="A098AE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minimize">
										<path d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path>
									</svg>
								</a>
							</li>
							<li class="nav-item ps-3">
								<div class="dropdown header-profile2">
									<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										<div class="header-info2 d-flex align-items-center">
											<div class="header-media">
												<img src="images/tab/1.jpg" alt="">
											</div>
											<div class="header-info">
												<h6>Thomas Fleming</h6>
												<p>info@gmail.com</p>
											</div>

										</div>
									</a>
									<div class="dropdown-menu dropdown-menu-end" style="">
										<div class="card border-0 mb-0">
											<div class="card-header py-2">
												<div class="products">
													<img src="images/tab/1.jpg" class="avatar avatar-md" alt="">
													<div>
														<h6>Thomas Fleming</h6>
														<span>Web Designer</span>
													</div>
												</div>
											</div>
											<div class="card-body px-0 py-2">
												<a href="app-profile.html" class="dropdown-item ai-icon ">
													<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" clip-rule="evenodd" d="M11.9848 15.3462C8.11714 15.3462 4.81429 15.931 4.81429 18.2729C4.81429 20.6148 8.09619 21.2205 11.9848 21.2205C15.8524 21.2205 19.1543 20.6348 19.1543 18.2938C19.1543 15.9529 15.8733 15.3462 11.9848 15.3462Z" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
														<path fill-rule="evenodd" clip-rule="evenodd" d="M11.9848 12.0059C14.5229 12.0059 16.58 9.94779 16.58 7.40969C16.58 4.8716 14.5229 2.81445 11.9848 2.81445C9.44667 2.81445 7.38857 4.8716 7.38857 7.40969C7.38 9.93922 9.42381 11.9973 11.9524 12.0059H11.9848Z" stroke="var(--primary)" stroke-width="1.42857" stroke-linecap="round" stroke-linejoin="round" />
													</svg>

													<span class="ms-2">Profile </span>
												</a>
												<a href="app-profile.html" class="dropdown-item ai-icon ">
													<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart">
														<path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
														<path d="M22 12A10 10 0 0 0 12 2v10z"></path>
													</svg>

													<span class="ms-2">My Project</span><span class="badge badge-sm badge-secondary light rounded-circle text-white ms-2">4</span>
												</a>
												<a href="javascript:void(0);" class="dropdown-item ai-icon ">
													<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M17.9026 8.85114L13.4593 12.4642C12.6198 13.1302 11.4387 13.1302 10.5992 12.4642L6.11844 8.85114" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
														<path fill-rule="evenodd" clip-rule="evenodd" d="M16.9089 21C19.9502 21.0084 22 18.5095 22 15.4384V8.57001C22 5.49883 19.9502 3 16.9089 3H7.09114C4.04979 3 2 5.49883 2 8.57001V15.4384C2 18.5095 4.04979 21.0084 7.09114 21H16.9089Z" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
													</svg>

													<span class="ms-2">Message </span>
												</a>
												<a href="email-inbox.html" class="dropdown-item ai-icon ">
													<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" clip-rule="evenodd" d="M12 17.8476C17.6392 17.8476 20.2481 17.1242 20.5 14.2205C20.5 11.3188 18.6812 11.5054 18.6812 7.94511C18.6812 5.16414 16.0452 2 12 2C7.95477 2 5.31885 5.16414 5.31885 7.94511C5.31885 11.5054 3.5 11.3188 3.5 14.2205C3.75295 17.1352 6.36177 17.8476 12 17.8476Z" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
														<path d="M14.3888 20.8572C13.0247 22.372 10.8967 22.3899 9.51947 20.8572" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
													</svg>

													<span class="ms-2">Notification </span>
												</a>
											</div>
											<div class="card-footer px-0 py-2">
												<a href="javascript:void(0);" class="dropdown-item ai-icon ">
													<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" clip-rule="evenodd" d="M20.8066 7.62355L20.1842 6.54346C19.6576 5.62954 18.4907 5.31426 17.5755 5.83866V5.83866C17.1399 6.09528 16.6201 6.16809 16.1307 6.04103C15.6413 5.91396 15.2226 5.59746 14.9668 5.16131C14.8023 4.88409 14.7139 4.56833 14.7105 4.24598V4.24598C14.7254 3.72916 14.5304 3.22834 14.17 2.85761C13.8096 2.48688 13.3145 2.2778 12.7975 2.27802H11.5435C11.0369 2.27801 10.5513 2.47985 10.194 2.83888C9.83666 3.19791 9.63714 3.68453 9.63958 4.19106V4.19106C9.62457 5.23686 8.77245 6.07675 7.72654 6.07664C7.40418 6.07329 7.08843 5.98488 6.8112 5.82035V5.82035C5.89603 5.29595 4.72908 5.61123 4.20251 6.52516L3.53432 7.62355C3.00838 8.53633 3.31937 9.70255 4.22997 10.2322V10.2322C4.82187 10.574 5.1865 11.2055 5.1865 11.889C5.1865 12.5725 4.82187 13.204 4.22997 13.5457V13.5457C3.32053 14.0719 3.0092 15.2353 3.53432 16.1453V16.1453L4.16589 17.2345C4.41262 17.6797 4.82657 18.0082 5.31616 18.1474C5.80575 18.2865 6.33061 18.2248 6.77459 17.976V17.976C7.21105 17.7213 7.73116 17.6515 8.21931 17.7821C8.70746 17.9128 9.12321 18.233 9.37413 18.6716C9.53867 18.9488 9.62708 19.2646 9.63043 19.5869V19.5869C9.63043 20.6435 10.4869 21.5 11.5435 21.5H12.7975C13.8505 21.5 14.7055 20.6491 14.7105 19.5961V19.5961C14.7081 19.088 14.9088 18.6 15.2681 18.2407C15.6274 17.8814 16.1154 17.6806 16.6236 17.6831C16.9451 17.6917 17.2596 17.7797 17.5389 17.9393V17.9393C18.4517 18.4653 19.6179 18.1543 20.1476 17.2437V17.2437L20.8066 16.1453C21.0617 15.7074 21.1317 15.1859 21.0012 14.6963C20.8706 14.2067 20.5502 13.7893 20.111 13.5366V13.5366C19.6717 13.2839 19.3514 12.8665 19.2208 12.3769C19.0902 11.8872 19.1602 11.3658 19.4153 10.9279C19.5812 10.6383 19.8213 10.3981 20.111 10.2322V10.2322C21.0161 9.70283 21.3264 8.54343 20.8066 7.63271V7.63271V7.62355Z" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
														<circle cx="12.175" cy="11.889" r="2.63616" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
													</svg>

													<span class="ms-2">Settings </span>
												</a>
												<a href="page-login.html" class="dropdown-item ai-icon">
													<svg class="profle-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ff7979" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
														<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
														<polyline points="16 17 21 12 16 7"></polyline>
														<line x1="21" y1="12" x2="9" y2="12"></line>
													</svg>
													<span class="ms-2 text-danger">Logout </span>
												</a>
											</div>
										</div>

									</div>
								</div>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
		<!--**********************************
            Header end ti-comment-alt
        ***********************************-->

		<!--**********************************
            Sidebar start
        ***********************************-->
		<div class="deznav">
			<div class="deznav-scroll">
				<ul class="metismenu" id="menu">
					<li class="menu-title">MRM</li>

					<li><a href="#" class="" aria-expanded="false">
							<div class="menu-icon">
								<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M6.64111 13.5497L9.38482 9.9837L12.5145 12.4421L15.1995 8.97684" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
									<ellipse cx="18.3291" cy="3.85021" rx="1.76201" ry="1.76201" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M13.6808 2.86012H7.01867C4.25818 2.86012 2.54651 4.81512 2.54651 7.57561V14.9845C2.54651 17.7449 4.22462 19.6915 7.01867 19.6915H14.9058C17.6663 19.6915 19.3779 17.7449 19.3779 14.9845V8.53213" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</div>
							<span class="nav-text">Point of Sale</span>
						</a>
					</li>

				</ul>

			</div>
		</div>
		<!--**********************************
            Sidebar end
        ***********************************-->

		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body">
			<!-- row -->
			<div class="page-titles">
				<ol class="breadcrumb">
					<li>
						<h5 class="bc-title">Dashboard</h5>
					</li>
					<li class="breadcrumb-item"><a href="javascript:void(0)">
							<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
							Home </a>
					</li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
				</ol>

			</div>
			<div class="container-fluid" id="DashboardRoot">

				<div class="row">
					<!-- dashboard root header wrapper start -->
					<div class="col-lg-4">
						<!-- account and warehouse changing select option wrapper -->
						<div class="account-warehouse--wrapper row">
							<div class="col-md-6">
								<div class="input-group mb-2 mb-lg-0">
									<span class="input-group-text"><i class="fa-solid fa-user"></i></span>
									<input class="form-control" type="text" id="userAccount">
									<input type="hidden" id="userId">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group mb-2 mb-lg-0">
									<span class="input-group-text"><i class="fa-solid fa-warehouse"></i></span>
									<select class="form-select" name="warehouse" id="warehouse">
										<option value="4">Ware House 4</option>
										<option value="3">Ware House 3</option>
										<option value="2">Ware House 2</option>
									</select>
								</div>
							</div>
						</div>
						<!-- account and warehouse changing select option wrapper end-->

					</div>

					<div class="col-lg-8">
						<!-- search bar wrapper  -->
						<div class="row">
							<div class="col-lg-10">
								<!-- search code -->
								<div class="product_search_bar position-relative mb-2 mb-lg-0">
									<i class="fa-solid position-absolute fa-magnifying-glass"></i>
									<input type="search" placeholder="Search Product By Code Name" class="form-control ps-5">
								</div>
							</div>

							<div class="col-lg-2">
								<!-- right icons after search -->
								<div class="header_icon">
									<button class="pe-2">
										<i class="fa-solid fa-expand"></i>
									</button>
									<button>
										<i class="fa-solid fa-gauge"></i>
									</button>

								</div>
							</div>
						</div>
						<!-- search bar wrapper end -->
					</div>
					<!-- dashboard root header wrapper end -->

					<!-- left side content and product table checkout wrapper -->
					<div class="col-lg-4">
						<div class="table_checkout_wrapper">

							<!-- customer information and cart option wrapper -->
							<!-- customer information wrapper  -->
							<div class="customer_inform_wrapper mt-4">
								<div class="row">
									<!-- RFC record here -->
									<div class="col-lg-6">
										<p>RFC: <b>XAXX0101000000</b></p>
									</div>
									<!-- Client name here -->
									<div class="col-lg-6">
										<p>NAME: <b>JOSE MARTINEZ</b></p>
									</div>
									<!-- Client Id here -->
									<div class="col-lg-6">
										<p>ID CLIENT: <b>60</b></p>
									</div>
									<!-- Client Address here -->
									<div class="col-lg-6">
										<p>Address: <b>NEGRETE 34 z centro</b></p>
									</div>
									<!-- Client City here -->
									<div class="col-lg-6">
										<p>City: <b>Romita, Guanajuato</b></p>
									</div>
									<!-- Client Phone  here -->
									<div class="col-lg-6">
										<p class="mb-0">Tel: <b>4737312252</b></p>
									</div>
									<!-- Client Type  here -->
									<div class="col-lg-12">
										<p class="mb-0">Customer Type: <b>PUBLICO/MARLENE</b></p>
									</div>
								</div>
							</div>
							<!-- customer information wrapper end -->

							<!-- customer information and cart option wrapper end -->
							<!-- checkout page wrapper start -->
							<div class="checkout_total_wrapper bg-white p-4 mt-3">
								<div class="row">
									<div class="col-lg-6">
										<div class="check_box_wrapper d-flex align-items-center justify-content-between">
											<p>Tax</p>
											<p>%</p>
										</div>
										<div class="check_box_wrapper d-flex align-items-center justify-content-between">
											<p>Discount</p>
											<p>$</p>
										</div>
										<div class="check_box_wrapper d-flex align-items-center justify-content-between">
											<p>Shopping</p>
											<p>$</p>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="total_amount_wrapper text-end position-relative">
											<h5>Total Qty: 15</h5>
											<h5>Sub Total: $1500</h5>
											<h3>Total: $1500</h3>
										</div>
									</div>
									<div class="col-lg-6">
										<button class="btn btn-danger mb-2 mb-lg-0 py-2 w-100">Reset <i class="fa-solid fa-rotate-left"></i></button>
									</div>
									<div class="col-lg-6">
										<button class="btn btn-success w-100 py-2">Pay Now <i class="fa-solid fa-money-bill"></i></button>
									</div>
								</div>

							</div>
							<!-- checkout page wrapper end -->


							<!-- cart products table wrapper -->
							<!-- cart table start -->
							<div class="product_cart_table_wrapper mt-4">
								<table class="table">
									<thead>
										<tr>
											<th>PRODUCT</th>
											<th>QTY</th>
											<th>PRICE</th>
											<th>SUB-TOTAL</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="product_name">
													<p>Jacket</p>
													<div class="product_cat">
														<span>Jacket</span>
														<i class="fa-solid fa-pencil"></i>
													</div>
												</div>
											</td>
											<td>
												<div class="qty_wrapper d-flex align-items-center justify-content-between">
													<button class="btn btn-sm"> - </button>
													<input type="number" class="form-controls text-center w-25 border-0 py-1" value="1" readonly>
													<button class="btn btn-sm"> + </button>
												</div>
											</td>
											<td>$300</td>
											<td>
												<div class="sub_qty_wrapper d-flex align-items-center justify-content-between">
													<p>$300</p>
													<button class="btn btn-sm"><i class="fa-solid fa-trash"></i></button>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="product_name">
													<p>Jacket</p>
													<div class="product_cat">
														<span>Jacket</span>
														<i class="fa-solid fa-pencil"></i>
													</div>
												</div>
											</td>
											<td>
												<div class="qty_wrapper d-flex align-items-center justify-content-between">
													<button class="btn btn-sm"> - </button>
													<input type="number" class="form-controls text-center w-25 border-0 py-1" value="1" readonly>
													<button class="btn btn-sm"> + </button>
												</div>
											</td>
											<td>$300</td>
											<td>
												<div class="sub_qty_wrapper d-flex align-items-center justify-content-between">
													<p>$300</p>
													<button class="btn btn-sm"><i class="fa-solid fa-trash"></i></button>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="product_name">
													<p>Jacket</p>
													<div class="product_cat">
														<span>Jacket</span>
														<i class="fa-solid fa-pencil"></i>
													</div>
												</div>
											</td>
											<td>
												<div class="qty_wrapper d-flex align-items-center justify-content-between">
													<button class="btn btn-sm"> - </button>
													<input type="number" class="form-controls text-center w-25 border-0 py-1" value="1" readonly>
													<button class="btn btn-sm"> + </button>
												</div>
											</td>
											<td>$300</td>
											<td>
												<div class="sub_qty_wrapper d-flex align-items-center justify-content-between">
													<p>$300</p>
													<button class="btn btn-sm"><i class="fa-solid fa-trash"></i></button>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="product_name">
													<p>Jacket</p>
													<div class="product_cat">
														<span>Jacket</span>
														<i class="fa-solid fa-pencil"></i>
													</div>
												</div>
											</td>
											<td>
												<div class="qty_wrapper d-flex align-items-center justify-content-between">
													<button class="btn btn-sm"> - </button>
													<input type="number" class="form-controls text-center w-25 border-0 py-1" value="1" readonly>
													<button class="btn btn-sm"> + </button>
												</div>
											</td>
											<td>$300</td>
											<td>
												<div class="sub_qty_wrapper d-flex align-items-center justify-content-between">
													<p>$300</p>
													<button class="btn btn-sm"><i class="fa-solid fa-trash"></i></button>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="product_name">
													<p>Jacket</p>
													<div class="product_cat">
														<span>Jacket</span>
														<i class="fa-solid fa-pencil"></i>
													</div>
												</div>
											</td>
											<td>
												<div class="qty_wrapper d-flex align-items-center justify-content-between">
													<button class="btn btn-sm"> - </button>
													<input type="number" class="form-controls text-center w-25 border-0 py-1" value="1" readonly>
													<button class="btn btn-sm"> + </button>
												</div>
											</td>
											<td>$300</td>
											<td>
												<div class="sub_qty_wrapper d-flex align-items-center justify-content-between">
													<p>$300</p>
													<button class="btn btn-sm"><i class="fa-solid fa-trash"></i></button>
												</div>
											</td>
										</tr>
									</tbody>

								</table>
							</div>
							<!-- cart table end -->
							<!-- cart products table wrapper end -->

						</div>
					</div>

					<!-- right side content and product list wrapper -->
					<div class="col-lg-8">
						<div class="product_list_wrapper bg-white mt-4 p-4">
							<div class="list_Wrapper category-list">
								<ul>
									<li class="active"><a href="#">All Category</a></li>
									<li><a href="#">Fruit</a></li>
									<li><a href="#">Hoodie</a></li>
									<li><a href="#">Jacket</a></li>
									<li><a href="#">T-shirt</a></li>
									<li><a href="#">Shirt</a></li>
									<li><a href="#">Shoes</a></li>
									<li><a href="#">Fruit</a></li>
									<li><a href="#">Hoodie</a></li>
									<li><a href="#">Jacket</a></li>
									<li><a href="#">T-shirt</a></li>
									<li><a href="#">Shirt</a></li>
									<li><a href="#">Shoes</a></li>
								</ul>
							</div>
							<div class="list_Wrapper brand-list mt-3">
								<ul>
									<li class="active"><a href="#">All Brand</a></li>
									<li><a href="#">Fruit</a></li>
									<li><a href="#">Hoodie</a></li>
									<li><a href="#">Jacket</a></li>
									<li><a href="#">T-shirt</a></li>
									<li><a href="#">Shirt</a></li>
									<li><a href="#">Shoes</a></li>
									<li><a href="#">Fruit</a></li>
									<li><a href="#">Hoodie</a></li>
									<li><a href="#">Jacket</a></li>
									<li><a href="#">T-shirt</a></li>
									<li><a href="#">Shirt</a></li>
									<li><a href="#">Shoes</a></li>
								</ul>
							</div>
							<div class="product_wrapper mt-5">
								<div class="row">
									<div class="col-lg-2 col-md-4 col-sm-6">
										<div class="product_item_wrapper">
											<div class="product_price_wrapper d-flex align-items-center justify-content-between">
												<span>$120</span>
												<span>2pc</span>
											</div>
											<div class="product_img text-center">
												<img src="images/product/product1.webp" alt="Product Image" />
											</div>
											<div class="product_desc ms-2 mt-2">
												<h6 class="mb-0">T-Shirt</h6>
												<p class="mb-0">TSHIRT</p>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-4 col-sm-6">
										<div class="product_item_wrapper">
											<div class="product_price_wrapper d-flex align-items-center justify-content-between">
												<span>$120</span>
												<span>2pc</span>
											</div>
											<div class="product_img text-center">
												<img src="images/product/product1.webp" alt="Product Image" />
											</div>
											<div class="product_desc ms-2 mt-2">
												<h6 class="mb-0">T-Shirt</h6>
												<p class="mb-0">TSHIRT</p>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-4 col-sm-6">
										<div class="product_item_wrapper">
											<div class="product_price_wrapper d-flex align-items-center justify-content-between">
												<span>$120</span>
												<span>2pc</span>
											</div>
											<div class="product_img text-center">
												<img src="images/product/product1.webp" alt="Product Image" />
											</div>
											<div class="product_desc ms-2 mt-2">
												<h6 class="mb-0">T-Shirt</h6>
												<p class="mb-0">TSHIRT</p>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-4 col-sm-6">
										<div class="product_item_wrapper">
											<div class="product_price_wrapper d-flex align-items-center justify-content-between">
												<span>$120</span>
												<span>2pc</span>
											</div>
											<div class="product_img text-center">
												<img src="images/product/product1.webp" alt="Product Image" />
											</div>
											<div class="product_desc ms-2 mt-2">
												<h6 class="mb-0">T-Shirt</h6>
												<p class="mb-0">TSHIRT</p>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-4 col-sm-6">
										<div class="product_item_wrapper">
											<div class="product_price_wrapper d-flex align-items-center justify-content-between">
												<span>$120</span>
												<span>2pc</span>
											</div>
											<div class="product_img text-center">
												<img src="images/product/product1.webp" alt="Product Image" />
											</div>
											<div class="product_desc ms-2 mt-2">
												<h6 class="mb-0">T-Shirt</h6>
												<p class="mb-0">TSHIRT</p>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-4 col-sm-6">
										<div class="product_item_wrapper">
											<div class="product_price_wrapper d-flex align-items-center justify-content-between">
												<span>$120</span>
												<span>2pc</span>
											</div>
											<div class="product_img text-center">
												<img src="images/product/product1.webp" alt="Product Image" />
											</div>
											<div class="product_desc ms-2 mt-2">
												<h6 class="mb-0">T-Shirt</h6>
												<p class="mb-0">TSHIRT</p>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-4 col-sm-6">
										<div class="product_item_wrapper">
											<div class="product_price_wrapper d-flex align-items-center justify-content-between">
												<span>$120</span>
												<span>2pc</span>
											</div>
											<div class="product_img text-center">
												<img src="images/product/product1.webp" alt="Product Image" />
											</div>
											<div class="product_desc ms-2 mt-2">
												<h6 class="mb-0">T-Shirt</h6>
												<p class="mb-0">TSHIRT</p>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-4 col-sm-6">
										<div class="product_item_wrapper">
											<div class="product_price_wrapper d-flex align-items-center justify-content-between">
												<span>$120</span>
												<span>2pc</span>
											</div>
											<div class="product_img text-center">
												<img src="images/product/product1.webp" alt="Product Image" />
											</div>
											<div class="product_desc ms-2 mt-2">
												<h6 class="mb-0">T-Shirt</h6>
												<p class="mb-0">TSHIRT</p>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-4 col-sm-6">
										<div class="product_item_wrapper">
											<div class="product_price_wrapper d-flex align-items-center justify-content-between">
												<span>$120</span>
												<span>2pc</span>
											</div>
											<div class="product_img text-center">
												<img src="images/product/product1.webp" alt="Product Image" />
											</div>
											<div class="product_desc ms-2 mt-2">
												<h6 class="mb-0">T-Shirt</h6>
												<p class="mb-0">TSHIRT</p>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-4 col-sm-6">
										<div class="product_item_wrapper">
											<div class="product_price_wrapper d-flex align-items-center justify-content-between">
												<span>$120</span>
												<span>2pc</span>
											</div>
											<div class="product_img text-center">
												<img src="images/product/product1.webp" alt="Product Image" />
											</div>
											<div class="product_desc ms-2 mt-2">
												<h6 class="mb-0">T-Shirt</h6>
												<p class="mb-0">TSHIRT</p>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-4 col-sm-6">
										<div class="product_item_wrapper">
											<div class="product_price_wrapper d-flex align-items-center justify-content-between">
												<span>$120</span>
												<span>2pc</span>
											</div>
											<div class="product_img text-center">
												<img src="images/product/product1.webp" alt="Product Image" />
											</div>
											<div class="product_desc ms-2 mt-2">
												<h6 class="mb-0">T-Shirt</h6>
												<p class="mb-0">TSHIRT</p>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-4 col-sm-6">
										<div class="product_item_wrapper">
											<div class="product_price_wrapper d-flex align-items-center justify-content-between">
												<span>$120</span>
												<span>2pc</span>
											</div>
											<div class="product_img text-center">
												<img src="images/product/product1.webp" alt="Product Image" />
											</div>
											<div class="product_desc ms-2 mt-2">
												<h6 class="mb-0">T-Shirt</h6>
												<p class="mb-0">TSHIRT</p>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-4 col-sm-6">
										<div class="product_item_wrapper">
											<div class="product_price_wrapper d-flex align-items-center justify-content-between">
												<span>$120</span>
												<span>2pc</span>
											</div>
											<div class="product_img text-center">
												<img src="images/product/product1.webp" alt="Product Image" />
											</div>
											<div class="product_desc ms-2 mt-2">
												<h6 class="mb-0">T-Shirt</h6>
												<p class="mb-0">TSHIRT</p>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-4 col-sm-6">
										<div class="product_item_wrapper">
											<div class="product_price_wrapper d-flex align-items-center justify-content-between">
												<span>$120</span>
												<span>2pc</span>
											</div>
											<div class="product_img text-center">
												<img src="images/product/product1.webp" alt="Product Image" />
											</div>
											<div class="product_desc ms-2 mt-2">
												<h6 class="mb-0">T-Shirt</h6>
												<p class="mb-0">TSHIRT</p>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-4 col-sm-6">
										<div class="product_item_wrapper">
											<div class="product_price_wrapper d-flex align-items-center justify-content-between">
												<span>$120</span>
												<span>2pc</span>
											</div>
											<div class="product_img text-center">
												<img src="images/product/product1.webp" alt="Product Image" />
											</div>
											<div class="product_desc ms-2 mt-2">
												<h6 class="mb-0">T-Shirt</h6>
												<p class="mb-0">TSHIRT</p>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-4 col-sm-6">
										<div class="product_item_wrapper">
											<div class="product_price_wrapper d-flex align-items-center justify-content-between">
												<span>$120</span>
												<span>2pc</span>
											</div>
											<div class="product_img text-center">
												<img src="images/product/product1.webp" alt="Product Image" />
											</div>
											<div class="product_desc ms-2 mt-2">
												<h6 class="mb-0">T-Shirt</h6>
												<p class="mb-0">TSHIRT</p>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-4 col-sm-6">
										<div class="product_item_wrapper">
											<div class="product_price_wrapper d-flex align-items-center justify-content-between">
												<span>$120</span>
												<span>2pc</span>
											</div>
											<div class="product_img text-center">
												<img src="images/product/product1.webp" alt="Product Image" />
											</div>
											<div class="product_desc ms-2 mt-2">
												<h6 class="mb-0">T-Shirt</h6>
												<p class="mb-0">TSHIRT</p>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-4 col-sm-6">
										<div class="product_item_wrapper">
											<div class="product_price_wrapper d-flex align-items-center justify-content-between">
												<span>$120</span>
												<span>2pc</span>
											</div>
											<div class="product_img text-center">
												<img src="images/product/product1.webp" alt="Product Image" />
											</div>
											<div class="product_desc ms-2 mt-2">
												<h6 class="mb-0">T-Shirt</h6>
												<p class="mb-0">TSHIRT</p>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-4 col-sm-6">
										<div class="product_item_wrapper">
											<div class="product_price_wrapper d-flex align-items-center justify-content-between">
												<span>$120</span>
												<span>2pc</span>
											</div>
											<div class="product_img text-center">
												<img src="images/product/product1.webp" alt="Product Image" />
											</div>
											<div class="product_desc ms-2 mt-2">
												<h6 class="mb-0">T-Shirt</h6>
												<p class="mb-0">TSHIRT</p>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-4 col-sm-6">
										<div class="product_item_wrapper">
											<div class="product_price_wrapper d-flex align-items-center justify-content-between">
												<span>$120</span>
												<span>2pc</span>
											</div>
											<div class="product_img text-center">
												<img src="images/product/product1.webp" alt="Product Image" />
											</div>
											<div class="product_desc ms-2 mt-2">
												<h6 class="mb-0">T-Shirt</h6>
												<p class="mb-0">TSHIRT</p>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-4 col-sm-6">
										<div class="product_item_wrapper">
											<div class="product_price_wrapper d-flex align-items-center justify-content-between">
												<span>$120</span>
												<span>2pc</span>
											</div>
											<div class="product_img text-center">
												<img src="images/product/product1.webp" alt="Product Image" />
											</div>
											<div class="product_desc ms-2 mt-2">
												<h6 class="mb-0">T-Shirt</h6>
												<p class="mb-0">TSHIRT</p>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-4 col-sm-6">
										<div class="product_item_wrapper">
											<div class="product_price_wrapper d-flex align-items-center justify-content-between">
												<span>$120</span>
												<span>2pc</span>
											</div>
											<div class="product_img text-center">
												<img src="images/product/product1.webp" alt="Product Image" />
											</div>
											<div class="product_desc ms-2 mt-2">
												<h6 class="mb-0">T-Shirt</h6>
												<p class="mb-0">TSHIRT</p>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-4 col-sm-6">
										<div class="product_item_wrapper">
											<div class="product_price_wrapper d-flex align-items-center justify-content-between">
												<span>$120</span>
												<span>2pc</span>
											</div>
											<div class="product_img text-center">
												<img src="images/product/product1.webp" alt="Product Image" />
											</div>
											<div class="product_desc ms-2 mt-2">
												<h6 class="mb-0">T-Shirt</h6>
												<p class="mb-0">TSHIRT</p>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-4 col-sm-6">
										<div class="product_item_wrapper">
											<div class="product_price_wrapper d-flex align-items-center justify-content-between">
												<span>$120</span>
												<span>2pc</span>
											</div>
											<div class="product_img text-center">
												<img src="images/product/product1.webp" alt="Product Image" />
											</div>
											<div class="product_desc ms-2 mt-2">
												<h6 class="mb-0">T-Shirt</h6>
												<p class="mb-0">TSHIRT</p>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-4 col-sm-6">
										<div class="product_item_wrapper">
											<div class="product_price_wrapper d-flex align-items-center justify-content-between">
												<span>$120</span>
												<span>2pc</span>
											</div>
											<div class="product_img text-center">
												<img src="images/product/product1.webp" alt="Product Image" />
											</div>
											<div class="product_desc ms-2 mt-2">
												<h6 class="mb-0">T-Shirt</h6>
												<p class="mb-0">TSHIRT</p>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-4 col-sm-6">
										<div class="product_item_wrapper">
											<div class="product_price_wrapper d-flex align-items-center justify-content-between">
												<span>$120</span>
												<span>2pc</span>
											</div>
											<div class="product_img text-center">
												<img src="images/product/product1.webp" alt="Product Image" />
											</div>
											<div class="product_desc ms-2 mt-2">
												<h6 class="mb-0">T-Shirt</h6>
												<p class="mb-0">TSHIRT</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


				</div>



			</div>
		</div>

		<!--**********************************
            Content body end
        ***********************************-->
		<div class="offcanvas offcanvas-end customeoff" tabindex="-1" id="offcanvasExample">
			<div class="offcanvas-header">
				<h5 class="modal-title" id="#gridSystemModal">Add Employee</h5>
				<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="fa-solid fa-xmark"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<div class="container-fluid">
					<div>
						<label>Profile Picture</label>
						<div class="dz-default dlab-message upload-img mb-3">
							<form action="#" class="dropzone">
								<svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M20.5 20V35" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M34.4833 30.6501C36.1088 29.7638 37.393 28.3615 38.1331 26.6644C38.8731 24.9673 39.027 23.0721 38.5703 21.2779C38.1136 19.4836 37.0724 17.8926 35.6111 16.7558C34.1497 15.619 32.3514 15.0013 30.4999 15.0001H28.3999C27.8955 13.0488 26.9552 11.2373 25.6498 9.70171C24.3445 8.16614 22.708 6.94647 20.8634 6.1344C19.0189 5.32233 17.0142 4.93899 15.0001 5.01319C12.9861 5.0874 11.015 5.61722 9.23523 6.56283C7.45541 7.50844 5.91312 8.84523 4.7243 10.4727C3.53549 12.1002 2.73108 13.9759 2.37157 15.959C2.01205 17.9421 2.10678 19.9809 2.64862 21.9222C3.19047 23.8634 4.16534 25.6565 5.49994 27.1667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
								<div class="fallback">
									<input name="file" type="file" multiple>

								</div>
							</form>
						</div>
					</div>
					<form>
						<div class="row">
							<div class="col-xl-6 mb-3">
								<label for="exampleFormControlInput1" class="form-label">Employee ID <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
							</div>
							<div class="col-xl-6 mb-3">
								<label for="exampleFormControlInput2" class="form-label">Employee Name<span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="exampleFormControlInput2" placeholder="">
							</div>
							<div class="col-xl-6 mb-3">
								<label for="exampleFormControlInput3" class="form-label">Employee Email<span class="text-danger">*</span></label>
								<input type="email" class="form-control" id="exampleFormControlInput3" placeholder="">
							</div>
							<div class="col-xl-6 mb-3">
								<label for="exampleFormControlInput4" class="form-label">Password<span class="text-danger">*</span></label>
								<input type="password" class="form-control" id="exampleFormControlInput4" placeholder="">
							</div>
							<div class="col-xl-6 mb-3">
								<label class="form-label">Designation<span class="text-danger">*</span></label>
								<select class="default-select style-1 form-control">
									<option data-display="Select">Please select</option>
									<option value="html">Software Engineer</option>
									<option value="css">Civil Engineer</option>
									<option value="javascript">Web Doveloper</option>
								</select>
							</div>
							<div class="col-xl-6 mb-3">
								<label class="form-label">Department<span class="text-danger">*</span></label>
								<select class="default-select style-1 form-control">
									<option data-display="Select">Please select</option>
									<option value="html">Software</option>
									<option value="css">Doit</option>
									<option value="javascript">Designing</option>
								</select>
							</div>
							<div class="col-xl-6 mb-3">
								<label class="form-label">Country<span class="text-danger">*</span></label>
								<select class="default-select style-1 form-control">
									<option data-display="Select">Please select</option>
									<option value="html">Ind</option>
									<option value="css">USA</option>
									<option value="javascript">UK</option>
								</select>
							</div>
							<div class="col-xl-6 mb-3">
								<label for="exampleFormControlInput88" class="form-label">Mobile<span class="text-danger">*</span></label>
								<input type="number" class="form-control" id="exampleFormControlInput88" placeholder="">
							</div>
							<div class="col-xl-6 mb-3">
								<label class="form-label">Gender<span class="text-danger">*</span></label>
								<select class="default-select style-1 form-control">
									<option data-display="Select">Please select</option>
									<option value="html">Male</option>
									<option value="css">Female</option>
									<option value="javascript">Other</option>
								</select>
							</div>
							<div class="col-xl-6 mb-3">
								<label for="exampleFormControlInput99" class="form-label">Joining Date<span class="text-danger">*</span></label>
								<input type="date" class="form-control" id="exampleFormControlInput99">
							</div>
							<div class="col-xl-6 mb-3">
								<label for="exampleFormControlInput8" class="form-label">Date of Birth<span class="text-danger">*</span></label>
								<input type="date" class="form-control" id="exampleFormControlInput8">
							</div>
							<div class="col-xl-6 mb-3">
								<label for="exampleFormControlInput10" class="form-label">Reporting To<span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="exampleFormControlInput10" placeholder="">
							</div>
							<div class="col-xl-6 mb-3">
								<label class="form-label">Language Select<span class="text-danger">*</span></label>
								<select class="default-select style-1 form-control">
									<option data-display="Select">Please select</option>
									<option value="html">English</option>
									<option value="css">Hindi</option>
									<option value="javascript">Canada</option>
								</select>
							</div>
							<div class="col-xl-6 mb-3">
								<label class="form-label">User Role<span class="text-danger">*</span></label>
								<select class="default-select style-1 form-control">
									<option data-display="Select">Please select</option>
									<option value="html">Parmanent</option>
									<option value="css">Parttime</option>
									<option value="javascript">Per Hours</option>
								</select>
							</div>
							<div class="col-xl-12 mb-3">
								<label class="form-label">Address<span class="text-danger">*</span></label>
								<textarea rows="3" class="form-control"></textarea>
							</div>
							<div class="col-xl-12 mb-3">
								<label class="form-label">About<span class="text-danger">*</span></label>
								<textarea rows="3" class="form-control"></textarea>
							</div>
						</div>
						<div>
							<button class="btn btn-danger light ms-1">Cancel</button>
							<button class="btn btn-primary me-1">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="offcanvas offcanvas-end customeoff" tabindex="-1" id="offcanvasExample1">
			<div class="offcanvas-header">
				<h5 class="modal-title" id="#gridSystemModal1">Add New Task</h5>
				<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="fa-solid fa-xmark"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<div class="container-fluid">
					<form>
						<div class="row">
							<div class="col-xl-6 mb-3">
								<label for="exampleFormControlInputfirst" class="form-label">Title<span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="exampleFormControlInputfirst" placeholder="Title">
							</div>
							<div class="col-xl-6 mb-3">
								<label class="form-label">Project<span class="text-danger">*</span></label>
								<select class="default-select style-1 form-control">
									<option data-display="Select">Project</option>
									<option value="html">Salesmate</option>
									<option value="css">ActiveCampaign</option>
									<option value="javascript">Insightly</option>
								</select>
							</div>
							<div class="col-xl-6 mb-3">
								<label for="exampleFormControlInputthree" class="form-label">Start Date<span class="text-danger">*</span></label>
								<input type="date" class="form-control" id="exampleFormControlInputthree">
							</div>
							<div class="col-xl-6 mb-3">
								<label for="exampleFormControlInputfour" class="form-label">End Date<span class="text-danger">*</span></label>
								<input type="date" class="form-control" id="exampleFormControlInputfour">
							</div>
							<div class="col-xl-6 mb-3">
								<label class="form-label">Estimated Hour<span class="text-danger">*</span></label>
								<div class="input-group">
									<input type="text" class="form-control" value="09:30"><span class="input-group-text"><i class="fas fa-clock"></i></span>
								</div>
							</div>
							<div class="col-xl-6 mb-3">
								<label class="form-label">Status<span class="text-danger">*</span></label>
								<select class="default-select style-1 form-control">
									<option data-display="Select">Status</option>
									<option value="html">In Progess</option>
									<option value="css">Pending</option>
									<option value="javascript">Completed</option>
								</select>
							</div>
							<div class="col-xl-6 mb-3">
								<label class="form-label">priority<span class="text-danger">*</span></label>
								<select class="default-select style-1 form-control">
									<option data-display="Select">priority</option>
									<option value="html">Hight</option>
									<option value="css">Medium</option>
									<option value="javascript">Low</option>
								</select>
							</div>
							<div class="col-xl-6 mb-3">
								<label class="form-label">Category<span class="text-danger">*</span></label>
								<select class="default-select style-1 form-control">
									<option data-display="Select">Category</option>
									<option value="html">Designing</option>
									<option value="css">Development</option>
									<option value="javascript">react developer</option>
								</select>
							</div>
							<div class="col-xl-6 mb-3">
								<label class="form-label">Permission<span class="text-danger">*</span></label>
								<select class="default-select style-1 form-control">
									<option data-display="Select">Permission</option>
									<option value="html">Public</option>
									<option value="css">Private</option>
								</select>
							</div>
							<div class="col-xl-6 mb-3">
								<label class="form-label">Deadline add<span class="text-danger">*</span></label>
								<select class="default-select style-1 form-control">
									<option data-display="Select">Deadline</option>
									<option value="html">Yes</option>
									<option value="css">No</option>
								</select>
							</div>
							<div class="col-xl-6 mb-3">
								<label class="form-label">Assigned to<span class="text-danger">*</span></label>
								<select class="default-select style-1 form-control">
									<option data-display="Select">Assigned</option>
									<option value="html">Bernard</option>
									<option value="css">Sergey Brin</option>
									<option value="javascript"> Larry Ellison</option>
								</select>
							</div>
							<div class="col-xl-6 mb-3">
								<label class="form-label">Responsible Person<span class="text-danger">*</span></label>
								<input name='tagify' class="form-control py-0 ps-0 h-auto" value='James, Harry'>

							</div>
							<div class="col-xl-12 mb-3">
								<label class="form-label">Description<span class="text-danger">*</span></label>
								<textarea rows="3" class="form-control"></textarea>
							</div>
							<div class="col-xl-12 mb-3">
								<label class="form-label">Summary<span class="text-danger">*</span></label>
								<textarea rows="3" class="form-control"></textarea>
							</div>

						</div>
						<div>
							<button class="btn btn-danger light ms-1">Cancel</button>
							<button class="btn btn-primary me-1">Help Desk</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
			<div class="modal-dialog modal-dialog-center">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="exampleModalLabel1">Invite Employee</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-xl-12">
								<label class="form-label">Email ID<span class="text-danger">*</span></label>
								<input type="email" class="form-control" placeholder="hello@gmail.com">
								<label class="form-label mt-3">Employment date<span class="text-danger">*</span></label>
								<input class="form-control" type="date">
								<div class="row">
									<div class="col-xl-6">
										<label class="form-label mt-3">First Name<span class="text-danger">*</span></label>
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Name">
										</div>
									</div>
									<div class="col-xl-6">
										<label class="form-label mt-3">Last Name<span class="text-danger">*</span></label>
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Surname">
										</div>
									</div>
								</div>
								<div class="mt-3 invite">
									<label class="form-label">Send invitation email<span class="text-danger">*</span></label>
									<input type="email" class="form-control " placeholder="+ invite">
								</div>


							</div>
						</div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div>

		<!--**********************************
            Footer start
        ***********************************-->
		<div class="footer">
			<div class="copyright">
				<p>Copyright © <a href="https://sisnodo.com/" target="_blank">MRM</a> <? echo date("Y"); ?></p>
			</div>
		</div>
		<!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

		<!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
	<!--**********************************
        Main wrapper end
    ***********************************-->

	<!--**********************************
        Scripts
    ***********************************-->
	<!-- Required vendors -->
	<script src="vendor/global/global.min.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="vendor/apexchart/apexchart.js"></script>

	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard-1.js"></script>
	<script src="vendor/draggable/draggable.js"></script>


	<!-- tagify -->
	<script src="vendor/tagify/dist/tagify.js"></script>

	<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="vendor/datatables/js/dataTables.buttons.min.js"></script>
	<script src="vendor/datatables/js/buttons.html5.min.js"></script>
	<script src="vendor/datatables/js/jszip.min.js"></script>
	<script src="js/plugins-init/datatables.init.js"></script>

	<!-- Apex Chart -->

	<script src="vendor/bootstrap-datetimepicker/js/moment.js"></script>
	<script src="vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>


	<!-- Vectormap -->
	<script src="vendor/jqvmap/js/jquery.vmap.min.js"></script>
	<script src="vendor/jqvmap/js/jquery.vmap.world.js"></script>
	<script src="vendor/jqvmap/js/jquery.vmap.usa.js"></script>

	<!-- easy-autocomplete script cdn -->
	<script src="https://cdn.jsdelivr.net/npm/easy-autocomplete@1.3.5/dist/jquery.easy-autocomplete.min.js"></script>


	<script src="js/custom.js"></script>
	<script src="js/deznav-init.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {

			var options = {
				url: "data/user.json",
				getValue:function(elem) {
					return elem.name;
				},
				list: {
					onClickEvent: function() {
						var value = $("#userAccount").getSelectedItemData();
						$("#userId").val(value.clave)
					}
				}
			};

			$("#userAccount").easyAutocomplete(options);



		});
	</script>



</body>

</html>