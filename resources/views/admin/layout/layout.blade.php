<!doctype html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Propeller Admin Dashboard">
    <meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Chinar Admin Dashboard</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/client/images/logo1.png') }}">

    <!-- Google icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ url('/admin/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ url('/admin/assets/css/propeller.min.css') }}">
<!-- Propeller css -->
<!-- /build -->


    @yield('style')

    <!-- Propeller theme css-->
    <link rel="stylesheet" type="text/css" href="{{ url('/admin/themes/css/propeller-theme.css') }}"/>

    <!-- Propeller admin theme css-->
    <link rel="stylesheet" type="text/css" href="{{ url('/admin/themes/css/propeller-admin.css') }}">

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top pmd-navbar pmd-z-depth">

    <div class="container-fluid">
        <div class="pmd-navbar-right-icon pull-right navigation">
            <!-- Notifications -->
        </div>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a href="javascript:void(0);"
               class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect pull-left margin-r8 pmd-sidebar-toggle"><i
                        class="material-icons">menu</i></a>
        </div>
    </div>

</nav><!--End Nav bar -->
<!-- Header Ends -->

<!-- Sidebar Starts -->
<div class="pmd-sidebar-overlay"></div>

<!-- Left sidebar -->
<aside class="pmd-sidebar sidebar-default pmd-sidebar-slide-push pmd-sidebar-left pmd-sidebar-open bg-fill-darkblue sidebar-with-icons"
       role="navigation">
    <ul class="nav pmd-sidebar-nav">

        <!-- User info -->
        <li class="dropdown pmd-dropdown pmd-user-info visible-xs visible-md visible-sm visible-lg">
            <a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true"
               aria-expandedhref="javascript:void(0);">
                <div class="media-left">
                    <img src="{{ url('/admin/themes/images/user-icon.png') }}" alt="New User">
                </div>
                <div class="media-body media-middle">{{ Auth::user()->name }}</div>
                <div class="media-right media-middle"><i class="dic-more-vert dic"></i></div>
            </a>
            <ul class="dropdown-menu">
                <form id="myform" action="{{ route('logout') }}" method="post">
                    {{ csrf_field() }}
                    <li><a href="javascript:void(0)">{{ Auth::user()->email }}</a></li>
                    <li><input type="submit" value="Logout" class="btn-danger btn"></li>
                </form>
            </ul>
        </li><!-- End user info -->

        <li>
            <a class="pmd-ripple-effect" href="{{ route('admin_index') }}">
                <i class="media-left media-middle">
                    <svg version="1.1" x="0px" y="0px" width="19.83px" height="18px" viewBox="287.725 407.535 19.83 18"
                         enable-background="new 287.725 407.535 19.83 18"
                         xml:space="preserve">
<g>
    <path fill="#C9C8C8" d="M307.555,407.535h-9.108v10.264h9.108V407.535z M287.725,407.535v6.232h9.109v-6.232H287.725z
		 M296.834,415.271h-9.109v10.264h9.109V415.271z M307.555,419.303h-9.108v6.232h9.108V419.303z"/>
</g>
</svg>
                </i>
                <span class="media-body">Dashboard</span>
            </a>
        </li>

        <li class="dropdown pmd-dropdown">
            <a aria-expanded="false" data-toggle="dropdown" class="btn-user  media" data-sidebar="true" href="javascript:void(0)">
                <i class="material-icons md-dark pmd-md" style="color: #ffffff">menu</i>
                <span>Menu</span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('admin_menu') }}">Menu</a></li>
            </ul>
        </li>

        <li class="dropdown pmd-dropdown">
            <a aria-expanded="false" data-toggle="dropdown" class="btn-user  media" data-sidebar="true" href="javascript:void(0)">
                <i class="material-icons md-dark pmd-md" style="color: #ffffff">subject</i>
                <span>Sub Menu</span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('admin_sub_menu') }}">Sub Menu</a></li>
            </ul>
        </li>
        <li class="dropdown pmd-dropdown">
            <a aria-expanded="false" data-toggle="dropdown" class="btn-user  media" data-sidebar="true" href="javascript:void(0)">
                <i class="material-icons md-dark pmd-md" style="color: #ffffff">comment</i>
                <span>Posts</span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('admin_posts') }}">Posts</a></li>
                <li><a href="{{ route('admin_add_new_post') }}">Add new Post</a></li>
            </ul>
        </li>
        <li class="dropdown pmd-dropdown">
            <a aria-expanded="false" data-toggle="dropdown" class="btn-user  media" data-sidebar="true" href="javascript:void(0)">
                <i class="material-icons md-dark pmd-md" style="color: #ffffff">label_outline</i>
                <span>Post Tags</span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('admin_tags') }}">Tags</a></li>
            </ul>
        </li>
        <li class="dropdown pmd-dropdown">
            <a aria-expanded="false" data-toggle="dropdown" class="btn-user  media" data-sidebar="true" href="javascript:void(0)">
                <i class="material-icons md-dark pmd-md" style="color: #ffffff">library_books</i>
                <span>Post Categories</span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('admin_categories') }}">Categories</a></li>
            </ul>
        </li>

        <li class="dropdown pmd-dropdown">
            <a aria-expanded="false" data-toggle="dropdown" class="btn-user  media" data-sidebar="true" href="javascript:void(0)">
                <i class="material-icons md-dark pmd-md" style="color: #ffffff">devices</i>
                <span>SEO</span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('admin_seo') }}">SEO</a></li>
            </ul>
        </li>
        <li class="dropdown pmd-dropdown">
            <a aria-expanded="false" data-toggle="dropdown" class="btn-user  media" data-sidebar="true" href="javascript:void(0)">
                <i class="material-icons md-dark pmd-md" style="color: #ffffff">collections</i>
                <span>Slider</span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('admin_slider') }}">Slider</a></li>
            </ul>
        </li>
        <li class="dropdown pmd-dropdown">
            <a aria-expanded="false" data-toggle="dropdown" class="btn-user  media" data-sidebar="true" href="javascript:void(0)">
                <i class="material-icons md-dark pmd-md" style="color: #ffffff">apps</i>
                <span>Facilities</span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('admin_facility') }}">Facilities</a></li>
            </ul>
        </li>
        <li class="dropdown pmd-dropdown">
            <a aria-expanded="false" data-toggle="dropdown" class="btn-user  media" data-sidebar="true" href="javascript:void(0)">
                <i class="material-icons md-dark pmd-md" style="color: #ffffff">apps</i>
                <span>Settings</span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('admin_setting') }}">Settings</a></li>
            </ul>
        </li>
        <li class="dropdown pmd-dropdown">
            <a aria-expanded="false" data-toggle="dropdown" class="btn-user  media" data-sidebar="true" href="javascript:void(0)">
                <i class="material-icons md-dark pmd-md" style="color: #ffffff">apps</i>
                <span>Exams</span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('admin_exams') }}">Exams</a></li>
                <li><a href="{{ route('admin_add_new_exam') }}">Add New Exam</a></li>
            </ul>
        </li>
        <li class="dropdown pmd-dropdown">
            <a aria-expanded="false" data-toggle="dropdown" class="btn-user  media" data-sidebar="true" href="javascript:void(0)">
                <i class="material-icons md-dark pmd-md" style="color: #ffffff">apps</i>
                <span>Editions</span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('admin_editions') }}">Editions</a></li>
                <li><a href="{{ route('admin_add_new_edition') }}">Add New Edition</a></li>
            </ul>
        </li>
        <li class="dropdown pmd-dropdown">
            <a aria-expanded="false" data-toggle="dropdown" class="btn-user  media" data-sidebar="true" href="javascript:void(0)">
                <i class="material-icons md-dark pmd-md" style="color: #ffffff">apps</i>
                <span>Edition Categories</span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('admin_edition_categories') }}">Edition Categories</a></li>
            </ul>
        </li>


    </ul>
