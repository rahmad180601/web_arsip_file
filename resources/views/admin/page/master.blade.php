<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Zeta admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Zeta admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    {{-- <link rel="icon" href="../assets/images/logo/favicon-icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/logo/favicon-icon.png" type="image/x-icon"> --}}
    <title>Admin Panel - Arsip File </title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/assets/css/vendors/font-awesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/assets/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/assets/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/assets/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/assets/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/assets/css/vendors/animate.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/assets/css/vendors/date-picker.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/assets/css/vendors/photoswipe.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/assets/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('assets/backend/assets/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/assets/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/assets/css/vendors/datatables.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/backend/assets/css/vendors/datatable-extension.css') }}">
    <link rel="stylesheet" href="{{asset('assets/backend/assets/dropify-master/css/dropify.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @yield('styless')
    <style>
    
    </style>
</head>

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="loader">
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-ball"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper row m-0">
                <div class="header-logo-wrapper col-auto p-0">
                    {{-- <div class="logo-wrapper"><a href="index.html"><img class="img-fluid"
                                src="{{asset($web->logo_url)}}" alt=""></a></div> --}}
                <div class="toggle-sidebar">
                    <div class="status_toggle sidebar-toggle d-flex">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <g>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M21.0003 6.6738C21.0003 8.7024 19.3551 10.3476 17.3265 10.3476C15.2979 10.3476 13.6536 8.7024 13.6536 6.6738C13.6536 4.6452 15.2979 3 17.3265 3C19.3551 3 21.0003 4.6452 21.0003 6.6738Z"
                                        stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.3467 6.6738C10.3467 8.7024 8.7024 10.3476 6.6729 10.3476C4.6452 10.3476 3 8.7024 3 6.6738C3 4.6452 4.6452 3 6.6729 3C8.7024 3 10.3467 4.6452 10.3467 6.6738Z"
                                        stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M21.0003 17.2619C21.0003 19.2905 19.3551 20.9348 17.3265 20.9348C15.2979 20.9348 13.6536 19.2905 13.6536 17.2619C13.6536 15.2333 15.2979 13.5881 17.3265 13.5881C19.3551 13.5881 21.0003 15.2333 21.0003 17.2619Z"
                                        stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.3467 17.2619C10.3467 19.2905 8.7024 20.9348 6.6729 20.9348C4.6452 20.9348 3 19.2905 3 17.2619C3 15.2333 4.6452 13.5881 6.6729 13.5881C8.7024 13.5881 10.3467 15.2333 10.3467 17.2619Z"
                                        stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="left-side-header col ps-0 d-none d-md-block">

            </div>
            <div class="nav-right col-10 col-sm-6 pull-right right-header p-0">
                <ul class="nav-menus">
                    <li>
                        <div class="mode animated backOutRight">
                            <svg class="lighticon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <g>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M18.1377 13.7902C19.2217 14.8742 16.3477 21.0542 10.6517 21.0542C6.39771 21.0542 2.94971 17.6062 2.94971 13.3532C2.94971 8.05317 8.17871 4.66317 9.67771 6.16217C10.5407 7.02517 9.56871 11.0862 11.1167 12.6352C12.6647 14.1842 17.0537 12.7062 18.1377 13.7902Z"
                                            stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </g>
                                </g>
                            </svg>
                            <svg class="darkicon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z">
                                </path>
                                <path
                                    d="M18.3117 5.68834L18.4286 5.57143M5.57144 18.4286L5.68832 18.3117M12 3.07394V3M12 21V20.9261M3.07394 12H3M21 12H20.9261M5.68831 5.68834L5.5714 5.57143M18.4286 18.4286L18.3117 18.3117"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                    </li>
                    <li class="d-md-none resp-serch-input">
                        <div class="resp-serch-box"><i data-feather="search"></i></div>
                        <div class="form-group search-form">
                            <input type="text" placeholder="Search here...">
                        </div>
                    </li>

                    <li class="onhover-dropdown">
                        {{-- <div class="notification-box">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <g>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M11.9961 2.51416C7.56185 2.51416 5.63519 6.5294 5.63519 9.18368C5.63519 11.1675 5.92281 10.5837 4.82471 13.0037C3.48376 16.4523 8.87614 17.8618 11.9961 17.8618C15.1152 17.8618 20.5076 16.4523 19.1676 13.0037C18.0695 10.5837 18.3571 11.1675 18.3571 9.18368C18.3571 6.5294 16.4295 2.51416 11.9961 2.51416Z"
                                            stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M14.306 20.5122C13.0117 21.9579 10.9927 21.9751 9.68604 20.5122"
                                            stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </g>
                                </g>
                            </svg><span class="badge rounded-pill badge-warning">1 </span>
                        </div> --}}
                        <div class="onhover-show-div notification-dropdown">
                            {{-- <div class="dropdown-title">
                                <h3>Notification</h3><a class="f-right" href="cart.html"> <i data-feather="bell">
                                    </i></a>
                            </div> --}}
                            {{-- <ul class="custom-scrollbar">
                                    @foreach (\App\Donation::where('is_verified', 0)->orderBy('created_at', 'DESC')->get() as $item)
                                    <li>
                                        <div class="media">
                                            <div class="notification-img bg-light-primary">                                                
                                                @if ($item->profile_image != null)
                                                <img src="{{URL($item->profile_image)}}" alt="" width="32px"
                            height="32px">
                            @else
                            <img src="{{URL('images/profile_image_default.png')}}" alt="" width="32px" height="32px">
                            @endif
                        </div>
                        <div class="media-body">
                            <h5> <a class="f-14 m-0" href="{{url('admin/detail-donasi-'.$item->id)}}">
                                    <td>{{$item->user->name}}</td>
                                </a></h5>
                            <p>Donasi Sebesar Rp {{$item->nominal}}</p><br><span>{{$item->created_at}}</span>
                        </div>
                        <div class="notification-right">
                        </div>
            </div>
            </li>
            @endforeach
            <li class="p-0"><a class="btn btn-primary" href="#">Show all</a></li>
            </ul> --}}
        </div>
        </li>
        <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <g>
                            <path d="M2.99609 8.71995C3.56609 5.23995 5.28609 3.51995 8.76609 2.94995" stroke="#130F26"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path
                                d="M8.76616 20.99C5.28616 20.41 3.56616 18.7 2.99616 15.22L2.99516 15.224C2.87416 14.504 2.80516 13.694 2.78516 12.804"
                                stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path
                                d="M21.2446 12.804C21.2246 13.694 21.1546 14.504 21.0346 15.224L21.0366 15.22C20.4656 18.7 18.7456 20.41 15.2656 20.99"
                                stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path d="M15.2661 2.94995C18.7461 3.51995 20.4661 5.23995 21.0361 8.71995" stroke="#130F26"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </g>
                </svg></a></li>
        <li class="profile-nav onhover-dropdown pe-0 py-0 me-0">
            <div class="media profile-media">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <g>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M9.55851 21.4562C5.88651 21.4562 2.74951 20.9012 2.74951 18.6772C2.74951 16.4532 5.86651 14.4492 9.55851 14.4492C13.2305 14.4492 16.3665 16.4342 16.3665 18.6572C16.3665 20.8802 13.2505 21.4562 9.55851 21.4562Z"
                                stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M9.55849 11.2776C11.9685 11.2776 13.9225 9.32356 13.9225 6.91356C13.9225 4.50356 11.9685 2.54956 9.55849 2.54956C7.14849 2.54956 5.19449 4.50356 5.19449 6.91356C5.18549 9.31556 7.12649 11.2696 9.52749 11.2776H9.55849Z"
                                stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path
                                d="M16.8013 10.0789C18.2043 9.70388 19.2383 8.42488 19.2383 6.90288C19.2393 5.31488 18.1123 3.98888 16.6143 3.68188"
                                stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path
                                d="M17.4608 13.6536C19.4488 13.6536 21.1468 15.0016 21.1468 16.2046C21.1468 16.9136 20.5618 17.6416 19.6718 17.8506"
                                stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </g>
                    </g>
                </svg>
            </div>
            <ul class="profile-dropdown onhover-show-div">
                {{-- <li><a href="#"><i data-feather="user"></i><span>Account </span></a>
                </li> --}}
                <li><a href="{{ route('logout') }}"><i data-feather="log-in"> </i><span>Log Out</span></a></li>
            </ul>
        </li>
        </ul>
    </div>
    <script class="result-template" type="text/x-handlebars-template">
        <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">Human</div>
            </div>
            </div>
          </script>
    <script class="empty-template" type="text/x-handlebars-template">
        <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>
                </script>
    </div>
    </div>
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
            <div>
                <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light"
                            src="{{ asset('assets/backend/assets/images/logo-icon.png') }}" alt=""><img
                            class="img-fluid for-dark"
                            src="{{ asset('assets/backend/assets/images/logo-icon.png') }}" alt=""></a>
                    <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                </div>
                <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid"
                            src="{{ asset('assets/backend/assets/images/logo-icon.png') }}" alt=""></a></div>
                <nav class="sidebar-main">
                    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                    <div id="sidebar-menu">
                        <ul class="sidebar-links" id="simple-bar">
                            <li class="back-btn"><a href="index.html"><img class="img-fluid"
                                        src="{{ asset('assets/backend/assets/images/logo-icon.png') }}" alt=""></a>
                                <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                        aria-hidden="true"> </i></div>
                            </li>

                            <li class="sidebar-list"><a
                                class="sidebar-link sidebar-title link-nav {{ request()->is('admin') ? 'active' : ''}}"
                                href="{{url('admin')}}">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                      <g> 
                                        <path d="M9.07861 16.1355H14.8936" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.3999 13.713C2.3999 8.082 3.0139 8.475 6.3189 5.41C7.7649 4.246 10.0149 2 11.9579 2C13.8999 2 16.1949 4.235 17.6539 5.41C20.9589 8.475 21.5719 8.082 21.5719 13.713C21.5719 22 19.6129 22 11.9859 22C4.3589 22 2.3999 22 2.3999 13.713Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                      </g>
                                    </g>
                                  </svg><span>Dashboard</span></a>
                        </li> 
                            <li class="sidebar-list"><a
                                    class="sidebar-link sidebar-title link-nav {{ request()->is('admin/daftar-arsip*') ? 'active' : ''}}"
                                    href="{{url('admin/daftar-arsip')}}">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <g>
                                                <path d="M15.596 15.6963H8.37598" stroke="#130F26" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M15.596 11.9365H8.37598" stroke="#130F26" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M11.1312 8.17725H8.37622" stroke="#130F26" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3.61011 12C3.61011 18.937 5.70811 21.25 12.0011 21.25C18.2951 21.25 20.3921 18.937 20.3921 12C20.3921 5.063 18.2951 2.75 12.0011 2.75C5.70811 2.75 3.61011 5.063 3.61011 12Z"
                                                    stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </g>
                                        </g>
                                    </svg><span>Daftar Arsip File</span></a>
                            </li>

                            <li class="sidebar-list"><a
                                class="sidebar-link sidebar-title link-nav {{ request()->is('admin/about') ? 'active' : ''}}"
                                href="{{url('admin/about')}}">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M9.92234 21.8083C6.10834 21.8083 2.85034 21.2313 2.85034 18.9213C2.85034 16.6113 6.08734 14.5103 9.92234 14.5103C13.7363 14.5103 16.9943 16.5913 16.9943 18.9003C16.9943 21.2093 13.7573 21.8083 9.92234 21.8083Z"
                                                stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M9.92231 11.2159C12.4253 11.2159 14.4553 9.1859 14.4553 6.6829C14.4553 4.1789 12.4253 2.1499 9.92231 2.1499C7.41931 2.1499 5.38931 4.1789 5.38931 6.6829C5.38031 9.1769 7.39631 11.2069 9.89031 11.2159H9.92231Z"
                                                stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path d="M19.1313 8.12891V12.1389" stroke="#130F26" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M21.1776 10.1338H17.0876" stroke="#130F26" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                    </g>
                                </svg><span>About</span></a>
                        </li>

                            
                        </ul>
                    </div>
                    {{-- <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div> --}}
                </nav>
            </div>

        </div>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            @yield('content')
            <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Arsip File</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <!-- latest jquery-->
    <script src="{{ asset('assets/backend/assets/js/jquery-3.5.1.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('assets/backend/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('assets/backend/assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    <script src="{{ asset('assets/backend/assets/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/js/scrollbar/custom.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('assets/backend/assets/js/config.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('assets/backend/assets/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/js/chart/knob/knob.min.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/js/chart/knob/knob-chart.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    {{-- <script src="{{ asset('assets/backend/assets/js/notify/bootstrap-notify.min.js') }}"></script> --}}
    <script src="{{ asset('assets/backend/assets/js/dashboard/default.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/js/notify/index.js') }}"></script>
    {{-- <script src="{{ asset('assets/backend/assets/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script> --}}
    <script src="{{ asset('assets/backend/assets/js/photoswipe/photoswipe.min.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/js/photoswipe/photoswipe-ui-default.min.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/js/photoswipe/photoswipe.js') }}"></script>
    {{-- <script src="{{ asset('assets/backend/assets/js/typeahead/handlebars.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/js/typeahead/typeahead.custom.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/js/typeahead-search/handlebars.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/js/typeahead-search/typeahead-custom.js') }}"></script> --}}
    <script src="{{ asset('assets/backend/assets/js/height-equal.js') }}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('assets/backend/assets/js/script.js') }}"></script>
    {{-- <script src="{{ asset('assets/backend/assets/js/theme-customizer/customizer.js') }}"></script> --}}

    <script src="{{ asset('assets/backend/assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    {{-- <script src="{{ asset('assets/backend/assets/js/datatable/datatables/datatable.custom.js') }}"></script>

    <script src="{{ asset('assets/backend/assets/js/datatable/datatable-extension/dataTables.buttons.min.js') }}">
    </script>
    <script src="{{ asset('assets/backend/assets/js/datatable/datatable-extension/dataTables.autoFill.min.js') }}">
    </script>
    <script src="{{ asset('assets/backend/assets/js/datatable/datatable-extension/dataTables.select.min.js') }}">
    </script>
    <script src="{{ asset('assets/backend/assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js') }}">
    </script>
    <script src="{{ asset('assets/backend/assets/js/datatable/datatable-extension/dataTables.responsive.min.js') }}">
    </script>
    <script src="{{ asset('assets/backend/assets/js/datatable/datatable-extension/dataTables.keyTable.min.js') }}">
    </script>
    <script src="{{ asset('assets/backend/assets/js/datatable/datatable-extension/dataTables.colReorder.min.js') }}">
    </script>
    <script src="{{ asset('assets/backend/assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js') }}">
    </script>
    <script src="{{ asset('assets/backend/assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js') }}">
    </script>
    <script src="{{ asset('assets/backend/assets/js/datatable/datatable-extension/dataTables.scroller.min.js') }}">
    </script>

    <script src="{{ asset('assets/backend/assets/js/datatable/datatable-extension/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/js/datatable/datatable-extension/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/js/datatable/datatable-extension/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/js/datatable/datatable-extension/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js') }}">
    </script>
    <script src="{{ asset('assets/backend/assets/js/datatable/datatable-extension/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/js/datatable/datatable-extension/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/backend/assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js') }}">
    </script>
    <script src="{{ asset('assets/backend/assets/js/datatable/datatable-extension/custom.js') }}"></script> --}}
    <script src="{{ asset('assets/backend/assets/dropify-master/js/dropify.js') }}"></script>
    {{-- <script src="{{ asset('assets/backend/assets/js/sweet-alert/sweetalert.min.js')}}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    {{-- Select 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @yield('scripts')
    <script>
        // $(document).ready(function () {
        //     // Basic
        //     sendRequest();
        //     $('.dropify').dropify();
        // });

        $(document).ready(function () {
            // Basic            
            $('#basic-1').DataTable();
        });

        // $(document).ready(function () {
        //     if ($.fn.DataTable.isDataTable('#basic-1')) {
        //         $('#basic-1').DataTable().destroy();
        //     }
        //     $('#basic-1').DataTable({
        //         "paging": false,
        //         "searching": true,
        //         "info": false,
        //         "ordering": true
        //     });
        // });


        // $(document).ready(function () {
        //     $('.select-2').select2();
        // });

        $(document).ready(function () {
            // Basic            
            $('.js-example-basic-single').select2();
        });

        // $(document).ready(function () {
        //     // Basic
        //     $('.dropify').dropify();
        // });

        // $(document).ready(function () {
        //     $('#summernote').summernote({
        //         callbacks: {
        //             onChange: function (contents, $editable) {
        //                 //find images on note-editable class, 
        //                 var imgs = $('.note-editable').find("img");
        //                 $.each(imgs, function (index, img) {
        //                     //bootstrap 3
        //                     $(img).addClass("img-summernote");

        //                     //bootstrap 4
        //                     //$(img).addClass("img-fluid");
        //                 })
        //             }
        //         }
        //     });

        //     $('.summernote').summernote({
        //         callbacks: {
        //             onChange: function (contents, $editable) {
        //                 //find images on note-editable class, 
        //                 var imgs = $('.note-editable').find("img");
        //                 $.each(imgs, function (index, img) {
        //                     //bootstrap 3
        //                     $(img).addClass("img-summernote");

        //                     //bootstrap 4
        //                     //$(img).addClass("img-fluid");
        //                 })
        //             }
        //         }
        //     });
        // });

    </script>

    {{-- <script type="text/javascript">
        const BASE_URI = 'http://localhost:8000/'
        const SESSION_ID = 'john'

        const sendRequest = async () => {
            // Here we are using fetch API to send the request
            const response = await fetch(`${BASE_URI}sessions/add`, {
                method: 'POST',
                body: JSON.stringify({
                    id: SESSION_ID,
                    // A string value representing the client type.
                    // Use 'false' for Multi-Device,
                    // or 'true' for Legacy (Normal WhatsApp Web).
                    // This is important since the generated QR is not compatible each other.
                    // So make sure you generated the correct one.
                    isLegacy: 'false',
                }),
                headers: {
                    'Content-Type': 'application/json',
                },
            })

            return response.json()
        }

        ;
        (async () => {
            const response = await sendRequest()

            if (response.success && 'qr' in response.data) {
                // Scan the QR
            }
        })()

    </script> --}}

    <!-- login js-->
    <!-- Plugin used-->
</body>

</html>
