<!doctype html>
<html lang="en" class="theme-fs-md" data-bs-theme-color="default" dir="ltr">


<!-- Mirrored from templates.iqonic.design/socialv-dist/html/dashboard/profile1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Sep 2024 15:32:45 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('page-title')</title>
    <!-- Config Options -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/libs.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/socialv097b.css?v=5.2.0') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/vendor/flatpickr/dist/flatpickr.min.css') }}" />

    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}" />

    <!-- VanillaJS CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/vanillajs-datepicker/dist/css/datepicker.min.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom097b.css?v=5.2.0') }}" />

    <!-- Customizer CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/customizer097b.css?v=5.2.0') }}" />
    <!-- Libs CSS -->

     <link rel="stylesheet" href="{{ asset('assets/css/history.css') }}">

</head>

<body class=" ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->

    <div><img class="w-100 hide" src="assets/images/home/usa.png" alt=""></div>
    <div class="container-fluid">
        <div class="row">


            <div class="iq-top-navbar border-bottom">
                <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar p-lg-0">
                    <div class="container-fluid navbar-inner">

                        <div class="col-md-2 ptb-10">
                            <a href="index.php"
                                class="d-flex align-items-center gap-2 iq-header-logo">
                                <a href="{{ route('index') }}"><img class="w-100 w-60" src="assets/images/home/logo.png" alt=""></a>

                            </a>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-6">

                            <div class="iq-search-bar device-search position-relative d-none d-lg-block">
                                <form action="#" class="searchbox open-modal-search">
                                    <a class="search-link" href="javascript:void(0);">
                                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="7.82491" cy="7.82495" r="6.74142" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12.5137 12.8638L15.1567 15.5" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                    <input type="text" class="text search-input form-control bg-light-subtle"
                                        placeholder="Search for people or groups...">
                                </form>
                                <div class="search-modal-custom">
                                    <div class="search-modal-content">
                                        <div class="py-2 px-3">
                                            <div class="d-flex align-items-center justify-content-between d-lg-none w-100">
                                                <form action="#" class="searchbox w-50" data-bs-toggle="modal" data-bs-target="#searchmodal">
                                                    <a class="search-link" href="javascript:void(0);">
                                                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="7.82491" cy="7.82495" r="6.74142" stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M12.5137 12.8638L15.1567 15.5" stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </a>
                                                    <input type="text" class="text search-input form-control bg-primary-subtle"
                                                        placeholder="Search here...">
                                                </form>
                                                <a href="javascript:void(0);" class="material-symbols-outlined text-dark"
                                                    data-bs-dismiss="modal">close</a>
                                            </div>
                                            <div class="d-none d-lg-flex align-items-center justify-content-between w-100">
                                                <h4 class="modal-title" id="exampleModalFullscreenLabel">Recent</h4>
                                                <a class="text-dark" href="javascript:void(0);">Clear All</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-header-scroll">
                                        <div class="search-modal-body">
                                            <div class="d-flex d-lg-none align-items-center justify-content-between w-100 p-3 pb-0">
                                                <h5 class="modal-title h4" id="exampleModalFullscreenLabel">Recent</h5>
                                                <a href="javascript:void(0);" class="text-dark">Clear All</a>
                                            </div>
                                            <div class="d-flex align-items-center search-hover py-2 px-3">
                                                <div class="flex-shrink-0">
                                                    <img src="./assets/images/page-img/19.jpg"
                                                        class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                                                </div>
                                                <div class="d-flex ms-3 w-100 justify-content-between">
                                                    <div class="d-flex flex-column">
                                                        <div>
                                                            <a href="javascript:void(0);" class="h6">Paige Turner</a>
                                                            <span class="profile-status-online"></span>
                                                        </div>
                                                        <span class="mb-0">Paige001</span>
                                                    </div>
                                                    <a href="javascript:void(0);"
                                                        class="material-symbols-outlined text-dark font-size-16">close</a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center search-hover py-2 px-3">
                                                <div class="flex-shrink-0">
                                                    <img src="./assets/images/page-img/18.jpg"
                                                        class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                                                </div>
                                                <div class="d-flex ms-3 w-100 justify-content-between">
                                                    <div class="d-flex flex-column">
                                                        <div>
                                                            <a href="javascript:void(0);" class="h6">Monty Carlo</a>
                                                            <span class="profile-status-online"></span>
                                                        </div>
                                                        <span>Carlo.m</span>
                                                    </div>
                                                    <a href="javascript:void(0);"
                                                        class="material-symbols-outlined text-dark font-size-16">close</a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center search-hover py-2 px-3">
                                                <div class="flex-shrink-0">
                                                    <img src="./assets/images/page-img/20.jpg"
                                                        class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                                                </div>
                                                <div class="d-flex ms-3 w-100 justify-content-between">
                                                    <div class="d-flex flex-column">
                                                        <div>
                                                            <a href="javascript:void(0);" class="h6">Paul Molive</a>
                                                            <span class="profile-status-offline"></span>
                                                        </div>
                                                        <span>Paul.45</span>
                                                    </div>
                                                    <a href="javascript:void(0);"
                                                        class="material-symbols-outlined text-dark font-size-16">close</a>
                                                </div>
                                            </div>
                                            <div class="py-2 px-3">
                                                <h5 class="modal-title" id="exampleModalFullscreenLabel">Suggestion</h5>
                                            </div>
                                            <div class="d-flex align-items-center search-hover py-2 px-3">
                                                <div class="flex-shrink-0">
                                                    <img src="./assets/images/user/06.jpg"
                                                        class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                                                </div>
                                                <div class="d-flex ms-3 w-100 justify-content-between">
                                                    <div class="d-flex flex-column">
                                                        <a href="javascript:void(0);" class="h6">Annette Black</a>
                                                        <span>Followed by Jerome_bell + 2 more</span>
                                                    </div>
                                                    <a href="javascript:void(0);"
                                                        class="material-symbols-outlined text-dark font-size-16">close</a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center search-hover py-2 px-3">
                                                <div class="flex-shrink-0">
                                                    <img src="./assets/images/user/08.jpg"
                                                        class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                                                </div>
                                                <div class="d-flex ms-3 w-100 justify-content-between">
                                                    <div class="d-flex flex-column">
                                                        <a href="javascript:void(0);" class="h6">Ellyse Perry</a>
                                                        <span>Followed by _@rina</span>
                                                    </div>
                                                    <a href="javascript:void(0);"
                                                        class="material-symbols-outlined text-dark font-size-16">close</a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center search-hover py-2 px-3">
                                                <div class="flex-shrink-0">
                                                    <img src="./assets/images/user/15.jpg"
                                                        class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                                                </div>
                                                <div class="d-flex ms-3 w-100 justify-content-between">
                                                    <div class="d-flex flex-column">
                                                        <a href="javascript:void(0);" class="h6">Pete Sariya</a>
                                                        <span>Followed by chris_18 + 5 more</span>
                                                    </div>
                                                    <a href="javascript:void(0);"
                                                        class="material-symbols-outlined text-dark font-size-16">close</a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center search-hover py-2 px-3">
                                                <div class="flex-shrink-0">
                                                    <img src="./assets/images/user/13.jpg"
                                                        class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                                                </div>
                                                <div class="d-flex ms-3 w-100 justify-content-between">
                                                    <div class="d-flex flex-column">
                                                        <a href="javascript:void(0);" class="h6">Aman Verma</a>
                                                        <span>Followed by Jerome_bell and _@rina </span>
                                                    </div>
                                                    <a href="javascript:void(0);"
                                                        class="material-symbols-outlined text-dark font-size-16">close</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-2 offset-1">
                            <ul class="navbar-nav navbar-list">
                                <li class="nav-item dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle d-flex align-items-center" id="mail-drop"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="assets/images/home/plus.png" alt="">
                                        <img src="assets/images/home/setting.png" alt="">
                                        <span class="mobile-text d-none ms-3">Shopping Cart</span>
                                    </a>
                                    <!-- <div class="sub-drop dropdown-menu header-notification" aria-labelledby="mail-drop">
                                    <div class="card shadow m-0">
                                      <div class="card-header d-flex justify-content-between px-0 pb-4 mx-5 border-bottom">
                                        <div class="header-title">
                                          <h5 class="fw-semibold">Shopping Cart</h5>
                                        </div>
                                      </div>
                                      <div class="card-body p-0 rounded-0">
                                        <div class="item-header-scroll">
                                          <a href="javascript:void(0);" class="text-body">
                                            <div class="thread d-flex justify-content-between rounded-0">
                                              <div>
                                                <img class="avatar-45 rounded align-top" src="./assets/images/store/06.jpg" alt="" loading="lazy">
                                                <div class="ms-3 d-inline-block">
                                                  <h6 class="font-size-14">Casual Shoe</h6>
                                                  <span class="font-size-14 fw-semibold">$75.00</span>
                                                </div>
                                              </div>
                                              <span class="material-symbols-outlined">close</span>
                                            </div>
                                          </a>
                                          <a href="javascript:void(0);" class="text-body">
                                            <div class="thread d-flex justify-content-between rounded-0">
                                              <div>
                                                <img class="avatar-45 rounded align-top" src="./assets/images/store/02.jpg" alt="" loading="lazy">
                                                <div class="ms-3 d-inline-block">
                                                  <h6 class="font-size-14">Harsh Reality book</h6>
                                                  <span class="font-size-14 fw-semibold">$25.00</span>
                                                </div>
                                              </div>
                                              <span class="material-symbols-outlined">close</span>
                                            </div>
                                          </a>
                                          <a href="javascript:void(0);" class="text-body">
                                            <div class="thread d-flex justify-content-between rounded-0">
                                              <div>
                                                <img class="avatar-45 rounded align-top" src="./assets/images/store/01.jpg" alt="" loading="lazy">
                                                <div class="ms-3 d-inline-block">
                                                  <h6 class="font-size-14">The Raze night book</h6>
                                                  <span class="font-size-14 fw-semibold">$15.00</span>
                                                </div>
                                              </div>
                                              <span class="material-symbols-outlined">close</span>
                                            </div>
                                          </a>
                                        </div>
                                        <div class="m-5 mt-4">
                                          <div class="d-flex align-items-center justify-content-between mb-3">
                                            <h6 class="font-size-14 fw-bolder">Subtotal:</h6>
                                            <span class="font-size-14 fw-semibold text-primary">$115.00</span>
                                          </div>
                                          <button type="button" class="btn btn-primary fw-500 w-100">View All Products</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div> -->
                                </li>
                                <li class="nav-item d-lg-none">
                                    <div class="iq-search-bar device-search">
                                        <form action="#" class="searchbox open-modal-search ">
                                            <a class="d-lg-none d-flex text-body" href="javascript:void(0);">
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="7.82491" cy="7.82495" r="6.74142" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round"></circle>
                                                    <path d="M12.5137 12.8638L15.1567 15.5" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </a>
                                        </form>
                                        <div class="search-modal-custom">
                                            <div class="search-modal-content">
                                                <div class="py-2 px-3">
                                                    <div class="d-lg-none w-100">
                                                        <form action="#" class="searchbox" data-bs-toggle="modal" data-bs-target="#searchmodal">
                                                            <a class="search-link" href="javascript:void(0);">
                                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <circle cx="7.82491" cy="7.82495" r="6.74142" stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M12.5137 12.8638L15.1567 15.5" stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                            </a>
                                                            <input type="text" class="text search-input form-control bg-primary-subtle"
                                                                placeholder="Search here...">
                                                        </form>
                                                    </div>
                                                    <div class="d-none d-lg-flex align-items-center justify-content-between w-100">
                                                        <h4 class="modal-title" id="exampleModalFullscreenLabel">Recent</h4>
                                                        <a class="text-dark" href="javascript:void(0);">Clear All</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-header-scroll">
                                                <div class="search-modal-body">
                                                    <div class="d-flex d-lg-none align-items-center justify-content-between w-100 p-3 pb-0">
                                                        <h5 class="modal-title h4" id="exampleModalFullscreenLabel">Recent</h5>
                                                        <a href="javascript:void(0);" class="text-dark">Clear All</a>
                                                    </div>
                                                    <div class="d-flex align-items-center search-hover py-2 px-3">
                                                        <div class="flex-shrink-0">
                                                            <img src="./assets/images/page-img/19.jpg"
                                                                class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                                                        </div>
                                                        <div class="d-flex ms-3 w-100 justify-content-between">
                                                            <div class="d-flex flex-column">
                                                                <div>
                                                                    <a href="javascript:void(0);" class="h6">Paige Turner</a>
                                                                    <span class="profile-status-online"></span>
                                                                </div>
                                                                <span class="mb-0">Paige001</span>
                                                            </div>
                                                            <a href="javascript:void(0);"
                                                                class="material-symbols-outlined text-dark font-size-16">close</a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center search-hover py-2 px-3">
                                                        <div class="flex-shrink-0">
                                                            <img src="./assets/images/page-img/18.jpg"
                                                                class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                                                        </div>
                                                        <div class="d-flex ms-3 w-100 justify-content-between">
                                                            <div class="d-flex flex-column">
                                                                <div>
                                                                    <a href="javascript:void(0);" class="h6">Monty Carlo</a>
                                                                    <span class="profile-status-online"></span>
                                                                </div>
                                                                <span>Carlo.m</span>
                                                            </div>
                                                            <a href="javascript:void(0);"
                                                                class="material-symbols-outlined text-dark font-size-16">close</a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center search-hover py-2 px-3">
                                                        <div class="flex-shrink-0">
                                                            <img src="./assets/images/page-img/20.jpg"
                                                                class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                                                        </div>
                                                        <div class="d-flex ms-3 w-100 justify-content-between">
                                                            <div class="d-flex flex-column">
                                                                <div>
                                                                    <a href="javascript:void(0);" class="h6">Paul Molive</a>
                                                                    <span class="profile-status-offline"></span>
                                                                </div>
                                                                <span>Paul.45</span>
                                                            </div>
                                                            <a href="javascript:void(0);"
                                                                class="material-symbols-outlined text-dark font-size-16">close</a>
                                                        </div>
                                                    </div>
                                                    <div class="py-2 px-3">
                                                        <h5 class="modal-title" id="exampleModalFullscreenLabel">Suggestion</h5>
                                                    </div>
                                                    <div class="d-flex align-items-center search-hover py-2 px-3">
                                                        <div class="flex-shrink-0">
                                                            <img src="./assets/images/user/06.jpg"
                                                                class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                                                        </div>
                                                        <div class="d-flex ms-3 w-100 justify-content-between">
                                                            <div class="d-flex flex-column">
                                                                <a href="javascript:void(0);" class="h6">Annette Black</a>
                                                                <span>Followed by Jerome_bell + 2 more</span>
                                                            </div>
                                                            <a href="javascript:void(0);"
                                                                class="material-symbols-outlined text-dark font-size-16">close</a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center search-hover py-2 px-3">
                                                        <div class="flex-shrink-0">
                                                            <img src="./assets/images/user/08.jpg"
                                                                class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                                                        </div>
                                                        <div class="d-flex ms-3 w-100 justify-content-between">
                                                            <div class="d-flex flex-column">
                                                                <a href="javascript:void(0);" class="h6">Ellyse Perry</a>
                                                                <span>Followed by _@rina</span>
                                                            </div>
                                                            <a href="javascript:void(0);"
                                                                class="material-symbols-outlined text-dark font-size-16">close</a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center search-hover py-2 px-3">
                                                        <div class="flex-shrink-0">
                                                            <img src="./assets/images/user/15.jpg"
                                                                class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                                                        </div>
                                                        <div class="d-flex ms-3 w-100 justify-content-between">
                                                            <div class="d-flex flex-column">
                                                                <a href="javascript:void(0);" class="h6">Pete Sariya</a>
                                                                <span>Followed by chris_18 + 5 more</span>
                                                            </div>
                                                            <a href="javascript:void(0);"
                                                                class="material-symbols-outlined text-dark font-size-16">close</a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center search-hover py-2 px-3">
                                                        <div class="flex-shrink-0">
                                                            <img src="./assets/images/user/13.jpg"
                                                                class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                                                        </div>
                                                        <div class="d-flex ms-3 w-100 justify-content-between">
                                                            <div class="d-flex flex-column">
                                                                <a href="javascript:void(0);" class="h6">Aman Verma</a>
                                                                <span>Followed by Jerome_bell and _@rina </span>
                                                            </div>
                                                            <a href="javascript:void(0);"
                                                                class="material-symbols-outlined text-dark font-size-16">close</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>


                                <li class="nav-item d-none d-lg-none">
                                    <a href="#" class="dropdown-toggle d-flex align-items-center" id="mail-drop-1"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-symbols-outlined">mail</i>
                                        <span class="mobile-text  ms-3">Message</span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown user-dropdown">
                                    <a href="javascript:void(0);" class="d-flex align-items-center dropdown-toggle" id="drop-down-arrow"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <p> <img src="./assets/images/home/profile.png"
                                                class="img-fluid rounded-circle avatar-48 border border-2 me-3" alt="user" loading="lazy">
                                            Profile</p>
                                    </a>
                                    <div class="sub-drop dropdown-menu caption-menu" aria-labelledby="drop-down-arrow">
                                        <div class="card shadow-none m-0">
                                            <div class="card-header ">
                                                <div class="header-title">
                                                    <h5 class="mb-0 ">
                                                        @auth
                                                            {{ Auth::user()->name }}
                                                        @else
                                                            Guest
                                                        @endauth
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="card-body p-0 ">
                                                <div class="d-flex align-items-center iq-sub-card border-0">
                                                    <span class="material-symbols-outlined"> line_style </span>
                                                    <div class="ms-3">
                                                        <a href="#" class="mb-0 h6"> My Profile </a>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center iq-sub-card border-0">
                                                    <span class="material-symbols-outlined"> edit_note </span>
                                                    <div class="ms-3">
                                                        <a href="#" class="mb-0 h6"> Edit Profile </a>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center iq-sub-card border-0">
                                                    <span class="material-symbols-outlined"> manage_accounts </span>
                                                    <div class="ms-3">
                                                        <a href="#" class="mb-0 h6"> Account settings </a>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center iq-sub-card border-0">
                                                    <span class="material-symbols-outlined"> lock </span>
                                                    <div class="ms-3">
                                                        <a href="#" class="mb-0 h6"> Privacy Settings </a>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center iq-sub-card">
                                                    <span class="material-symbols-outlined"> login </span>
                                                    <div class="ms-3">
                                                        <form method="POST" action="{{ route('logout') }}">
                                                            @csrf
                                                            <a href="#" onclick="event.preventDefault(); this.closest('form').submit();" class="mb-0 h6">Sign out</a>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class=" iq-sub-card">
                                                    <h5>Chat Settings</h5>
                                                </div>
                                                <div class="d-flex align-items-center iq-sub-card border-0">
                                                    <i class="material-symbols-outlined text-success md-14"> circle </i>
                                                    <div class="ms-3"> Online </div>
                                                </div>
                                                <div class="d-flex align-items-center iq-sub-card border-0">
                                                    <i class="material-symbols-outlined text-warning md-14"> circle </i>
                                                    <div class="ms-3"> Away </div>
                                                </div>
                                                <div class="d-flex align-items-center iq-sub-card border-0">
                                                    <i class="material-symbols-outlined text-danger md-14"> circle </i>
                                                    <div class="ms-3"> Disconnected </div>
                                                </div>
                                                <div class="d-flex align-items-center iq-sub-card border-0">
                                                    <i class="material-symbols-outlined text-gray md-14"> circle </i>
                                                    <div class="ms-3"> Invisible </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>


                    </div>
                </nav>
            </div>



        </div>
    </div>