</aside><!-- End Left sidebar -->
<!-- Sidebar Ends -->

<!--content area start-->
<div id="content" class="pmd-content content-area dashboard pmd-content-custom">

    <div class="container-fluid">

        @if (Session::has('success'))
            <div class="container-fluid">
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    {{ Session::get('success') }}
                </div>
            </div>
        @elseif(Session::has('fail'))
            <div class="container-fluid">
                <div class="alert alert-warning" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    {{ Session::get('fail') }}
                </div>
            </div>
        @endif

        @yield('content')

    </div>
</div>


<!-- Footer Starts -->
<!--footer start-->
<footer class="admin-footer">
    <div class="container-fluid">
        <ul class="list-unstyled list-inline">
            <li>
                <span class="pmd-card-subtitle-text">Chinar &copy; <span class="auto-update-year"></span>. All Rights Reserved.</span>
            </li>
            <li class="pull-right for-support">
                <a href="mailto:huseynov.sahib@yahoo.com">
                    <div>
                        <svg x="0px" y="0px" width="38px" height="38px" viewBox="0 0 38 38"
                             enable-background="new 0 0 38 38">
                            <g>
                                <path fill="#A5A4A4" d="M25.621,21.085c-0.642-0.682-1.483-0.682-2.165,0c-0.521,0.521-1.003,1.002-1.524,1.523
		c-0.16,0.16-0.24,0.16-0.44,0.08c-0.321-0.2-0.683-0.32-1.003-0.521c-1.483-0.922-2.726-2.125-3.809-3.488
		c-0.521-0.681-1.002-1.402-1.363-2.205c-0.04-0.16-0.04-0.24,0.08-0.4c0.521-0.481,1.002-1.003,1.524-1.483
		c0.721-0.722,0.721-1.524,0-2.246c-0.441-0.44-0.842-0.842-1.203-1.202c-0.441-0.441-0.842-0.842-1.243-1.243
		c-0.642-0.642-1.483-0.642-2.165,0c-0.521,0.521-1.002,1.002-1.524,1.523c-0.481,0.481-0.722,1.043-0.802,1.685
		c-0.08,1.042,0.16,2.085,0.521,3.047c0.762,2.085,1.925,3.849,3.328,5.532c1.884,2.286,4.17,4.05,6.815,5.333
		c1.203,0.562,2.406,1.002,3.729,1.123c0.922,0.04,1.724-0.201,2.365-0.923c0.441-0.521,0.923-0.922,1.403-1.403
		c0.682-0.722,0.682-1.563,0-2.245C27.265,22.729,26.423,21.927,25.621,21.085z"/>
                                <path fill="#A5A4A4" d="M32.437,5.568C28.869,2,24.098-0.005,19.005-0.005S9.182,2,5.573,5.568C2.005,9.177,0,13.908,0,19
		s1.965,9.823,5.573,13.432c3.568,3.568,8.34,5.573,13.432,5.573s9.823-1.965,13.431-5.573
		C39.854,25.014,39.854,12.985,32.437,5.568z M30.299,30.294c-3.003,3.045-7.021,4.695-11.293,4.695
		c-4.272,0-8.291-1.65-11.294-4.695C4.666,27.29,3.016,23.271,3.016,19c0-4.272,1.649-8.291,4.695-11.294
		c3.003-3.003,7.022-4.695,11.294-4.695c4.272,0,8.291,1.649,11.293,4.695C36.56,13.924,36.56,24.075,30.299,30.294z"/>
                            </g>
                        </svg>
                    </div>
                    <div>
                        <span class="pmd-card-subtitle-text">For Support</span>
                        <h3 class="pmd-card-title-text">huseynov.sahib@yahoo.com</h3>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</footer>
