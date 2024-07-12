
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <head>
	<title>Login Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	
<link href="{{asset('frontend/assets/img/favicon-32x32.png')}}" rel="icon">
<!--===============================================================================================-->
	
    <link rel="stylesheet" type="text/css" href="{{ asset('template_log/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	
    <link rel="stylesheet" href="{{ asset('template_log/assets/vendor/fontawesome-free/css/all.min.css')}}">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<!--===============================================================================================-->
	
    <link rel="stylesheet" type="text/css" href="{{ asset('template_log/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	
    <link rel="stylesheet" type="text/css" href="{{ asset('template_log/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	
    <link rel="stylesheet" type="text/css" href="{{ asset('template_log/select2/select2.min.css')}}">
<!--===============================================================================================-->
	
    <link rel="stylesheet" type="text/css" href="{{ asset('template_log/assets/css/util.css')}}">

	
    <link rel="stylesheet" type="text/css" href="{{ asset('template_log/assets/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
			<a href="{{ url('/') }}">
            <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{asset('frontend/assets/img/android-chrome-512x512.png')}}" style="border-radius: 50%;" alt="IMG">
			</div>
			</a>

				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
					<span class="login100-form-title">
						Login Here!
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100 form-control" id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100 form-control" id="password"
                            type="password"
                            name="password"
                            required autocomplete="current-password" placeholder="Password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

                    <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
                        {{ __('Log in') }}
						</button>
					</div>

					<div class="text-center p-t-12 p-b-136">
                    @if (Route::has('password.request'))
						<span class="txt2">
							Forgot
						</span>
						<a class="txt2 text-primary" href="{{ route('password.request') }}">
							Username / Password?
						</a>
                    @endif
						<br>
						<span class="txt2">
							Don't have an account?
						</span>
						<a class="txt2 text-primary" href="{{ route('register') }}">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->	
	
    <script src="{{ asset('template_log/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	
    <script src="{{ asset('template_log/vendor/bootstrap/js/popper.js')}}"></script>
	
    <script src="{{ asset('template_log/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	
    <script src="{{ asset('template_log/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	
    <script src="{{ asset('template_log/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	
    <script src="{{ asset('template_log/js/main.js')}}"></script>

</body>
