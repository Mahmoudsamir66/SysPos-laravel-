<div class="wrapper">
    <div data-active-color="white" data-background-color="black" data-image="{{asset('public/app-assets/img/sidebar-bg/01.jpg')}}"
         class="app-sidebar">
        <div class="sidebar-header">
            <div class="logo clearfix">
                <a href="{{route('Dashbord')}}" class="logo-text float-left">
                    <div class="logo-img"><img src="{{asset('public/app-assets/img/logo.png')}}" alt=""/></div>
                    <span class="text align-middle">Pos System</span>
                </a>
                <a id="sidebarToggle" href="javascript:;"
                   class="nav-toggle d-none d-sm-none d-md-none d-lg-block"></a><a id="sidebarClose" href="javascript:;"
                                                                                   class="nav-close d-block d-md-block d-lg-none d-xl-none">
                </a>
            </div>
        </div>

        <div class="sidebar-content">
            <div class="nav-container">
                <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
                    <li class="nav-item home"><a href="{{route('Dashbord')}}"><i class="icon-home"></i><span
                                data-i18n=""
                                class="menu-title">Dashboard</span></a>
                    </li>
                    <li class="nav-item float-md-right">

                    <li class="has-sub nav-item">
                        <a href="#"><i class="icon-users"></i><span data-i18n=""
                                                                    class="menu-title"> القوائم</span></a>
                        <ul class="menu-content" href="#">
                            <li><a href="{{route('product.create')}}" class="menu-item"> <i class="icon-bar"></i> المنتجات
                                    </a>
                            </li>
                            <li><a href="{{route('stores.create')}}" class="menu-item">المخازن</a>
                            </li>
                            <li><a href="{{route('kind.create')}}" class="menu-item">الاصناف</a>
                            </li>
                            <li><a href="{{route('buyer.create')}}" class="menu-item">الشراء</a>
                            </li>
                            <li><a href="{{route('seller.create')}}" class="menu-item">البيع</a>
                            </li>
                        </ul>
                    </li>

                    <li class=" nav-item"><a href="{{route('search.create')}}"><i class="icon-support"></i><span
                                data-i18n="" class="menu-title">
                       بحث عن منتج </span></a>
                    </li>
                    <li class=" nav-item"><a href="{{route('search.kindCreate')}}"><i class="icon-support"></i><span
                                data-i18n="" class="menu-title">
                       بحث عن صنف</span></a>
                    </li>
                    <li class=" nav-item"><a href="#"><i class="icon-support"></i><span
                                data-i18n="" class="menu-title">
                        General Setting</span></a>
                    </li>
                    <li class=" nav-item"><a href="#"><i class="icon-layers"></i><span
                                data-i18n="" class="menu-title">Salary report</span></a>
                    </li>
                    <li class=" nav-item"><a href="https://localhost:44304/Admin/User/user"><i
                                class="icon-users"></i><span data-i18n="" class="menu-title">Users</span></a>
                    </li>
                    <li class=" nav-item"><a href="https://localhost:44304/Admin/Salary/setting"><i
                                class="icon-users"></i><span data-i18n="" class="menu-title">general Setting</span></a>
                    </li>
                    <li class=" nav-item"><a href="permissions.html"><i class="icon-equalizer"></i><span data-i18n=""
                                                                                                         class="menu-title">Permissions</span></a>
                    </li>
                    <li class=" nav-item"><a href="#"><i class="icon-puzzle"></i><span data-i18n=""
                                                                                                                 class="menu-title">Product</span></a>
                    </li>
                    *@

                    <li class=" nav-item"><a href="https://localhost:44304/Admin/Account/login"><i class="icon-pin"></i><span
                                data-i18n="" class="menu-title">Login Page </span></a>
                    </li>
                    <li class=" nav-item"><a href="https://localhost:44304/Admin/Account/Register"><i
                                class="icon-pin"></i><span data-i18n="" class="menu-title">Register Page </span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="sidebar-background"></div>
    </div>