<!--footer end-->
<!-- Footer Ends -->

<!-- Scripts Starts -->
<script src="{{ url('/admin/assets/js/jquery-1.12.2.min.js') }}"></script>
<script src="{{ url('/admin/assets/js/bootstrap.min.js') }}"></script>
<script>
    $(document).ready(function () {
        var sPath = window.location.pathname;
        var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
        $(".pmd-sidebar-nav").each(function () {
            $(this).find("a[href='" + sPage + "']").parents(".dropdown").addClass("open");
            $(this).find("a[href='" + sPage + "']").parents(".dropdown").find('.dropdown-menu').css("display", "block");
            $(this).find("a[href='" + sPage + "']").parents(".dropdown").find('a.dropdown-toggle').addClass("active");
            $(this).find("a[href='" + sPage + "']").addClass("active");
        });

        $("a.submit").click(function(){
            $(this).parent('form.deleteForm').submit();
            // document.getElementById("myForm").submit();
        });

    });
</script>
<script type="text/javascript">
    (function () {
        "use strict";
        var toggles = document.querySelectorAll(".c-hamburger");
        for (var i = toggles.length - 1; i >= 0; i--) {
            var toggle = toggles[i];
            toggleHandler(toggle);
        }
        ;

        function toggleHandler(toggle) {
            toggle.addEventListener("click", function (e) {
                e.preventDefault();
                (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
            });
        }

    })();
</script>

<script src="{{ url('/admin/assets/js/propeller.min.js') }}"></script>

@yield('script')
</body>
</html>