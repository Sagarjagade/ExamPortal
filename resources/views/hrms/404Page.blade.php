
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title>404 Page Not Found</title>
	 <link rel="icon" href="assetss/images/favicon.ico" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="{{ URL::asset('assetss/css/app.min.css') }}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{ URL::asset('assetss/css/style1.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assetss/css/pages/extra_pages1.css') }}" rel="stylesheet" />
</head>

<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form">
					<span class="error-header p-b-45">
						404
					</span>
					<span class="error-subheader p-b-5">
						Looks Like You're Lost
					</span>
					<span class="error-subheader2 p-b-5">
						The Page You Are Looking For Not Available!
					</span>
					<div class="container-login100-form-btn p-t-30	">
						<a href="/login" class="login100-form-btn">
							Go To Home Page
						</a>
					</div>
					<div class="w-full p-t-15 p-b-15 text-center">
						<div>
							<!-- <a href="#" class="txt1">
								Need Help?
							</a> -->
						</div>
					</div>
				</form>
				<div class="login100-more" style="background-image: url('assetss/images/pages/bg-03.png');">
				</div>
			</div>
		</div>
	</div>
	<!-- Plugins Js -->
	<script src="{{ URL::asset('assetss/js/app.min.js') }}"></script>
	<!-- Extra page Js -->
	<script src="assets/js/pages/examples/pages.js"></script>
</body>

</html>