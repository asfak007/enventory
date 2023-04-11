<!-- NavBar start -->
<nav class="navbar navbar-expand-xl py-3">
    <div class="container-fluid maxW">
        <!-- leftBar button -->
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- logo -->
        <a class="navbar-brand m-0 d-flex justify-content-center" href="/">
            <img src="{{asset('/')}}admin/images/logo 1.png" class="img-fluid w-75" alt="" />
        </a>

        <!-- Right Nav Button  -->
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fa-solid fa-ellipsis"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <div class="hrBrack d-xl-none d-block"></div>
            <!-- nav items -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <i class="fa-solid fa-house" style="color: #2c323f"></i>
                    </a>
                </li>
            </ul>
            <!-- navbar end section -->
            <div class="d-flex align-items-center mt-2">
                <button type="button" class="btn position-relative p-0">
                    <i class="fa-regular fa-bell fs-4" style="color: #2c323f"></i>
                    <span
                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                4
              </span>
                </button>
                <!-- user  profile -->
                <img
                    src="https://encrypted-tbn0.gstatic.com{{asset('/')}}admin/images?q=tbn:ANd9GcSKr5wT7rfkjkGvNeqgXjBmarC5ZNoZs-H2uMpML8O7Q4F9W-IlUQibBT6IPqyvX45NOgw&usqp=CAU"
                    class="rounded-circle shadow-4 ms-4"
                    style="width: 40px; height: 40px"
                    alt="Avatar" />
            </div>
        </div>
    </div>
</nav>
<!-- NavBar end -->

