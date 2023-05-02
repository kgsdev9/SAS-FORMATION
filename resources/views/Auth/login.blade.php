
<!DOCTYPE html>
<html lang="en">

<head>	<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="Codescandy">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-M8S4MT3EYG');
</script>



<script>
    // Render blocking JS:
    if (localStorage.theme) document.documentElement.setAttribute("data-theme", localStorage.theme);
    </script>

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon/favicon.ico">


<!-- Libs CSS -->
<link href="../assets/fonts/feather/feather.css" rel="stylesheet">
<link href="../assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
<link href="../assets/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
<link href="../assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet">




<!-- Theme CSS -->
<link rel="stylesheet" href="../assets/css/theme.min.css">
	<title>Se Connecter  | Geeks - Bootstrap 5 Template</title>
</head>

<body>
	<!-- Page content -->
	<main>
	<section class="container d-flex flex-column">
		<div class="row align-items-center justify-content-center g-0 min-vh-100">
			<div class="col-lg-5 col-md-8 py-8 py-xl-0">
				<!-- Card -->
				<div class="card shadow">
					<!-- Card body -->
					<div class="card-body p-6">
						<div class="mb-4">
							<a href="../index.html"><img src="../assets/images/brand/logo/logo-icon.svg" class="mb-4" alt="logo"></a>
							<h1 class="mb-1 fw-bold">Se  Connecter </h1>
							<span>Vous n'avez  pas  un compte ?
								<a href="" class="ms-1">Inscrivez-vous </a></span>
						</div>
						<!-- Form -->
						<form method="POST"  action="{{route('post.login')}}">
                            @csrf
								<!-- Email -->
							<div class="mb-3">
								<label for="email" class="form-label">Email</label>
								<input type="email" id="email" name="email" class="form-control" name="email" placeholder="Email address here"
									required value="{{old('email')}}">
							</div>
								<!-- Password -->
							<div class="mb-3">
								<label for="password" class="form-label">Password</label>
								<input type="password" id="password" class="form-control" name="password" placeholder="**************"
									required>
							</div>
								<!-- Checkbox -->
							<div class="mb-3">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="agreeCheck">
									<label class="form-check-label" for="agreeCheck"><span>I agree to the <a href="terms-condition-page.html">Terms of
												Service </a>and
											<a href="terms-condition-page.html">Privacy Policy.</a></span></label>
								</div>
							</div>
							<div>
									<!-- Button -->
									<div class="d-grid">
								<button type="submit" class="btn btn-primary">
									Create Free Account
								</button>
								</div>
							</div>
							<hr class="my-4">
							<div class="mt-4 text-center">
								<!--Facebook-->
								<a href="#" class="btn-social btn-social-outline btn-facebook">
									<i class="mdi mdi-facebook fs-4"></i>
								</a>
								<!--Twitter-->
								<a href="#" class="btn-social btn-social-outline btn-twitter">
									<i class="mdi mdi-twitter fs-4"></i>
								</a>
								<!--LinkedIn-->
								<a href="#" class="btn-social btn-social-outline btn-linkedin">
									<i class="mdi mdi-linkedin"></i>
								</a>
								<!--GitHub-->
								<a href="#" class="btn-social btn-social-outline btn-github">
									<i class="mdi mdi-github"></i>
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
	<!-- Scripts -->
	<!-- Libs JS -->
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>


<!-- Theme JS -->
<script src="../assets/js/theme.min.js"></script>

</body>

</html>
