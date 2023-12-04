<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>

@import url(registration.css);

input[type="text"],
input[type="password"],
input[type="number"],
input[type="email"],
input[type="file"],
.form-control,
.form-select,
.custom-file-upload,
.custom-file-upload-image,
textarea {
	padding-top: 20px;
	background-color: var(--white);
}

.input-box.focus .input-label,
.input-box.active .input-label {
	top: 3px;
}

.validation-message {
	width: calc(100% - 5px);
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
}

    </style>
</head>
<body>




<div class="container">
	<div class="bg-image-layout-gradient d-flex min-vh-100 flex-column justify-content-center animate__animated animate__fadeIn animate__delay-1s">
		<div class="d-flex h-100 flex-column justify-content-center">
			<div class="mx-auto d-flex flex-column p-4">
				
				<form class="mt-2" style="width: 300px;">
					<div class="d-flex flex-column">
						<div class="w-100">
							<div class="input-box">
								<label for="inputUsername" class="input-label font-kallisto">Username</label>
								<input id="inputUsername" type="text" class="form-control" name="username" minlength="4" maxlength="32" onfocus="common.setFocus(true)" onblur="common.setFocus(false)" required>
							</div>
							<!-- <div class="validation-message">
							</div> -->
						</div>
						<div class="w-100">
							<div class="input-box">
								<label for="inputPassword" class="input-label font-kallisto">Password</label>
								<input id="inputPassword" type="password" class="form-control" aria-label="Password" aria-describedby="button-addon2" name="password" minlength="6" maxlength="64" onfocus="common.setFocus(true)" onblur="common.setFocus(false)" required>
								<i id="btnEye" style="cursor: pointer; position: absolute; top: 15px; right: 15px;" class="fa-solid fa-eye-slash"></i>
							</div>
							<div class="validation-message">
							</div>
						</div>
						<div class="mb-2 mt-3">
							<a class="text-warning" disabled>Forgot Password?</a>
						</div>
						<div class="mt-2">
							<div class="d-flex cursor-pointer flex-column justify-content-center">
								<div class=" d-flex justify-content-center text-uppercase"><button id="btnLogin" class="font-kallisto-bold text-nowrap text-uppercase btn btn-primary w-100 text-dark" type="button">Login</button></div>
							</div>
						</div>
						
						<div class="w-100 mt-3">
							<label class="d-flex flex-row align-items-center justify-content-center">
								<input type="checkbox" name="_remember_me" class="mt-1 rounded border mx-3" style="height: 24px; width: 24px;" disabled>
								<div class="text-white p-2 font-kallisto">Remember Me!</div>
							</label>
						</div>
					</div>
					<!-- <div class="d-none">
						<div class="d-flex flex-column justify-content-center gap-2 bg-white p-4">
							<div class="text-theme-violet font-kallisto-bold text-center text-uppercase">OTP Verification</div>
							<div class="text-theme-violet py-2 text-center text-xs">We’ve sent a verification code to your mobile number - *******6789</div>
							<div class="text-theme-violet mb-2 cursor-pointer text-center text-xs underline">Answer Security question instead?</div>
							<div class="d-flex gap-2">
								<input type="number" min="0" max="9" class="txtOtpInput h-10 w-1/6 form-control appearance-none rounded bg-gray-200 p-2 text-center">
								<input type="number" min="0" max="9" class="txtOtpInput h-10 w-1/6 form-control appearance-none rounded bg-gray-200 p-2 text-center">
								<input type="number" min="0" max="9" class="txtOtpInput h-10 w-1/6 form-control appearance-none rounded bg-gray-200 p-2 text-center">
								<input type="number" min="0" max="9" class="txtOtpInput h-10 w-1/6 form-control appearance-none rounded bg-gray-200 p-2 text-center">
								<input type="number" min="0" max="9" class="txtOtpInput h-10 w-1/6 form-control appearance-none rounded bg-gray-200 p-2 text-center">
								<input type="number" min="0" max="9" class="txtOtpInput h-10 w-1/6 form-control appearance-none rounded bg-gray-200 p-2 text-center">
							</div>
							<button id="submitOtp" type="submit" class="bg-energy-yellow-700 hover:bg-energy-yellow-800 text-md font-weight-lighter font-kallisto-bold text-nowrap mr-2 mt-2 mb-2 w-100 rounded-md px-4 py-1.5 text-center text-uppercase">LOGIN</button>
						</div>
					</div>
					<div class="d-none">
						<div class="d-flex flex-column justify-content-center gap-2 bg-white p-4 hidden">
							<div class="text-theme-violet font-kallisto-bold text-center text-uppercase">Security Question</div>
							<div class="text-theme-violet mb-2 cursor-pointer text-center text-xs underline">Answer OTP instead?</div>
							<div class="d-flex flex-column gap-2">
								<label class="font-weight-lighter block text-sm text-gray-900">Security Question
									<select name="form[securityQuestion]" class="form-control rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
										<option value="What is your favorite billiards game to watch?">What is your favorite billiards game to watch?</option>
										<option value="Who is your favorite billiards player and why?">Who is your favorite billiards player and why?</option>
										<option value="What is the name of the billiards hall or club you frequent the most?">What is the name of the billiards hall or club you frequent the most?</option>
										<option value="What is the highest number of balls you've ever seen sunk in a single turn?">What is the highest number of balls you've ever seen sunk in a single turn?</option>
										<option value="What was the most exciting billiards match you've ever witnessed?">What was the most exciting billiards match you've ever witnessed?</option>
										<option value="What is the name of the billiards commentator or analyst you enjoy listening to the most?">What is the name of the billiards commentator or analyst you enjoy listening to the most?</option>
										<option value="What is your favorite billiards-themed book or movie?">What is your favorite billiards-themed book or movie?</option>
										<option value="What is the name of the first billiards tournament you ever attended?">What is the name of the first billiards tournament you ever attended?</option>
										<option value="What is your favorite billiards-related item that you own?">What is your favorite billiards-related item that you own?</option>
										<option value="What is the most difficult billiards shot you've ever seen made?">What is the most difficult billiards shot you've ever seen made?</option>
									</select>
								</label>
								<label class="font-weight-lighter block text-sm text-gray-900">Security Answer
									<input type="text" name="form[securityAnswer]" class="mt-1 form-control rounded-md border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500" placeholder="Type here">
								</label>
							</div>
							<div class="mt-2 mb-2">
								<div class="d-flex h-10 w-100 cursor-pointer flex-column justify-content-center rounded px-4 bg-energy-yellow-700 text-theme-violet">
									<div class="font-kallisto-bold text-nowrap d-flex justify-content-center text-uppercase">Login</div>
								</div>
							</div>
						</div>
					</div> -->
				</form>
			</div>
		</div>
	</div>
</div>





    
</body>
</html>