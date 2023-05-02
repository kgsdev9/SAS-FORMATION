
<!DOCTYPE html>
<html lang="en">

<head> <!-- Required meta tags -->
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
<link rel="shortcut icon" type="image/x-icon" href="../../assets/images/favicon/favicon.ico">


<!-- Libs CSS -->
<link rel="stylesheet" href="{{asset('assets/fonts/feather/feather.css')}}">
<link rel="stylesheet" href="{{asset('assets/libs/bootstrap-icons/font/bootstrap-icons.css')}}">
<link href="{{asset('assets/libs/@mdi/font/css/materialdesignicons.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('assets/libs/simplebar/dist/simplebar.min.css')}}">

<!-- Theme CSS -->
<link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/libs/tiny-slider/dist/tiny-slider.css')}}">
  <title>Bienvenue Sur SAS PARTENARIAT </title>
</head>

<body class="bg-white">

  <!-- Navbar -->
  <!-- navbar login -->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid px-0">
    <a class="navbar-brand" href="../../index.html"><img src="../../assets/images/brand/logo/logo.svg"
        alt="" ></a>
<div class="order-lg-3 d-flex align-items-center">
  <div class="">
    <div class="d-flex align-items-center">
      <a href="#" class="form-check form-switch theme-switch btn btn-light btn-icon rounded-circle me-2">
        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
        <label class="form-check-label" for="flexSwitchCheckDefault"></label>
         </a>
        @guest
        <a href="{{route('login')}}" class="btn btn-outline-primary shadow-sm me-1">Connexion</a>
        <a href="{{URL('/register')}}" class="btn btn-primary d-none d-md-block">Inscription</a>
            @else
            <a href="{{url('/profiles')}}" class="btn btn-outline-primary shadow-sm me-1">Tableau de bord </a>

        @endguest
    </div>
  </div>
   <!-- Button -->
   <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-default"
   aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
   <span class="icon-bar top-bar mt-0"></span>
   <span class="icon-bar middle-bar"></span>
   <span class="icon-bar bottom-bar"></span>
 </button>
