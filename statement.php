<?php
// Fichier: events_list.php

require_once './script/get_events_list.php';

$events = getEventsList();
?>


<!DOCTYPE html>
<html lang="en">

<?php require("./components/head.php") ?>

<body>

    <!--==================== Preloader Start ====================-->
    <div class="loader-mask">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--==================== Preloader End ====================-->

    <!--==================== Overlay Start ====================-->
    <div class="overlay"></div>
    <!--==================== Overlay End ====================-->

    <!--==================== Sidebar Overlay End ====================-->
    <div class="side-overlay"></div>
    <!--==================== Sidebar Overlay End ====================-->

    <!-- ==================== Scroll to Top End Here ==================== -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- ==================== Scroll to Top End Here ==================== -->

    <!-- ==================== Mobile Menu Start Here ==================== -->
    <div class="mobile-menu d-lg-none d-block">
        <button type="button" class="close-button"> <i class="las la-times"></i> </button>
        <div class="mobile-menu__inner">
            <a href="index.html" class="mobile-menu__logo">
                <img src="assets/images/logo/logo.png" alt="Logo">
            </a>
            <div class="mobile-menu__menu">

                <ul class="nav-menu flx-align nav-menu--mobile">
                    <li class="nav-menu__item has-submenu">
                        <a href="javascript:void(0)" class="nav-menu__link">Home</a>
                        <ul class="nav-submenu">
                            <li class="nav-submenu__item">
                                <a href="index.html" class="nav-submenu__link"> Home One</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="index-two.html" class="nav-submenu__link"> Home Two</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu__item has-submenu">
                        <a href="javascript:void(0)" class="nav-menu__link">Products</a>
                        <ul class="nav-submenu">
                            <li class="nav-submenu__item">
                                <a href="all-product.html" class="nav-submenu__link"> All Products</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="product-details.html" class="nav-submenu__link"> Product Details</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu__item has-submenu">
                        <a href="javascript:void(0)" class="nav-menu__link">Pages</a>
                        <ul class="nav-submenu">
                            <li class="nav-submenu__item">
                                <a href="profile.html" class="nav-submenu__link"> Profile</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="cart.html" class="nav-submenu__link"> Shopping Cart</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="cart-personal.html" class="nav-submenu__link"> Mailing Address</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="cart-payment.html" class="nav-submenu__link"> Payment Method</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="cart-thank-you.html" class="nav-submenu__link"> Preview Order</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="dashboard.html" class="nav-submenu__link"> Dashboard</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu__item has-submenu">
                        <a href="javascript:void(0)" class="nav-menu__link">Blog</a>
                        <ul class="nav-submenu">
                            <li class="nav-submenu__item">
                                <a href="blog.html" class="nav-submenu__link"> Blog</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="blog-details.html" class="nav-submenu__link"> Blog Details</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="blog-details-sidebar.html" class="nav-submenu__link"> Blog Details Sidebar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu__item">
                        <a href="contact.html" class="nav-menu__link">Contact</a>
                    </li>
                </ul>
                <div class="header-right__inner d-lg-none my-3 gap-1 d-flex flx-align">

                    <a href="register.html" class="btn btn-main pill">
                        <span class="icon-left icon">
                            <img src="assets/images/icons/user.svg" alt="">
                        </span>Create Account
                    </a>
                    <div class="language-select flx-align select-has-icon">
                        <img src="assets/images/icons/globe.svg" alt="" class="globe-icon">
                        <select class="select py-0 ps-2 border-0 fw-500">
                            <option value="1">Eng</option>
                            <option value="2">Bn</option>
                            <option value="3">Eur</option>
                            <option value="4">Urd</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==================== Mobile Menu End Here ==================== -->

    <!-- ================================== Dashboard Start =========================== -->
    <section class="dashboard">
        <div class="dashboard__inner d-flex">

            <!-- ===================== Dashboard Sidebar Start ======================= -->
            <div class="dashboard-sidebar">
                <button type="button" class="dashboard-sidebar__close d-lg-none d-flex"><i class="las la-times"></i></button>
                <div class="dashboard-sidebar__inner">
                    <a href="index.html" class="logo mb-48">
                        <img src="assets/images/logo/logo.png" alt="">
                    </a>
                    <a href="index.html" class="logo favicon mb-48">
                        <img src="assets/images/logo/favicon.png" alt="">
                    </a>

                    <!-- Sidebar List Start -->
                    <ul class="sidebar-list">
                        <li class="sidebar-list__item">
                            <a href="dashboard.html" class="sidebar-list__link">
                                <span class="sidebar-list__icon">
                                    <img src="assets/images/icons/sidebar-icon1.svg" alt="" class="icon">
                                    <img src="assets/images/icons/sidebar-icon-active1.svg" alt="" class="icon icon-active">
                                </span>
                                <span class="text">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-list__item">
                            <a href="dashboard-profile.html" class="sidebar-list__link">
                                <span class="sidebar-list__icon">
                                    <img src="assets/images/icons/sidebar-icon2.svg" alt="" class="icon">
                                    <img src="assets/images/icons/sidebar-icon-active2.svg" alt="" class="icon icon-active">
                                </span>
                                <span class="text">Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-list__item">
                            <a href="follower.html" class="sidebar-list__link">
                                <span class="sidebar-list__icon">
                                    <img src="assets/images/icons/sidebar-icon4.svg" alt="" class="icon">
                                    <img src="assets/images/icons/sidebar-icon-active4.svg" alt="" class="icon icon-active">
                                </span>
                                <span class="text">Followers</span>
                            </a>
                        </li>
                        <li class="sidebar-list__item">
                            <a href="following.html" class="sidebar-list__link">
                                <span class="sidebar-list__icon">
                                    <img src="assets/images/icons/sidebar-icon5.svg" alt="" class="icon">
                                    <img src="assets/images/icons/sidebar-icon-active5.svg" alt="" class="icon icon-active">
                                </span>
                                <span class="text">Followings</span>
                            </a>
                        </li>
                        <li class="sidebar-list__item">
                            <a href="setting.html" class="sidebar-list__link">
                                <span class="sidebar-list__icon">
                                    <img src="assets/images/icons/sidebar-icon10.svg" alt="" class="icon">
                                    <img src="assets/images/icons/sidebar-icon-active10.svg" alt="" class="icon icon-active">
                                </span>
                                <span class="text">Settings</span>
                            </a>
                        </li>
                        <li class="sidebar-list__item">
                            <a href="statement.html" class="sidebar-list__link">
                                <span class="sidebar-list__icon">
                                    <img src="assets/images/icons/sidebar-icon12.svg" alt="" class="icon">
                                    <img src="assets/images/icons/sidebar-icon-active12.svg" alt="" class="icon icon-active">
                                </span>
                                <span class="text">Statements</span>
                            </a>
                        </li>
                        <li class="sidebar-list__item">
                            <a href="earning.html" class="sidebar-list__link">
                                <span class="sidebar-list__icon">
                                    <img src="assets/images/icons/sidebar-icon11.svg" alt="" class="icon">
                                    <img src="assets/images/icons/sidebar-icon-active11.svg" alt="" class="icon icon-active">
                                </span>
                                <span class="text">Earnings</span>
                            </a>
                        </li>
                        <li class="sidebar-list__item">
                            <a href="review.html" class="sidebar-list__link">
                                <span class="sidebar-list__icon">
                                    <img src="assets/images/icons/sidebar-icon7.svg" alt="" class="icon">
                                    <img src="assets/images/icons/sidebar-icon-active7.svg" alt="" class="icon icon-active">
                                </span>
                                <span class="text">Reviews</span>
                            </a>
                        </li>

                        <li class="sidebar-list__item">
                            <a href="download.html" class="sidebar-list__link">
                                <span class="sidebar-list__icon">
                                    <img src="assets/images/icons/sidebar-icon6.svg" alt="" class="icon">
                                    <img src="assets/images/icons/sidebar-icon-active6.svg" alt="" class="icon icon-active">
                                </span>
                                <span class="text">Downloads</span>
                            </a>
                        </li>
                        <li class="sidebar-list__item">
                            <a href="refund.html" class="sidebar-list__link">
                                <span class="sidebar-list__icon">
                                    <img src="assets/images/icons/sidebar-icon8.svg" alt="" class="icon">
                                    <img src="assets/images/icons/sidebar-icon-active8.svg" alt="" class="icon icon-active">
                                </span>
                                <span class="text">Refunds</span>
                            </a>
                        </li>
                        <li class="sidebar-list__item">
                            <a href="login.html" class="sidebar-list__link">
                                <span class="sidebar-list__icon">
                                    <img src="assets/images/icons/sidebar-icon13.svg" alt="" class="icon">
                                    <img src="assets/images/icons/sidebar-icon-active13.svg" alt="" class="icon icon-active">
                                </span>
                                <span class="text">Logout</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Sidebar List End -->

                </div>
            </div>
            <!-- ===================== Dashboard Sidebar End ======================= -->

            <div class="dashboard-body">

                <!-- Dashboard Nav Start -->
                <div class="dashboard-nav bg-white flx-between gap-md-3 gap-2">
                    <div class="dashboard-nav__left flx-align gap-md-3 gap-2">
                        <button type="button" class="icon-btn bar-icon text-heading bg-gray-seven flx-center">
                            <img src="assets/images/icons/menu-bar.svg" alt="">
                        </button>
                        <button type="button" class="icon-btn arrow-icon text-heading bg-gray-seven flx-center">
                            <img src="assets/images/icons/angle-right.svg" alt="">
                        </button>
                        <form action="#" class="search-input d-sm-block d-none">
                            <span class="icon"><img src="assets/images/icons/search-dark.svg" alt=""></span>
                            <input type="text" class="common-input common-input--md common-input--bg pill w-100" placeholder="Search here...">
                        </form>
                    </div>
                    <div class="dashboard-nav__right">
                        <div class="header-right flx-align">
                            <div class="header-right__inner gap-sm-3 gap-2 flx-align d-flex">

                                <div class="user-profile">
                                    <button class="user-profile__button flex-align">
                                        <span class="user-profile__thumb">
                                            <img src="assets/images/thumbs/user-profile.png" class="cover-img" alt="">
                                        </span>
                                    </button>
                                    <ul class="user-profile-dropdown">
                                        <li class="sidebar-list__item">
                                            <a href="dashboard-profile.html" class="sidebar-list__link">
                                                <span class="sidebar-list__icon">
                                                    <img src="assets/images/icons/sidebar-icon2.svg" alt="" class="icon">
                                                    <img src="assets/images/icons/sidebar-icon-active2.svg" alt="" class="icon icon-active">
                                                </span>
                                                <span class="text">Profile</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-list__item">
                                            <a href="setting.html" class="sidebar-list__link">
                                                <span class="sidebar-list__icon">
                                                    <img src="assets/images/icons/sidebar-icon10.svg" alt="" class="icon">
                                                    <img src="assets/images/icons/sidebar-icon-active10.svg" alt="" class="icon icon-active">
                                                </span>
                                                <span class="text">Settings</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-list__item">
                                            <a href="login.html" class="sidebar-list__link">
                                                <span class="sidebar-list__icon">
                                                    <img src="assets/images/icons/sidebar-icon13.svg" alt="" class="icon">
                                                    <img src="assets/images/icons/sidebar-icon-active13.svg" alt="" class="icon icon-active">
                                                </span>
                                                <span class="text">Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="language-select flx-align select-has-icon">
                                    <img src="assets/images/icons/globe.svg" alt="" class="globe-icon">
                                    <select class="select py-0 ps-2 border-0 fw-500">
                                        <option value="1">Eng</option>
                                        <option value="2">Bn</option>
                                        <option value="3">Eur</option>
                                        <option value="4">Urd</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Dashboard Nav End -->


                <div class="dashboard-body__content">
                    <!-- ========================= Statement section start =========================== -->
                    <div class="row gy-4">
                        <div class="col-lg-6">
                            <div class="statement-item card common-card border border-gray-five">
                                <div class="card-body">
                                    <div class="statement-item__header">
                                        <h6 class="statement-item__title">Total Earning</h6>
                                    </div>
                                    <ul class="statement-list">
                                        <li class="statement-list__item text-center">
                                            <span class="statement-list__text font-13">My Funds</span>
                                            <h6 class="statement-list__amount mb-0 mt-1 fw-600">$0.00</h6>
                                        </li>
                                        <li class="statement-list__item text-center">
                                            <span class="statement-list__text font-13">Earnings</span>
                                            <h6 class="statement-list__amount mb-0 mt-1 fw-600">$0.00</h6>
                                        </li>
                                        <li class="statement-list__item text-center">
                                            <span class="statement-list__text font-13">Tax Withheld</span>
                                            <h6 class="statement-list__amount mb-0 mt-1 fw-600">$0.00</h6>
                                        </li>
                                        <li class="statement-list__item text-center">
                                            <span class="statement-list__text font-13">Fees</span>
                                            <h6 class="statement-list__amount mb-0 mt-1 fw-600">$0.00</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="statement-item card common-card border border-gray-five">
                                <div class="card-body">
                                    <div class="statement-item__header">
                                        <h6 class="statement-item__title">Monthly Earnings</h6>
                                    </div>
                                    <ul class="statement-list">
                                        <li class="statement-list__item text-center">
                                            <span class="statement-list__text font-13">My Funds</span>
                                            <h6 class="statement-list__amount mb-0 mt-1 fw-600">$0.00</h6>
                                        </li>
                                        <li class="statement-list__item text-center">
                                            <span class="statement-list__text font-13">Earnings</span>
                                            <h6 class="statement-list__amount mb-0 mt-1 fw-600">$0.00</h6>
                                        </li>
                                        <li class="statement-list__item text-center">
                                            <span class="statement-list__text font-13">Tax Withheld</span>
                                            <h6 class="statement-list__amount mb-0 mt-1 fw-600">$0.00</h6>
                                        </li>
                                        <li class="statement-list__item text-center">
                                            <span class="statement-list__text font-13">Fees</span>
                                            <h6 class="statement-list__amount mb-0 mt-1 fw-600">$0.00</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card common-card border border-gray-five">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table text-body mt--24">
                                            <thead>
                                                <tr>
                                                    <th>Code événement</th>
                                                    <th>Nom</th>
                                                    <th>Participants</th>
                                                    <th>Date</th>
                                                    <th>Détails</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($events as $event): ?>
                                                    <tr>
                                                        <td data-label="Code événement"><?php echo htmlspecialchars($event['code_event']); ?></td>
                                                        <td data-label="Nom"><?php echo htmlspecialchars($event['nom_event']); ?></td>
                                                        <td data-label="Participants">
                                                            <?php echo $event['nombre_participants']; ?> participant<?php echo $event['nombre_participants'] > 1 ? 's' : ''; ?>
                                                        </td>
                                                        <td data-label="Date"><?php echo htmlspecialchars($event['date_event']); ?></td>
                                                        <td data-label="Détails">
                                                            <a href="event_details.php?id=<?php echo $event['id_event']; ?>" class="btn btn-main"><i class="far fa-eye"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                        <div class="flx-between gap-2">
                                            <div class="paginate-content flx-align flex-nowrap gap-3">
                                                <select class="select common-input py-2 px-3 w-auto">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                                                <span class="paginate-content__text fs-14">Showing 1 - 10 of 100</span>
                                            </div>
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination common-pagination mt-0">
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link flx-align gap-2 flex-nowrap" href="#">Next
                                                            <span class="icon line-height-1 font-20"><i class="las la-arrow-right"></i></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========================= Statement section End =========================== -->

                </div>

                <!-- ====================== Dashboard Footer Start ======================== -->
                <div class="dashboard-footer bottom-footer-two mt-32 border-0 bg-white">
                    <div class="bottom-footer__inner flx-between gap-3">
                        <p class="bottom-footer__text font-14"> Copyright © 2024 DPmarket, All rights reserved.</p>
                        <div class="footer-links gap-4">
                            <a href="#" class="footer-link hover-text-heading font-14">Terms of service</a>
                            <a href="#" class="footer-link hover-text-heading font-14">Privacy Policy</a>
                            <a href="#" class="footer-link hover-text-heading font-14">cookies</a>
                        </div>
                    </div>
                </div>
                <!-- ====================== Dashboard Footer End ======================== -->


            </div>
        </div>
    </section>
    <!-- ================================== Dashboard End =========================== -->
    <?php require("./components/script.php") ?>


</body>

</html>