<!-- responsive sidebar start -->
<aside
    class="offcanvas offcanvas-start"
    tabindex="-1"
    id="offcanvasNavbar"
    aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
        <div class="">
            <img src="{{asset('/')}}admin/images/logo 1.png" class="img-fluid w-75" alt="" />
        </div>
        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="hrBrack mt-1"></div>
        <div class="">
            <h4 class="sideBarTitle px-2 pb-1">General</h4>

            <!-- Dashboards option -->
            <div class="py-1">
                <div
                    data-bs-toggle="collapse"
                    href="#dashboards"
                    role="button"
                    aria-expanded="false"
                    aria-controls="dashboards"
                    class="generalDropdown d-flex justify-content-between px-2 align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-house"></i>
                        <h4 class="sideBarItems ps-3">Dashboards</h4>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="rounded-5 generalNum d-inline-block px-3 py-1">
                            5
                        </div>
                        <i class="fa-solid fa-chevron-down ps-3"></i>
                    </div>
                </div>

                <div class="collapse" id="dashboards">
                    <div id="sidebarManu" class="ms-2 pt-3">
                        <a href="#">
                            <p class="activeItem">
                                <i class="fa-solid fa-circle activeItem"></i>Default
                            </p>
                        </a>
                        <a href="#">
                            <p><i class="fa-solid fa-circle"></i>Ecommerce</p></a
                        >
                        <a href="#"
                        ><p><i class="fa-solid fa-circle"></i>Online course</p></a
                        >
                        <a href="#"
                        ><p><i class="fa-solid fa-circle"></i>Crypto</p></a
                        >
                        <a href="#"
                        ><p><i class="fa-solid fa-circle"></i>Social</p></a
                        >
                    </div>
                </div>
            </div>

            <!-- Widgets -->
            <div class="py-1">
                <div
                    data-bs-toggle="collapse"
                    href="#widgets"
                    role="button"
                    aria-expanded="false"
                    aria-controls="widgets"
                    class="generalDropdown d-flex justify-content-between px-2 align-items-center">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <i class="fa-solid fa-qrcode"></i>
                        </div>
                        <h4 class="sideBarItems ps-3">Widgets</h4>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-chevron-down ps-3"></i>
                    </div>
                </div>

                <div class="collapse" id="widgets">
                    <div id="sidebarManu" class="ms-2 pt-3">
                        <a href="#">
                            <p class="activeItem">
                                <i class="fa-solid fa-circle activeItem"></i>Default
                            </p>
                        </a>
                        <a href="#">
                            <p><i class="fa-solid fa-circle"></i>Ecommerce</p></a
                        >
                    </div>
                </div>
            </div>

            <!-- Page layout -->
            <div class="py-1">
                <div
                    data-bs-toggle="collapse"
                    href="#pageLayout"
                    role="button"
                    aria-expanded="false"
                    aria-controls="pageLayout"
                    class="generalDropdown d-flex justify-content-between px-2 align-items-center">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <i class="fa-duotone fa-table-layout"></i>
                        </div>
                        <h4 class="sideBarItems ps-3">Page layout</h4>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-chevron-down ps-3"></i>
                    </div>
                </div>

                <div class="collapse" id="pageLayout">
                    <div id="sidebarManu" class="ms-2 pt-3">
                        <a href="#">
                            <p class="activeItem">
                                <i class="fa-solid fa-circle activeItem"></i>Default
                            </p>
                        </a>
                        <a href="#">
                            <p><i class="fa-solid fa-circle"></i>Ecommerce</p></a
                        >
                    </div>
                </div>
            </div>
        </div>
        <!-- General end -->

        <!-- Applications -->
        <div class="hrBrack"></div>
        <div class="">
            <h4 class="sideBarTitle px-2 pb-1">Applications</h4>

            <!-- Project -->
            <div class="py-1">
                <div
                    data-bs-toggle="collapse"
                    href="#project"
                    role="button"
                    aria-expanded="false"
                    aria-controls="project"
                    class="generalDropdown d-flex justify-content-between px-2 align-items-center">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <i class="fa-solid fa-circle-dot"></i>
                        </div>
                        <h4 class="sideBarItems ps-3">Project</h4>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="rounded-5 lavel d-inline-block px-3 py-1">New</div>
                        <i class="fa-solid fa-chevron-down ps-3"></i>
                    </div>
                </div>

                <div class="collapse" id="project">
                    <div id="sidebarManu" class="ms-2 pt-3">
                        <a href="#">
                            <p class="activeItem">
                                <i class="fa-solid fa-circle activeItem"></i>Default
                            </p>
                        </a>
                        <a href="#">
                            <p><i class="fa-solid fa-circle"></i>Ecommerce</p></a
                        >
                    </div>
                </div>
            </div>

            <!-- File manager -->
            <div class="py-1">
                <a href="#">
                    <div
                        class="generalDropdown d-flex justify-content-between px-2 align-items-center">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <i class="fa-solid fa-folder-open"></i>
                            </div>
                            <h4 class="sideBarItems ps-3">File manager</h4>
                        </div>
                    </div>
                </a>
            </div>

            <!-- kanban Board -->
            <div class="py-1">
                <a href="#">
                    <div
                        class="generalDropdown d-flex justify-content-between px-2 align-items-center">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <i class="fa-solid fa-cube"></i>
                            </div>
                            <h4 class="sideBarItems ps-3">Kanban Board</h4>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="rounded-5 lavel d-inline-block px-3 py-1">
                                Latest
                            </div>
                            <div class="px-3"></div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Ecommerce -->
            <div class="py-1">
                <div
                    data-bs-toggle="collapse"
                    href="#ecommerce"
                    role="button"
                    aria-expanded="false"
                    aria-controls="ecommerce"
                    class="generalDropdown d-flex justify-content-between px-2 align-items-center">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </div>
                        <h4 class="sideBarItems ps-3">Ecommerce</h4>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-chevron-down ps-3"></i>
                    </div>
                </div>

                <div class="collapse" id="ecommerce">
                    <div id="sidebarManu" class="ms-2 pt-3">
                        <a href="/products.html">
                            <p class="activeItem">
                                <i class="fa-solid fa-circle activeItem"></i>All Products
                            </p>
                        </a>
                        <a href="/add-product.html">
                            <p><i class="fa-solid fa-circle"></i>Add Product</p></a
                        >
                    </div>
                </div>
            </div>

            <!-- Email -->
            <div class="py-1">
                <div
                    data-bs-toggle="collapse"
                    href="#email"
                    role="button"
                    aria-expanded="false"
                    aria-controls="email"
                    class="generalDropdown d-flex justify-content-between px-2 align-items-center">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <h4 class="sideBarItems ps-3">Email</h4>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-chevron-down ps-3"></i>
                    </div>
                </div>

                <div class="collapse" id="email">
                    <div id="sidebarManu" class="ms-2 pt-3">
                        <a href="#">
                            <p class="activeItem">
                                <i class="fa-solid fa-circle activeItem"></i>Default
                            </p>
                        </a>
                        <a href="#">
                            <p><i class="fa-solid fa-circle"></i>Ecommerce</p></a
                        >
                    </div>
                </div>
            </div>

            <!-- Chat -->
            <div class="py-1">
                <div
                    data-bs-toggle="collapse"
                    href="#chat"
                    role="button"
                    aria-expanded="false"
                    aria-controls="chat"
                    class="generalDropdown d-flex justify-content-between px-2 align-items-center">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <i class="fa-duotone fa-comments"></i>
                        </div>
                        <h4 class="sideBarItems ps-3">Chat</h4>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-chevron-down ps-3"></i>
                    </div>
                </div>

                <div class="collapse" id="chat">
                    <div id="sidebarManu" class="ms-2 pt-3">
                        <a href="#">
                            <p class="activeItem">
                                <i class="fa-solid fa-circle activeItem"></i>Default
                            </p>
                        </a>
                        <a href="#">
                            <p><i class="fa-solid fa-circle"></i>Ecommerce</p></a
                        >
                    </div>
                </div>
            </div>

            <!-- Users -->
            <div class="py-1">
                <div
                    data-bs-toggle="collapse"
                    href="#users"
                    role="button"
                    aria-expanded="false"
                    aria-controls="users"
                    class="generalDropdown d-flex justify-content-between px-2 align-items-center">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <i class="fa-duotone fa-users"></i>
                        </div>
                        <h4 class="sideBarItems ps-3">Users</h4>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-chevron-down ps-3"></i>
                    </div>
                </div>

                <div class="collapse" id="users">
                    <div id="sidebarManu" class="ms-2 pt-3">
                        <a href="#">
                            <p class="activeItem">
                                <i class="fa-solid fa-circle activeItem"></i>Default
                            </p>
                        </a>
                        <a href="#">
                            <p><i class="fa-solid fa-circle"></i>Ecommerce</p></a
                        >
                    </div>
                </div>
            </div>

            <!-- Bookmarks -->
            <div class="py-1">
                <a href="#">
                    <div
                        class="generalDropdown d-flex justify-content-between px-2 align-items-center">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                            </div>
                            <h4 class="sideBarItems ps-3">Bookmarks</h4>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Contacts -->
            <div class="py-1">
                <a href="#">
                    <div
                        class="generalDropdown d-flex justify-content-between px-2 align-items-center">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <h4 class="sideBarItems ps-3">Contacts</h4>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Tasks -->
            <div class="py-1">
                <a href="#">
                    <div
                        class="generalDropdown d-flex justify-content-between px-2 align-items-center">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <i class="fa-duotone fa-memo-pad"></i>
                            </div>
                            <h4 class="sideBarItems ps-3">Tasks</h4>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Calendar -->
            <div class="py-1">
                <a href="#">
                    <div
                        class="generalDropdown d-flex justify-content-between px-2 align-items-center">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                            <h4 class="sideBarItems ps-3">Calendar</h4>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Social App -->
            <div class="py-1">
                <a href="#">
                    <div
                        class="generalDropdown d-flex justify-content-between px-2 align-items-center">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <i class="fa-solid fa-share-nodes"></i>
                            </div>
                            <h4 class="sideBarItems ps-3">Social App</h4>
                        </div>
                    </div>
                </a>
            </div>

            <!--  -->
        </div>
    </div>
</aside>
<!-- responsive sidebar end-->
