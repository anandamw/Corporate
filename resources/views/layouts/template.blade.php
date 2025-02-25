 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- PWA  -->
<meta name="theme-color" content="#6777ef"/>
<link rel="apple-touch-icon" href="{{ asset('logo.png') }}">
<link rel="manifest" href="{{ asset('manifest.json') }}">
     @include('layouts.style')
 </head>

 <body class="g-sidenav-show  bg-gray-100">
     @include('sweetalert::alert')

     <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 bg-slate-900 fixed-start " id="sidenav-main">
         <div class="sidenav-header">
             <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                 aria-hidden="true" id="iconSidenav"></i>
             <a class="navbar-brand d-flex align-items-center m-0"
                 href=" https://demos.creative-tim.com/corporate-ui-dashboard/pages/dashboard.html " target="_blank">
                 <span class="font-weight-bold text-lg">Corporate UI</span>
             </a>
         </div>
         @include('layouts.sidebar')
     </aside>

     <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

         <!-- Navbar -->

         <nav class="navbar navbar-main navbar-expand-lg mx-5 px-0 shadow-none rounded" id="navbarBlur"
             navbar-scroll="true">
             <div class="container-fluid py-1 px-2">
                 <nav aria-label="breadcrumb">
                     <ol class="breadcrumb bg-transparent mb-1 pb-0 pt-1 px-0 me-sm-6 me-5">
                         <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark"
                                 href="/dashboard">Dashboard</a></li>
                         <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{ $title }}
                         </li>
                     </ol>
                     <h6 class="font-weight-bold mb-0">{{ $title }}</h6>
                 </nav>
                 <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                     <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                         <div class="input-group">
                             <span class="input-group-text text-body bg-white  border-end-0 ">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none"
                                     viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                     <path stroke-linecap="round" stroke-linejoin="round"
                                         d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                 </svg>
                             </span>
                             <input type="text" class="form-control ps-0" placeholder="Search">
                         </div>
                     </div>
                     <ul class="navbar-nav  justify-content-end">
                         <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                             <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                 <div class="sidenav-toggler-inner">
                                     <i class="sidenav-toggler-line"></i>
                                     <i class="sidenav-toggler-line"></i>
                                     <i class="sidenav-toggler-line"></i>
                                 </div>
                             </a>
                         </li>
                         <li class="nav-item px-3 d-flex align-items-center">
                             <a href="javascript:;" class="nav-link text-body p-0">
                                 <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg"
                                     class="fixed-plugin-button-nav cursor-pointer" viewBox="0 0 24 24"
                                     fill="currentColor">
                                     <path fill-rule="evenodd"
                                         d="M11.078 2.25c-.917 0-1.699.663-1.85 1.567L9.05 4.889c-.02.12-.115.26-.297.348a7.493 7.493 0 00-.986.57c-.166.115-.334.126-.45.083L6.3 5.508a1.875 1.875 0 00-2.282.819l-.922 1.597a1.875 1.875 0 00.432 2.385l.84.692c.095.078.17.229.154.43a7.598 7.598 0 000 1.139c.015.2-.059.352-.153.43l-.841.692a1.875 1.875 0 00-.432 2.385l.922 1.597a1.875 1.875 0 002.282.818l1.019-.382c.115-.043.283-.031.45.082.312.214.641.405.985.57.182.088.277.228.297.35l.178 1.071c.151.904.933 1.567 1.85 1.567h1.844c.916 0 1.699-.663 1.85-1.567l.178-1.072c.02-.12.114-.26.297-.349.344-.165.673-.356.985-.57.167-.114.335-.125.45-.082l1.02.382a1.875 1.875 0 002.28-.819l.923-1.597a1.875 1.875 0 00-.432-2.385l-.84-.692c-.095-.078-.17-.229-.154-.43a7.614 7.614 0 000-1.139c-.016-.2.059-.352.153-.43l.84-.692c.708-.582.891-1.59.433-2.385l-.922-1.597a1.875 1.875 0 00-2.282-.818l-1.02.382c-.114.043-.282.031-.449-.083a7.49 7.49 0 00-.985-.57c-.183-.087-.277-.227-.297-.348l-.179-1.072a1.875 1.875 0 00-1.85-1.567h-1.843zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z"
                                         clip-rule="evenodd" />
                                 </svg>
                             </a>
                         </li>
                         <li class="nav-item dropdown pe-2 d-flex align-items-center">
                             <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                                 data-bs-toggle="dropdown" aria-expanded="false">
                                 <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 24 24" fill="currentColor" class="cursor-pointers">
                                     <path fill-rule="evenodd"
                                         d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z"
                                         clip-rule="evenodd" />
                                 </svg>
                             </a>
                             <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                                 aria-labelledby="dropdownMenuButton">
                                 <li class="mb-2">
                                     <a class="dropdown-item border-radius-md" href="javascript:;">
                                         <div class="d-flex py-1">
                                             <div class="my-auto">
                                                 <img src="{{ asset('') }}assets/img/team-2.jpg"
                                                     class="avatar avatar-sm border-radius-sm  me-3 ">
                                             </div>
                                             <div class="d-flex flex-column justify-content-center">
                                                 <h6 class="text-sm font-weight-normal mb-1">
                                                     <span class="font-weight-bold">New message</span> from Laur
                                                 </h6>
                                                 <p class="text-xs text-secondary mb-0 d-flex align-items-center ">
                                                     <i class="fa fa-clock opacity-6 me-1"></i>
                                                     13 minutes ago
                                                 </p>
                                             </div>
                                         </div>
                                     </a>
                                 </li>
                                 <li class="mb-2">
                                     <a class="dropdown-item border-radius-md" href="javascript:;">
                                         <div class="d-flex py-1">
                                             <div class="my-auto">
                                                 <img src="{{ asset('') }}assets/img/small-logos/logo-google.svg"
                                                     class="avatar avatar-sm border-radius-sm bg-gradient-dark p-2  me-3 ">
                                             </div>
                                             <div class="d-flex flex-column justify-content-center">
                                                 <h6 class="text-sm font-weight-normal mb-1">
                                                     <span class="font-weight-bold">New report</span> by Google
                                                 </h6>
                                                 <p class="text-xs text-secondary mb-0 d-flex align-items-center ">
                                                     <i class="fa fa-clock opacity-6 me-1"></i>
                                                     1 day
                                                 </p>
                                             </div>
                                         </div>
                                     </a>
                                 </li>
                                 <li>
                                     <a class="dropdown-item border-radius-md" href="javascript:;">
                                         <div class="d-flex py-1">
                                             <div
                                                 class="avatar avatar-sm border-radius-sm bg-slate-800  me-3  my-auto">
                                                 <svg width="12px" height="12px" viewBox="0 0 43 36"
                                                     version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                     <title>credit-card</title>
                                                     <g stroke="none" stroke-width="1" fill="none"
                                                         fill-rule="evenodd">
                                                         <g transform="translate(-2169.000000, -745.000000)"
                                                             fill="#FFFFFF" fill-rule="nonzero">
                                                             <g transform="translate(1716.000000, 291.000000)">
                                                                 <g transform="translate(453.000000, 454.000000)">
                                                                     <path class="color-background"
                                                                         d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                         opacity="0.593633743"></path>
                                                                     <path class="color-background"
                                                                         d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                     </path>
                                                                 </g>
                                                             </g>
                                                         </g>
                                                     </g>
                                                 </svg>
                                             </div>
                                             <div class="d-flex flex-column justify-content-center">
                                                 <h6 class="text-sm font-weight-normal mb-1">
                                                     Payment successfully completed
                                                 </h6>
                                                 <p class="text-xs text-secondary d-flex align-items-center mb-0 ">
                                                     <i class="fa fa-clock opacity-6 me-1"></i>
                                                     2 days
                                                 </p>
                                             </div>
                                         </div>
                                     </a>
                                 </li>
                             </ul>
                         </li>
                         <li class="nav-item ps-2 d-flex align-items-center">
                             <a href="javascript:;" class="nav-link text-body p-0">
                                 <img src="{{ asset('') }}assets/img/team-2.jpg" class="avatar avatar-sm"
                                     alt="avatar" />
                             </a>
                         </li>
                     </ul>
                 </div>
             </div>
         </nav>

         <div class="container-fluid py-4 px-5">
             <!-- End Navbar -->

             @yield('content')






             <footer class="footer pt-3  ">
                 <div class="container-fluid">
                     <div class="row align-items-center justify-content-lg-between">
                         <div class="col-lg-6 mb-lg-0 mb-4">
                             <div class="copyright text-center text-xs text-muted text-lg-start">
                                 Copyright
                                 ©
                                 <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                                 <script>
                                     document.write(new Date().getFullYear())
                                 </script>
                                 Corporate UI by
                                 <a href="https://www.creative-tim.com" class="text-secondary"
                                     target="_blank">Creative
                                     Tim</a>.
                             </div>
                         </div>
                         <div class="col-lg-6">
                             <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                 <li class="nav-item">
                                     <a href="https://www.creative-tim.com" class="nav-link text-xs text-muted"
                                         target="_blank">Creative Tim</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="https://www.creative-tim.com/presentation"
                                         class="nav-link text-xs text-muted" target="_blank">About Us</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="https://www.creative-tim.com/blog" class="nav-link text-xs text-muted"
                                         target="_blank">Blog</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="https://www.creative-tim.com/license"
                                         class="nav-link text-xs pe-0 text-muted" target="_blank">License</a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </footer>
         </div>
     </main>


     <div class="fixed-plugin">
         <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
             <i class="fa fa-cog py-2"></i>
         </a>
         <div class="card shadow-lg ">
             <div class="card-header pb-0 pt-3 ">
                 <div class="float-start">
                     <h5 class="mt-3 mb-0">Corporate UI Configurator</h5>
                     <p>See our dashboard options.</p>
                 </div>
                 <div class="float-end mt-4">
                     <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                         <i class="fa fa-close"></i>
                     </button>
                 </div>
                 <!-- End Toggle Button -->
             </div>
             <hr class="horizontal dark my-1">
             <div class="card-body pt-sm-3 pt-0">
                 <!-- Sidebar Backgrounds -->
                 <div>
                     <h6 class="mb-0">Sidebar Colors</h6>
                 </div>
                 <a href="javascript:void(0)" class="switch-trigger background-color">
                     <div class="badge-colors my-2 text-start">
                         <span class="badge filter bg-gradient-primary active" data-color="primary"
                             onclick="sidebarColor(this)"></span>
                         <span class="badge filter bg-gradient-info" data-color="info"
                             onclick="sidebarColor(this)"></span>
                         <span class="badge filter bg-gradient-success" data-color="success"
                             onclick="sidebarColor(this)"></span>
                         <span class="badge filter bg-gradient-warning" data-color="warning"
                             onclick="sidebarColor(this)"></span>
                         <span class="badge filter bg-gradient-danger" data-color="danger"
                             onclick="sidebarColor(this)"></span>
                     </div>
                 </a>
                 <!-- Sidenav Type -->
                 <div class="mt-3">
                     <h6 class="mb-0">Sidenav Type</h6>
                     <p class="text-sm">Choose between 2 different sidenav types.</p>
                 </div>
                 <div class="d-flex">
                     <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-slate-900"
                         onclick="sidebarType(this)">Dark</button>
                     <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white"
                         onclick="sidebarType(this)">White</button>
                 </div>
                 <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                 <!-- Navbar Fixed -->
                 <div class="mt-3">
                     <h6 class="mb-0">Navbar Fixed</h6>
                 </div>
                 <div class="form-check form-switch ps-0">
                     <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                         onclick="navbarFixed(this)">
                 </div>
                 <hr class="horizontal dark my-sm-4">
                 <a class="btn bg-gradient-dark w-100"
                     href="https://www.creative-tim.com/product/corporate-ui-dashboard">Free Download</a>
                 <a class="btn btn-outline-dark w-100"
                     href="https://www.creative-tim.com/learning-lab/bootstrap/license/corporate-ui-dashboard">View
                     documentation</a>
                 <div class="w-100 text-center">
                     <a class="github-button" href="https://github.com/creativetimofficial/corporate-ui-dashboard"
                         data-icon="octicon-star" data-size="large" data-show-count="true"
                         aria-label="Star creativetimofficial/corporate-ui-dashboard on GitHub">Star</a>
                     <h6 class="mt-3">Thank you for sharing!</h6>
                     <a href="https://twitter.com/intent/tweet?text=Check%20Corporate%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fcorporate-ui-dashboard"
                         class="btn btn-dark mb-0 me-2" target="_blank">
                         <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                     </a>
                     <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/corporate-ui-dashboard"
                         class="btn btn-dark mb-0 me-2" target="_blank">
                         <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                     </a>
                 </div>
             </div>
         </div>
     </div>
     <script src="{{ asset('sw.js') }}"></script>
<script>
   if ("serviceWorker" in navigator) {
      // Register a service worker hosted at the root of the
      // site using the default scope.
      navigator.serviceWorker.register("/sw.js").then(
      (registration) => {
         console.log("Service worker registration succeeded:", registration);
      },
      (error) => {
         console.error(`Service worker registration failed: ${error}`);
      },
    );
  } else {
     console.error("Service workers are not supported.");
  }
</script>
     @include('layouts.script')
 </body>

 </html>