</div>

    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="navbar-default">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarBrowse" data-bs-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false" data-display="static">
            Browse
          </a>
          <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarBrowse">
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                Web Development
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="../course-category.html">
                    Bootstrap</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../course-category.html">
                    React
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="../course-category.html">
                    GraphQl</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../course-category.html">
                    Gatsby</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../course-category.html">
                    Grunt</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../course-category.html">
                    Svelte</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../course-category.html">
                    Meteor</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../course-category.html">
                    HTML5</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../course-category.html">
                    Angular</a>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                Design
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="../course-category.html">
                    Graphic Design</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../course-category.html">
                    Illustrator
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="../course-category.html">
                    UX / UI Design</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../course-category.html">
                    Figma Design</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../course-category.html">
                    Adobe XD</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../course-category.html">
                    Sketch</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../course-category.html">
                    Icon Design</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../course-category.html">
                    Photoshop</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="../course-category.html" class="dropdown-item">
                Mobile App
              </a>
            </li>
            <li>
              <a href="../course-category.html" class="dropdown-item">
                IT Software
              </a>
            </li>
            <li>
              <a href="../course-category.html" class="dropdown-item">
                Marketing
              </a>
            </li>
            <li>
              <a href="../course-category.html" class="dropdown-item">
                Music
              </a>
            </li>
            <li>
              <a href="../course-category.html" class="dropdown-item">
                Life Style
              </a>
            </li>
            <li>
              <a href="../course-category.html" class="dropdown-item">
                Business
              </a>
            </li>
            <li>
              <a href="../course-category.html" class="dropdown-item">
                Photography
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarLanding" data-bs-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            Landings
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarLanding">
            <li>
              <h4 class="dropdown-header">Landings</h4>
            </li>
            <li>
							<a href="landing-education.html"
								class="dropdown-item d-flex justify-content-between">
								Education <span class="badge bg-primary ms-1">New</span>
							</a>
						</li>
            <li>
              <a href="home-academy.html" class="dropdown-item d-flex justify-content-between">
                Home Academy
              </a>
            </li>
            <li>
              <a href="landing-courses.html" class="dropdown-item">
                Courses
              </a>
            </li>
            <li>
              <a href="course-lead.html" class="dropdown-item">
                Lead Course
              </a>
            </li>
            <li>
              <a href="request-access.html" class="dropdown-item">
                Request Access
              </a>
            </li>

            <li>
              <a href="landing-sass.html" class="dropdown-item">
                SaaS
              </a>
            </li>


            <li>
              <a href="landing-job.html" class="dropdown-item d-flex justify-content-between">
                Job Listing
              </a>
            </li>



          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarPages" data-bs-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            Pages
          </a>
          <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarPages">
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                Courses
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="../course-single.html">
                    Course Single
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="../course-single-v2.html">
                    Course Single v2
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="../course-resume.html">
                    Course Resume
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="../course-category.html">
                    Course Category
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="../course-checkout.html">
                    Course Checkout
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="../course-filter-list.html">
                    Course List/Grid
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="../add-course.html">
                    Add New Course
                  </a>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                Paths
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="../course-path.html" class="dropdown-item">
                    Browse Path
                  </a>
                </li>
                <li>
                  <a href="../course-path-single.html" class="dropdown-item">
                    Path Single
                  </a>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                Blog
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="../blog.html">
                    Listing</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../blog-single.html">
                    Article
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="../blog-category.html">
                    Category</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../blog-sidebar.html">
                    Sidebar</a>
                </li>
              </ul>
            </li>

            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                Career
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="../career.html">
                    Overview</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../career-list.html">
                    Listing
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="../career-single.html">
                    Opening</a>
                </li>

              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                Portfolio
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="../portfolio.html">
                    List</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../portfolio-single.html">
                    Single
                  </a>
                </li>


              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                Job
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="landing-job.html">
                    Home</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../jobs/job-listing.html">
                    List
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="../jobs/job-grid.html">
                    Grid
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="../jobs/job-single.html">
                    Single
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="../jobs/company-list.html">
                    Company List
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="../jobs/company-about.html">
                    Company Single
                  </a>
                </li>


              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                Specialty
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="../coming-soon.html">
                    Coming Soon
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="../404-error.html">
                    Error 404
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="../maintenance-mode.html">
                    Maintenance Mode
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="../terms-condition-page.html">
                    Terms & Conditions
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <hr class="mx-3" >
            </li>


            <li>
              <a class="dropdown-item" href="../about.html">
                About
              </a>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                Help Center
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="../help-center.html">
                    Help Center
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="../help-center-faq.html">
                    FAQ's
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="../help-center-guide.html">
                    Guide
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="../help-center-guide-single.html">
                    Guide Single
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="../help-center-support.html">
                    Support
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a class="dropdown-item" href="../pricing.html">
                Pricing
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="../compare-plan.html">
                Compare Plan
              </a>
            </li>

            <li>
              <a class="dropdown-item" href="../contact.html">
                Contact
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarAccount" data-bs-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            Accounts
          </a>
          <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarAccount">
            <li>
              <h4 class="dropdown-header">Accounts</h4>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                Instructor
              </a>
              <ul class="dropdown-menu">
                <li class="text-wrap">
                  <h5 class="dropdown-header text-dark">Instructor</h5>
                  <p class="dropdown-text mb-0">
                    Instructor dashboard for manage courses and earning.
                  </p>
                </li>
                <li>
                  <hr class="mx-3" >
                </li>
                <li>
                  <a class="dropdown-item" href="../dashboard-instructor.html">
                    Dashboard</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../instructor-profile.html">
                    Profile</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../instructor-courses.html">
                    My Courses
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="../instructor-order.html">
                    Orders</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../instructor-reviews.html">
                    Reviews</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../instructor-students.html">
                    Students</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../instructor-payouts.html">
                    Payouts</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../instructor-earning.html">
                    Earning</a>
                </li>
                <li class="dropdown-submenu dropend">
                  <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                    Quiz
                    <span class="badge bg-primary ms-1"> New </span>
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="../instructor-quiz.html">
                        Quiz</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../instructor-quiz-details.html">
                        Single</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../instructor-quiz-result.html">
                        Result</a>
                    </li>
                  </ul>
                </li>

              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                Students
              </a>
              <ul class="dropdown-menu">
                <li class="text-wrap">
                  <h5 class="dropdown-header text-dark">Students</h5>
                  <p class="dropdown-text mb-0">
                    Students dashboard to manage your courses and subscriptions.
                  </p>
                </li>
                <li>
                  <hr class="mx-3" >
                </li>
                <li>
                  <a class="dropdown-item" href="../dashboard-student.html">
                    Dashboard</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../student-subscriptions.html">
                    Subscriptions
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="../payment-method.html">
                    Payments</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../billing-info.html">
                    Billing Info</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../invoice.html">
                    Invoice</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../invoice-details.html">
                    Invoice Details</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../dashboard-student.html">
                    Bookmarked</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../dashboard-student.html">
                    My Path</a>
                </li>
                <li class="dropdown-submenu dropend">
                  <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                    Quiz
                    <span class="badge bg-primary ms-1"> New </span>
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="../student-quiz.html">
                        Quiz</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../student-quiz-attempt.html">
                        Attempt</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../student-quiz-start.html">
                        Start</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../student-quiz-result.html">
                        Result</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                Admin
              </a>
              <ul class="dropdown-menu">
                <li class="text-wrap">
                  <h5 class="dropdown-header text-dark">Master Admin</h5>
                  <p class="dropdown-text mb-0">
                    Master admin dashboard to manage courses, user, site setting
                    , and work with amazing apps.
                  </p>
                </li>
                <li>
                  <hr class="mx-3" >
                </li>
                <li class="px-3 d-grid">
                  <a href="../dashboard/admin-dashboard.html" class="btn btn-sm btn-primary">Go to
                    Dashboard</a>
                </li>
              </ul>
            </li>
            <li>
              <hr class="mx-3" >
            </li>
            <li>
              <a class="dropdown-item" href="../sign-in.html">
                Sign In
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="../sign-up.html">
                Sign Up
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="../forget-password.html">
                Forgot Password
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="../profile-edit.html">
                Edit Profile
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="../security.html">
                Security
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="../social-profile.html">
                Social Profiles
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="../notifications.html">
                Notifications
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="../profile-privacy.html">
                Privacy Settings
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="../delete-profile.html">
                Delete Profile
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="../linked-accounts.html">
                Linked Accounts
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fe fe-more-horizontal"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDropdown">
            <div class="list-group">
							<a class="list-group-item list-group-item-action border-0" href="../../docs/index.html">
								<div class="d-flex align-items-center">
									<i class="fe fe-file-text fs-3 text-primary"></i>
									<div class="ms-3">
										<h5 class="mb-0">Documentations</h5>
										<p class="mb-0 fs-6">
											Browse the all documentation
										</p>
									</div>
								</div>
							</a>
							<a class="list-group-item list-group-item-action border-0"
								href="../../docs/bootstrap-5-snippets.html">
								<div class="d-flex align-items-center">
									<i class="bi bi-files fs-3 text-primary"></i>
									<div class="ms-3">
										<h5 class="mb-0">
											Snippet
										</h5>
										<p class="mb-0 fs-6">Bunch of Snippet</p>
									</div>
								</div>
							</a>
							<a class="list-group-item list-group-item-action border-0"
								href="../../docs/changelog.html">
								<div class="d-flex align-items-center">
									<i class="fe fe-layers fs-3 text-primary"></i>
									<div class="ms-3">
										<h5 class="mb-0">
											Changelog <span class="text-primary ms-1" id="changelog"></span>
										</h5>
										<p class="mb-0 fs-6">See what's new</p>
									</div>
								</div>
							</a>
							<a class="list-group-item list-group-item-action border-0" href="https://geeksui.codescandy.com/geeks-rtl/"
							target="_blank">
								<div class="d-flex align-items-center">
									<i class="fe fe-toggle-right fs-3 text-primary"></i>
									<div class="ms-3">
										<h5 class="mb-0">RTL demo</h5>
										<p class="mb-0 fs-6">
											RTL Pages
										</p>
									</div>
								</div>
							</a>
						</div>
          </div>
        </li>
      </ul>
      <form class="mt-3 mt-lg-0 ms-lg-3 d-flex align-items-center">
        <span class="position-absolute ps-3 search-icon">
          <i class="fe fe-search"></i>
        </span>
        <input type="search" class="form-control ps-6" placeholder="Search Courses" >
      </form>

    </div>
  </div>
