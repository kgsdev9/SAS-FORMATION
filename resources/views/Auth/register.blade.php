
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
	<title>S'inscrire et vendre ses formations </title>
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
							<h1 class="mb-1 fw-bold">S'inscrire</h1>
							<span>Vous avez déjà un compte?
								<a href="sign-in.html" class="ms-1">S'identifier</a></span>
						</div>
						<!-- Form -->
						<form method="POST" action="{{ route('register') }}">
							@csrf
								<!-- Username -->
							<div class="mb-3">
								<label for="username" class="form-label">Nom d'utilisateur  @error('name')
										<small class="text-danger">{{ $message }}</small>
								@enderror</label>
								<input type="text" id="username" class="form-control" name="name"  value="{{ old('name') }}" placeholder="Kgs Dev" required >
							</div>
								<!-- Email -->
							<div class="mb-3">
								<label for="email" class="form-label">Email   @error('email')
									<small class="text-danger">{{ $message }}</small>
							@enderror</label>
								<input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="kgsdev8@gmail.com"
									required>
							</div>
								<!-- Password -->
							<div class="mb-3">
								<label for="password" class="form-label">Mot de passe   @error('password')
									<small class="text-danger">{{ $message }}</small>
							@enderror</label>
								<input type="password" id="password" class="form-control" name="password" placeholder="**************"
									required>
							</div>

                            <div class="mb-3">
								<label for="password" class="form-label">Confirmer le mot de passe </label>
								<input type="password" id="password" class="form-control" name="password_confirmation" placeholder="**************"
									required>
							</div>
								<!-- Checkbox -->
							<div class="mb-3">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="agreeCheck">
									<label class="form-check-label" for="agreeCheck"><span>J'accepte les <a href="#">
                                        conditions d'utilisation</a>et 
											<a href="terms-condition-page.html">la politique de confidentialité.</a></span></label>
								</div>
							</div>
							<div>
									<!-- Button -->
									<div class="d-grid">
								<button type="submit" class="btn btn-primary">
									Créer un compte gratuitement
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