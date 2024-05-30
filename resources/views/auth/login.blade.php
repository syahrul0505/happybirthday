<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Core Css -->

	<link rel="stylesheet" href="{{ asset('assets-old/css/styles.min.css') }}" />

	{{-- Juery Confirm --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.css" integrity="sha512-0V10q+b1Iumz67sVDL8LPFZEEavo6H/nBSyghr7mm9JEQkOAm91HNoZQRvQdjennBb/oEuW+8oZHVpIKq+d25g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	{{-- Font awesome --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	{{-- Toastify --}}
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

	{{-- Font awesome --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Kebuli Apaya </title>
</head>

<body>
    {{-- <div id="main-wrapper">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-12">
                        <h2 class="text-center">KEBULI APAYA</h2>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xxl-3">
                        <div class="card mb-0" style="border-radius: 20px;">
                            <div class="card-body px-4 py-1" style="border-radius: 20px;">
                                <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login') }}">
									@csrf
									<div class="mt-4">
										<label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
										<input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="name@company.com" required="">
										@error('email')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
										<span class="focus-input100" data-placeholder="Email"></span>
									</div>
									<div class="mt-4">
										<label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
										<input type="password" name="password" id="password" placeholder="••••••••" class="form-control bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
											@error('password')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										<span class="focus-input100" data-placeholder="Password"></span>
									</div>
									<button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2 mt-4">Sign in</button>
								</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
	<div class="container py-5 h-100">
		<div class="row d-flex align-items-center justify-content-center h-100">
		  <div class="col-md-8 col-lg-7 col-xl-6">
			<img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
			  class="img-fluid" alt="Phone image">
		  </div>
		  <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
			<form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login') }}">
				@csrf
				<div class="mt-4">
					<label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
					<input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="name@company.com" required="">
					@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
					<span class="focus-input100" data-placeholder="Email"></span>
				</div>
				<div class="mt-4">
					<label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
					<input type="password" name="password" id="password" placeholder="••••••••" class="form-control bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
						@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					<span class="focus-input100" data-placeholder="Password"></span>
				</div>
				<button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2 mt-4">Sign in</button>
			</form>
		  </div>
		</div>
	  </div>
    <div class="dark-transparent sidebartoggler"></div>
    <!-- Import Js Files -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
	<script src="{{ asset('assets/js/app.min.js') }}"></script>
	<script src="{{ asset('assets/js/dashboard.js') }}"></script>

	<!-- Jquery Confirm -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js" integrity="sha512-zP5W8791v1A6FToy+viyoyUUyjCzx+4K8XZCKzW28AnCoepPNIXecxh9mvGuy3Rt78OzEsU+VCvcObwAMvBAww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	{{-- Toastify --}}
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
	<script src="https://cdn.socket.io/4.5.4/socket.io.min.js"></script>


</body>

</html>