</nav>

@yield('content')






  <!-- footer -->
      <!-- footer -->
      <footer class="pt-lg-10 pt-5 footer bg-white">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                  <!-- about company -->
              <div class="mb-4">
                <img src="../../assets/images/brand/logo/logo.svg" alt="" class="logo-inverse ">
                <div class="mt-4">
                  <p>Geek is feature-rich components and beautifully Bootstrap UIKit for developers, built with bootstrap responsive framework.</p>
                     <!-- social media -->
                  <div class="fs-4 mt-4">
                    <a href="#" class="mdi mdi-facebook fs-4 text-muted me-2"></a>
                    <a href="#" class="mdi mdi-twitter text-muted me-2"></a>
                    <a href="#" class="mdi mdi-instagram text-muted "></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="offset-lg-1 col-lg-2 col-md-3 col-6">
              <div class="mb-4">
                    <!-- list -->
                <h3 class="fw-bold mb-3">Company</h3>
                <ul class="list-unstyled nav nav-footer flex-column nav-x-0">
                  <li><a href="#" class="nav-link">About</a></li>
                  <li><a href="#" class="nav-link">Pricing</a></li>
                  <li><a href="#" class="nav-link">Blog</a></li>
                  <li><a href="#" class="nav-link">Careers</a></li>
                  <li><a href="#" class="nav-link">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
              <div class="mb-4">
                    <!-- list -->
                <h3 class="fw-bold mb-3">Support</h3>
                <ul class="list-unstyled nav nav-footer flex-column nav-x-0">
                  <li><a href="#" class="nav-link">Help and Support</a></li>
                  <li><a href="#" class="nav-link">Become Instructor</a></li>
                  <li><a href="#" class="nav-link">Get the app</a></li>
                  <li><a href="#" class="nav-link">FAQ’s</a></li>
                  <li><a href="#" class="nav-link">Tutorial</a></li>
                </ul>

              </div>
            </div>
            <div class="col-lg-3 col-md-12">
                  <!-- contact info -->
              <div class="mb-4">
                <h3 class="fw-bold mb-3">Get in touch</h3>
                <p>339 McDermott Points Hettingerhaven, NV 15283</p>
                <p class="mb-1">Email: <a href="#">support@geeksui.com</a></p>
                <p>Phone: <span class="text-dark fw-semibold">(000) 123 456 789</span></p>

              </div>
            </div>
          </div>
          <div class="row align-items-center g-0 border-top py-2 mt-6">
            <!-- Desc -->
            <div class="col-lg-4 col-md-5 col-12">
                <span>© <span id="copyright2">
                  <script>document.getElementById('copyright2').appendChild(document.createTextNode(new Date().getFullYear()))</script>
              </span> Geeks-UI, Inc. All Rights Reserved</span>
                </div>

              <!-- Links -->
            <div class="col-12 col-md-7 col-lg-8 d-md-flex justify-content-end">
                <nav class="nav nav-footer">
                    <a class="nav-link ps-0" href="#">Privacy Policy</a>
                    <a class="nav-link px-2 px-md-3" href="#">Cookie Notice  </a>

                    <a class="nav-link" href="#">Terms of Use</a>
                </nav>
            </div>
        </div>
        </div>
      </footer>



  <!-- Scripts -->

  <!-- Libs JS -->
<script src="{{asset('assets/libs/typed.js/dist/typed.umd.js')}}"></script>
<script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>


<!-- Theme JS -->
<script src="{{asset('assets/libs/simplebar/dist/simplebar.min.js')}}"></script>

  <script src="{{asset('assets/js/theme.min.js')}}"></script>
  <script src="{{asset('assets/libs/tiny-slider/dist/min/tiny-slider.js')}}"></script>
  <script src="{{asset('assets/libs/@popperjs/core/dist/umd/popper.min.js')}}"></script>

  <script src="{{asset('assets/libs/tippy.js/dist/tippy-bundle.umd.min.js')}}"></script>
  <script src="{{asset('assets/js/vendors/tnsSlider.js')}}"></script>
  <script src="{{asset('assets/js/vendors/tooltip.js')}}"></script>
</body>

</html>

