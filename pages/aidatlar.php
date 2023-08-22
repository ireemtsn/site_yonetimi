<!DOCTYPE html>
<!--
   Author: Keenthemes
   Product Name: Saul
   Product Version: 1.0.0
   Upgrade to Pro: ht..//keenthemes../prod../saul-html-pro
   Website: h..//www.keenthemes.com
   Contact: support@keenthemes.com
   Follow: www.twitter../keenthemes
   Dribbble: www.dribbble../keenthemes
   Like: www.facebook../keenthemes
   License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
   -->
<html lang="en">
<!--begin::Head-->

<head>
    <base href../>
    <title>Site Yönetim Pan../title>
    <meta charset="utf../>
    <meta name="description" content="Saul HTML Free - Bootstrap 5 HTML Multipurpose Admin Dashboard The../>
    <meta name="keywords"
        content="Saul, bootstrap, bootstrap 5, dmin themes, free admin themes, bootstrap admin, bootstrap dashboa../>
    <meta name="viewport" content="width=device-width, initial-scale../>
    <meta property="og:locale" content="en_../>
    <meta property="og:type" content="artic../>
    <meta property="og:title" content="Saul HTML Free - Bootstrap 5 HTML Multipurpose Admin Dashboard The../>
    <meta property="og:url" content="ht..//keenthemes../prod../saul-html-p../>
    <meta property="og:site_name" content="Keenthemes | Saul HTML Fr../>
    <link rel="canonical" href="ht..//preview.keenthemes../saul-html-fr../>
    <link rel="shortcut icon" href="../as../m../l../favicon.i../>
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="ht..//fonts.googleapis../css?family=Inter:300,400,500,600,7../>
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="../as../plu../cu../fullcale../fullcalendar.bundle.css" rel="stylesheet" type="../c../>
    <link href="../as../plu../cu../datata../datatables.bundle.css" rel="stylesheet" type="../c../>
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="../as../plu../gl../plugins.bundle.css" rel="stylesheet" type="../c../>
    <link href="../as../css/style.bundle.css" rel="stylesheet" type="../c../>
    <!--end::Global Stylesheets Bundle-->
    <script>
..// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
 ../script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true"
    data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true"
    data-kt-app-aside-enabled="true" data-kt-app-aside-fixed="true" data-kt-app-aside-push-toolbar="true"
    data-kt-app-aside-push-footer="true" class="app-default">
    <!--begin::Theme mode setup on page load-->
    <script>
    var defaultThemeMode = "light";
    var themeMode;
    if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
            if (localStorage.getItem("data-bs-theme") !== null) {
                themeMode = localStorage.getItem("data-bs-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }
        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }
        document.documentElement.setAttribute("data-bs-theme", themeMode);
    }
 ../script>
    <!--end::Theme mode setup on page load-->
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin::Header-->
            <div id="kt_app_header" class="app-header d-flex flex-column flex-stack">
                <!--begin::Header main-->
                <div class="d-flex align-items-center flex-stack flex-grow-1">
                    <div class="app-header-logo d-flex align-items-center flex-stack px-lg-11 mb-2"
                        id="kt_app_header_logo">
                        <!--begin::Sidebar mobile toggle-->
                        <div class="btn btn-icon btn-active-color-primary w-35px h-35px ms-3 me-2 d-flex d-lg-none"
                            id="kt_app_sidebar_mobile_toggle">
                            <i class="ki-duotone ki-abstract-14 fs-2">
                                <span class="path../span>
                                <span class="path../span>
                         ../i>
                     ../div>
                        <!--end::Sidebar mobile toggle-->
                        <!--begin::Logo-->
                        <a href="index.html" class="app-sidebar-logo">
                            <img alt="Logo" src="../as../m../l../default.svg" class="h-30px theme-light-sh../>
                            <img alt="Logo" src="../as../m../l../default-dark.svg"
                                class="h-30px theme-dark-sh../>
                     ../a>
                        <!--end::Logo-->
                        <!--begin::Sidebar toggle-->
                        <!--end::Sidebar toggle-->
                 ../div>
                    <!--begin::Navbar-->
                    <div class="app-navbar flex-grow-1 justify-content-end" id="kt_app_header_navbar">
                        <div class="app-navbar-item d-flex align-items-stretch flex-lg-grow-1 me-2 me-lg-0">
                            <!--begin::Search-->
                            <div id="kt_header_search" class="header-search d-flex align-items-center w-lg-350px"
                                data-kt-search-keypress="true" data-kt-search-min-length="2"
                                data-kt-search-enter="enter" data-kt-search-layout="menu"
                                data-kt-search-responsive="true" data-kt-menu-trigger="auto"
                                data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">
                                <!--begin::Tablet and mobile search toggle-->
                                <div data-kt-search-element="toggle"
                                    class="search-toggle-mobile d-flex d-lg-none align-items-center">
                                    <div class="d-flex">
                                        <i class="ki-duotone ki-magnifier fs-1 fs-1">
                                            <span class="path../span>
                                            <span class="path../span>
                                     ../i>
                                 ../div>
                             ../div>
                                <!--end::Tablet and mobile search toggle-->
                                <!--begin::Form(use d-none d-lg-block classes for responsive search)-->
                                <form data-kt-search-element="form"
                                    class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
                                    <!--begin::Hidden input(Added to disable form autocomplete)-->
                                    <input type="hidd../>
                                    <!--end::Hidden input-->
                                    <!--begin::Icon-->
                                    <i
                                        class="ki-duotone ki-magnifier search-icon fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-5">
                                        <span class="path../span>
                                        <span class="path../span>
                                 ../i>
                                    <!--end::Icon-->
                                    <!--begin::Input-->
                                    <input type="text"
                                        class="search-input form-control form-control border-0 h-lg-40px ps-13"
                                        name="search" value="" placeholder="Search..." data-kt-search-element="inp../>
                                    <!--end::Input-->
                                    <!--begin::Spinner-->
                                    <span
                                        class="search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                        data-kt-search-element="spinner">
                                        <span class="spinner-border h-15px w-15px align-middle text-gray-40../span>
                                 ../span>
                                    <!--end::Spinner-->
                                    <!--begin::Reset-->
                                    <span
                                        class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4"
                                        data-kt-search-element="clear">
                                        <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
                                            <span class="path../span>
                                            <span class="path../span>
                                     ../i>
                                 ../span>
                                    <!--end::Reset-->
                             ../form>
                                <!--end::Form-->
                                <!--begin::Menu-->
                                <div data-kt-search-element="content"
                                    class="menu menu-sub menu-sub-dropdown py-7 px-7 overflow-hidden w-300px w-md-350px">
                                    <!--begin::Wrapper-->
                                    <div data-kt-search-element="wrapper">
                                        <!--begin::Recently viewed-->
                                        <div data-kt-search-element="results" class="d-none">
                                            <!--begin::Items-->
                                            <div class="scroll-y mh-200px mh-lg-350px">
                                                <!--begin::Category title-->
                                                <h3 class="fs-5 text-muted m-0 pb-5"
                                                    data-kt-search-element="category-title">Us../h3>
                                                <!--end::Category title-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <img src="../as../m../ava../300-6.jpg" alt../>
                                                 ../div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Karina Cl../span>
                                                        <span class="fs-7 fw-semibold text-muted">Marketing
                                                            Mana../span>
                                                 ../div>
                                                    <!--end::Title-->
                                             ../a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <img src="../as../m../ava../300-2.jpg" alt../>
                                                 ../div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Olivia B../span>
                                                        <span class="fs-7 fw-semibold text-muted">Software
                                                            Engin../span>
                                                 ../div>
                                                    <!--end::Title-->
                                             ../a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <img src="../as../m../ava../300-9.jpg" alt../>
                                                 ../div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Ana Cl../span>
                                                        <span class="fs-7 fw-semibold text-muted../UX Desig../span>
                                                 ../div>
                                                    <!--end::Title-->
                                             ../a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <img src="../as../m../ava../300-14.jpg" alt../>
                                                 ../div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Nick Pit../span>
                                                        <span class="fs-7 fw-semibold text-muted">Art Direc../span>
                                                 ../div>
                                                    <!--end::Title-->
                                             ../a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <img src="../as../m../ava../300-11.jpg" alt../>
                                                 ../div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Edward Kul../span>
                                                        <span class="fs-7 fw-semibold text-muted">System
                                                            Administra../span>
                                                 ../div>
                                                    <!--end::Title-->
                                             ../a>
                                                <!--end::Item-->
                                                <!--begin::Category title-->
                                                <h3 class="fs-5 text-muted m-0 pt-5 pb-5"
                                                    data-kt-search-element="category-title">Custom../h3>
                                                <!--end::Category title-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <img class="w-20px h-20px"
                                                                src="../as../m../svg/brand-l../volicity-9.svg"
                                                                alt../>
                                                     ../span>
                                                 ../div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Company Rbrand../span>
                                                        <span class="fs-7 fw-semibold text-muted">UI Des../span>
                                                 ../div>
                                                    <!--end::Title-->
                                             ../a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <img class="w-20px h-20px"
                                                                src="../as../m../svg/brand-l../tvit.svg" alt../>
                                                     ../span>
                                                 ../div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Company Re-brand../span>
                                                        <span class="fs-7 fw-semibold text-muted">Web Developm../span>
                                                 ../div>
                                                    <!--end::Title-->
                                             ../a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <img class="w-20px h-20px"
                                                                src="../as../m../svg/../infography.svg" alt../>
                                                     ../span>
                                                 ../div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Business Analytics ../span>
                                                        <span class="fs-7 fw-semibold text-muted">Administrat../span>
                                                 ../div>
                                                    <!--end::Title-->
                                             ../a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <img class="w-20px h-20px"
                                                                src="../as../m../svg/brand-l../leaf.svg" alt../>
                                                     ../span>
                                                 ../div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">EcoLeaf App Lau../span>
                                                        <span class="fs-7 fw-semibold text-muted">Market../span>
                                                 ../div>
                                                    <!--end::Title-->
                                             ../a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <img class="w-20px h-20px"
                                                                src="../as../m../svg/brand-l../tower.svg"
                                                                alt../>
                                                     ../span>
                                                 ../div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Tower Group Webs../span>
                                                        <span class="fs-7 fw-semibold text-muted">Google Adwo../span>
                                                 ../div>
                                                    <!--end::Title-->
                                             ../a>
                                                <!--end::Item-->
                                                <!--begin::Category title-->
                                                <h3 class="fs-5 text-muted m-0 pt-5 pb-5"
                                                    data-kt-search-element="category-title">Proje../h3>
                                                <!--end::Category title-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-notepad fs-2 text-primary">
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                         ../i>
                                                     ../span>
                                                 ../div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <span class="fs-6 fw-semibold">Si-Fi Project by AU The../span>
                                                        <span class="fs-7 fw-semibold text-muted">#45../span>
                                                 ../div>
                                                    <!--end::Title-->
                                             ../a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-frame fs-2 text-primary">
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                         ../i>
                                                     ../span>
                                                 ../div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <span class="fs-6 fw-semibold">Shopix Mobile App Plann../span>
                                                        <span class="fs-7 fw-semibold text-muted">#45../span>
                                                 ../div>
                                                    <!--end::Title-->
                                             ../a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-message-text-2 fs-2 text-primary">
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                         ../i>
                                                     ../span>
                                                 ../div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <span class="fs-6 fw-semibold">Finance Monitoring SAAS
                                                            Discuss../span>
                                                        <span class="fs-7 fw-semibold text-muted">#21../span>
                                                 ../div>
                                                    <!--end::Title-->
                                             ../a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-profile-circle fs-2 text-primary">
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                         ../i>
                                                     ../span>
                                                 ../div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <span class="fs-6 fw-semibold">Dashboard Analitics Lau../span>
                                                        <span class="fs-7 fw-semibold text-muted">#34../span>
                                                 ../div>
                                                    <!--end::Title-->
                                             ../a>
                                                <!--end::Item-->
                                         ../div>
                                            <!--end::Items-->
                                     ../div>
                                        <!--end::Recently viewed-->
                                        <!--begin::Recently viewed-->
                                        <div class="" data-kt-search-element="main">
                                            <!--begin::Heading-->
                                            <div class="d-flex flex-stack fw-semibold mb-4">
                                                <!--begin::Label-->
                                                <span class="text-muted fs-6 me-2">Recently Search../span>
                                                <!--end::Label-->
                                                <!--begin::Toolbar-->
                                                <div class="d-flex" data-kt-search-element="toolbar">
                                                    <!--begin::Preferences toggle-->
                                                    <div data-kt-search-element="preferences-show"
                                                        class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle="
                                                        title="Show search preferences">
                                                        <i class="ki-duotone ki-setting-2 fs-2">
                                                            <span class="path../span>
                                                            <span class="path../span>
                                                     ../i>
                                                 ../div>
                                                    <!--end::Preferences toggle-->
                                                    <!--begin::Advanced search toggle-->
                                                    <div data-kt-search-element="advanced-options-form-show"
                                                        class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1"
                                                        data-bs-toggle="tooltip" title="Show more search options">
                                                        <i class="ki-duotone ki-down fs-../i>
                                                 ../div>
                                                    <!--end::Advanced search toggle-->
                                             ../div>
                                                <!--end::Toolbar-->
                                         ../div>
                                            <!--end::Heading-->
                                            <!--begin::Items-->
                                            <div class="scroll-y mh-200px mh-lg-325px">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-laptop fs-2 text-primary">
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                         ../i>
                                                     ../span>
                                                 ../div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp
                                                            by Keenthe../a>
                                                        <span class="fs-7 text-muted fw-semibold">#45../span>
                                                 ../div>
                                                    <!--end::Title-->
                                             ../div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-chart-simple fs-2 text-primary">
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                         ../i>
                                                     ../span>
                                                 ../div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept
                                                            API Project Meet../a>
                                                        <span class="fs-7 text-muted fw-semibold">#84../span>
                                                 ../div>
                                                    <!--end::Title-->
                                             ../div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-chart fs-2 text-primary">
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                         ../i>
                                                     ../span>
                                                 ../div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI
                                                            Monitoring App Lau../a>
                                                        <span class="fs-7 text-muted fw-semibold">#84../span>
                                                 ../div>
                                                    <!--end::Title-->
                                             ../div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-chart-line-down fs-2 text-primary">
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                         ../i>
                                                     ../span>
                                                 ../div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project
                                                            Reference ../a>
                                                        <span class="fs-7 text-muted fw-semibold">#67../span>
                                                 ../div>
                                                    <!--end::Title-->
                                             ../div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-sms fs-2 text-primary">
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                         ../i>
                                                     ../span>
                                                 ../div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro
                                                            App Developm../a>
                                                        <span class="fs-7 text-muted fw-semibold">#84../span>
                                                 ../div>
                                                    <!--end::Title-->
                                             ../div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-bank fs-2 text-primary">
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                         ../i>
                                                     ../span>
                                                 ../div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix
                                                            Mobile ../a>
                                                        <span class="fs-7 text-muted fw-semibold">#45../span>
                                                 ../div>
                                                    <!--end::Title-->
                                             ../div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-chart-line-down fs-2 text-primary">
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                         ../i>
                                                     ../span>
                                                 ../div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing
                                                            UI Design" Lau../a>
                                                        <span class="fs-7 text-muted fw-semibold">#24../span>
                                                 ../div>
                                                    <!--end::Title-->
                                             ../div>
                                                <!--end::Item-->
                                         ../div>
                                            <!--end::Items-->
                                     ../div>
                                        <!--end::Recently viewed-->
                                        <!--begin::Empty-->
                                        <div data-kt-search-element="empty" class="text-center d-none">
                                            <!--begin::Icon-->
                                            <div class="pt-10 pb-10">
                                                <i class="ki-duotone ki-search-list fs-4x opacity-50">
                                                    <span class="path../span>
                                                    <span class="path../span>
                                                    <span class="path../span>
                                             ../i>
                                         ../div>
                                            <!--end::Icon-->
                                            <!--begin::Message-->
                                            <div class="pb-15 fw-semibold">
                                                <h3 class="text-gray-600 fs-5 mb-2">No result fo../h3>
                                                <div class="text-muted fs-7">Please try again with a different query
                                             ../div>
                                         ../div>
                                            <!--end::Message-->
                                     ../div>
                                        <!--end::Empty-->
                                 ../div>
                                    <!--end::Wrapper-->
                                    <!--begin::Preferences-->
                                    <form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
                                        <!--begin::Heading-->
                                        <h3 class="fw-semibold text-dark mb-7">Advanced Sea../h3>
                                        <!--end::Heading-->
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <input type="text" class="form-control form-control-sm form-control-solid"
                                                placeholder="Contains the word" name="que../>
                                     ../div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <!--begin::Radio group-->
                                            <div class="nav-group nav-group-fluid">
                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="type" value="has"
                                                        checked="check../>
                                                    <span
                                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary">../span>
                                             ../label>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="type" value="use../>
                                                    <span
                                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Us../span>
                                             ../label>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="type" value="orde../>
                                                    <span
                                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Ord../span>
                                             ../label>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="type"
                                                        value="projec../>
                                                    <span
                                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Proje../span>
                                             ../label>
                                                <!--end::Option-->
                                         ../div>
                                            <!--end::Radio group-->
                                     ../div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <input type="text" name="assignedto"
                                                class="form-control form-control-sm form-control-solid"
                                                placeholder="Assigned to" value../>
                                     ../div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <input type="text" name="collaborators"
                                                class="form-control form-control-sm form-control-solid"
                                                placeholder="Collaborators" value../>
                                     ../div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <!--begin::Radio group-->
                                            <div class="nav-group nav-group-fluid">
                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="attachment" value="has"
                                                        checked="check../>
                                                    <span
                                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has
                                                        attachm../span>
                                             ../label>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="attachment"
                                                        value="a../>
                                                    <span
                                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">../span>
                                             ../label>
                                                <!--end::Option-->
                                         ../div>
                                            <!--end::Radio group-->
                                     ../div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <select name="timezone" aria-label="Select a Timezone"
                                                data-control="select2" data-dropdown-parent="#kt_header_search"
                                                data-placeholder="date_period"
                                                class="form-select form-select-sm form-select-solid">
                                                <option value="next">Within the n../option>
                                                <option value="last">Within the l../option>
                                                <option value="between">Betw../option>
                                                <option value="on"../option>
                                         ../select>
                                     ../div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-8">
                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <input type="number" name="date_number"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Lenght" value../>
                                         ../div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <select name="date_typer" aria-label="Select a Timezone"
                                                    data-control="select2" data-dropdown-parent="#kt_header_search"
                                                    data-placeholder="Period"
                                                    class="form-select form-select-sm form-select-solid">
                                                    <option value="days">D../option>
                                                    <option value="weeks">We../option>
                                                    <option value="months">Mon../option>
                                                    <option value="years">Ye../option>
                                             ../select>
                                         ../div>
                                            <!--end::Col-->
                                     ../div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset"
                                                class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                                                data-kt-search-element="advanced-options-form-cancel">Can../button>
                                            <a href../../p../se../horizontal.html"
                                                class="btn btn-sm fw-bold btn-primary"
                                                data-kt-search-element="advanced-options-form-search">Sea../a>
                                     ../div>
                                        <!--end::Actions-->
                                 ../form>
                                    <!--end::Preferences-->
                                    <!--begin::Preferences-->
                                    <form data-kt-search-element="preferences" class="pt-1 d-none">
                                        <!--begin::Heading-->
                                        <h3 class="fw-semibold text-dark mb-7">Search Preferen../h3>
                                        <!--end::Heading-->
                                        <!--begin::Input group-->

                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span
                                                    class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Targ../span>
                                                <input class="form-check-input" id="jsGrid1" type="checkbox" value="1"
                                                    checked="check../>
                                         ../label>
                                     ../div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span
                                                    class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Affiliate
                                                    Progr../span>
                                                <input class="form-check-input" id="jsGrid1" type="checkbox"
                                                    value=../>
                                         ../label>
                                     ../div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span
                                                    class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Referr../span>
                                                <input class="form-check-input" id="jsGrid1" type="checkbox" value="1"
                                                    checked="check../>
                                         ../label>
                                     ../div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span
                                                    class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Us../span>
                                                <input class="form-check-input" type="checkbox" value=../>
                                         ../label>
                                     ../div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end pt-7">
                                            <button type="reset"
                                                class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                                                data-kt-search-element="preferences-dismiss">Can../button>
                                            <button type="submit" class="btn btn-sm fw-bold btn-primary">Save
                                                Chan../button>
                                     ../div>
                                        <!--end::Actions-->
                                 ../form>
                                    <!--end::Preferences-->
                             ../div>
                                <!--end::Menu-->
                         ../div>
                            <!--end::Search-->
                     ../div>
                        <!--begin::Notifications-->
                        <div class="app-navbar-item me-lg-1">
                            <!--begin::Menu- wrapper-->
                            <div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-color-primary w-35px h-35px w-md-40px h-md-40px"
                                data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-graph-3 fs-1">
                                    <span class="path../span>
                                    <span class="path../span>
                             ../i>
                         ../div>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px"
                                data-kt-menu="true" id="kt_menu_notifications">
                                <!--begin::Heading-->
                                <div class="d-flex flex-column bgi-no-repeat rounded-top"
                                    style="background-image:url('as..//m../../menu-header-bg.jpg')">
                                    <!--begin::Title-->
                                    <h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notifications
                                        <span class="fs-8 opacity-75 ps-3">24 repo../span>
                                 ../h3>
                                    <!--end::Title-->
                                    <!--begin::Tabs-->
                                    <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
                                        <li class="nav-item">
                                            <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                                                data-bs-toggle="tab" href="#kt_topbar_notifications_1">Ale../a>
                                     ../li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active"
                                                data-bs-toggle="tab" href="#kt_topbar_notifications_2">Upda../a>
                                     ../li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                                                data-bs-toggle="tab" href="#kt_topbar_notifications_3">L../a>
                                     ../li>
                                 ../ul>
                                    <!--end::Tabs-->
                             ../div>
                                <!--end::Heading-->
                                <!--begin::Tab content-->
                                <div class="tab-content">
                                    <!--begin::Tab panel-->
                                    <div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
                                        <!--begin::Items-->
                                        <div class="scroll-y mh-325px my-5 px-8">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
                                                        <span class="symbol-label bg-light-primary">
                                                            <i class="ki-duotone ki-abstract-28 fs-2 text-primary">
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                         ../i>
                                                     ../span>
                                                 ../div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                            Al../a>
                                                        <div class="text-gray-400 fs-7">Phase 1 developm../div>
                                                 ../div>
                                                    <!--end::Title-->
                                             ../div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">1../span>
                                                <!--end::Label-->
                                         ../div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
                                                        <span class="symbol-label bg-light-danger">
                                                            <i class="ki-duotone ki-information fs-2 text-danger">
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                         ../i>
                                                     ../span>
                                                 ../div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-bold">HR
                                                            Confident../a>
                                                        <div class="text-gray-400 fs-7">Confidential staff documents
                                                     ../div>
                                                 ../div>
                                                    <!--end::Title-->
                                             ../div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">2 ../span>
                                                <!--end::Label-->
                                         ../div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
                                                        <span class="symbol-label bg-light-warning">
                                                            <i class="ki-duotone ki-briefcase fs-2 text-warning">
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                         ../i>
                                                     ../span>
                                                 ../div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-bold">Company
                                                           ../a>
                                                        <div class="text-gray-400 fs-7">Corporeate staff profi../div>
                                                 ../div>
                                                    <!--end::Title-->
                                             ../div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">5 ../span>
                                                <!--end::Label-->
                                         ../div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
                                                        <span class="symbol-label bg-light-success">
                                                            <i class="ki-duotone ki-abstract-12 fs-2 text-success">
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                         ../i>
                                                     ../span>
                                                 ../div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                            Re../a>
                                                        <div class="text-gray-400 fs-7">New frontend admin th../div>
                                                 ../div>
                                                    <!--end::Title-->
                                             ../div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">2 d../span>
                                                <!--end::Label-->
                                         ../div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
                                                        <span class="symbol-label bg-light-primary">
                                                            <i class="ki-duotone ki-colors-square fs-2 text-primary">
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                         ../i>
                                                     ../span>
                                                 ../div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                            Breaf../a>
                                                        <div class="text-gray-400 fs-7">Product launch status update
                                                     ../div>
                                                 ../div>
                                                    <!--end::Title-->
                                             ../div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">21 ../span>
                                                <!--end::Label-->
                                         ../div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
                                                        <span class="symbol-label bg-light-info">
                                                            <i class="ki-duotone ki-picture fs-2 text-inf../i>
                                                     ../span>
                                                 ../div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner
                                                            as../</a>
                                                        <div class="text-gray-400 fs-7">Collection of banner images
                                                     ../div>
                                                 ../div>
                                                    <!--end::Title-->
                                             ../div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">21 ../span>
                                                <!--end::Label-->
                                         ../div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-35px me-4">
                                                        <span class="symbol-label bg-light-warning">
                                                            <i class="ki-duotone ki-color-swatch fs-2 text-warning">
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                                <span class="path../span>
                                                                <span class="path1../span>
                                                                <span class="path1../span>
                                                                <span class="path1../span>
                                                                <span class="path1../span>
                                                                <span class="path1../span>
                                                                <span class="path1../span>
                                                                <span class="path1../span>
                                                                <span class="path1../span>
                                                                <span class="path1../span>
                                                                <span class="path1../span>
                                                                <span class="path2../span>
                                                                <span class="path2../span>
                                                         ../i>
                                                     ../span>
                                                 ../div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Title-->
                                                    <div class="mb-0 me-2">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon
                                                            as../</a>
                                                        <div class="text-gray-400 fs-7">Collection of SVG ic../div>
                                                 ../div>
                                                    <!--end::Title-->
                                             ../div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">20 Ma../span>
                                                <!--end::Label-->
                                         ../div>
                                            <!--end::Item-->
                                     ../div>
                                        <!--end::Items-->
                                        <!--begin::View more-->
                                        <div class="py-3 text-center border-top">
                                            <a href="#" class="btn btn-color-gray-600 btn-active-color-primary">View All
                                                <i class="ki-duotone ki-arrow-right fs-5">
                                                    <span class="path../span>
                                                    <span class="path../span>
                                             ../i></a>
                                     ../div>
                                        <!--end::View more-->
                                 ../div>
                                    <!--end::Tab panel-->
                                    <!--begin::Tab panel-->
                                    <div class="tab-pane fade show active" id="kt_topbar_notifications_2"
                                        role="tabpanel">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column px-9">
                                            <!--begin::Section-->
                                            <div class="pt-10 pb-0">
                                                <!--begin::Title-->
                                                <h3 class="text-dark text-center fw-bold">Get Pro Acc../h3>
                                                <!--end::Title-->
                                                <!--begin::Text-->
                                                <div class="text-center text-gray-600 fw-semibold pt-1">Outlines keep
                                                    you honest. They stoping you from amazing poorly about dr../div>
                                                <!--end::Text-->
                                                <!--begin::Action-->
                                                <div class="text-center mt-5 mb-9">
                                                    <a href="#" class="btn btn-sm btn-primary px-6"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_upgrade_plan">Upgr../a>
                                             ../div>
                                                <!--end::Action-->
                                         ../div>
                                            <!--end::Section-->
                                            <!--begin::Illustration-->
                                            <div class="text-center px-4">
                                                <img class="mw-100 mh-200px" alt="image"
                                                    src="../as../m../illustrat../sketc../1.p../>
                                         ../div>
                                            <!--end::Illustration-->
                                     ../div>
                                        <!--end::Wrapper-->
                                 ../div>
                                    <!--end::Tab panel-->
                                    <!--begin::Tab panel-->
                                    <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
                                        <!--begin::Items-->
                                        <div class="scroll-y mh-325px my-5 px-8">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-success me-4">200../span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New
                                                        or../a>
                                                    <!--end::Title-->
                                             ../div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">Just ../span>
                                                <!--end::Label-->
                                         ../div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-danger me-4">500 ../span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New
                                                        custo../a>
                                                    <!--end::Title-->
                                             ../div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">2 ../span>
                                                <!--end::Label-->
                                         ../div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-success me-4">200../span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 text-hover-primary fw-semibold">Payment
                                                        proc../a>
                                                    <!--end::Title-->
                                             ../div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">5 ../span>
                                                <!--end::Label-->
                                         ../div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-warning me-4">300 ../span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 text-hover-primary fw-semibold">Search
                                                        qu../a>
                                                    <!--end::Title-->
                                             ../div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">2 d../span>
                                                <!--end::Label-->
                                         ../div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-success me-4">200../span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API
                                                        connect../a>
                                                    <!--end::Title-->
                                             ../div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">1 w../span>
                                                <!--end::Label-->
                                         ../div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-success me-4">200../span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 text-hover-primary fw-semibold">Database
                                                        rest../a>
                                                    <!--end::Title-->
                                             ../div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">Ma../span>
                                                <!--end::Label-->
                                         ../div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-warning me-4">300 ../span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 text-hover-primary fw-semibold">System
                                                        upd../a>
                                                    <!--end::Title-->
                                             ../div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">May../span>
                                                <!--end::Label-->
                                         ../div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-warning me-4">300 ../span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 text-hover-primary fw-semibold">Server OS
                                                        upd../a>
                                                    <!--end::Title-->
                                             ../div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">Ap../span>
                                                <!--end::Label-->
                                         ../div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-warning me-4">300 ../span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API
                                                        rollb../a>
                                                    <!--end::Title-->
                                             ../div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">Jun../span>
                                                <!--end::Label-->
                                         ../div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-danger me-4">500 ../span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 text-hover-primary fw-semibold">Refund
                                                        proc../a>
                                                    <!--end::Title-->
                                             ../div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">Jul../span>
                                                <!--end::Label-->
                                         ../div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-danger me-4">500 ../span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 text-hover-primary fw-semibold">Withdrawal
                                                        proc../a>
                                                    <!--end::Title-->
                                             ../div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">Sep../span>
                                                <!--end::Label-->
                                         ../div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack py-4">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Code-->
                                                    <span class="w-70px badge badge-light-danger me-4">500 ../span>
                                                    <!--end::Code-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 text-hover-primary fw-semibold">Mail
                                                        ta../a>
                                                    <!--end::Title-->
                                             ../div>
                                                <!--end::Section-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light fs-8">Dec../span>
                                                <!--end::Label-->
                                         ../div>
                                            <!--end::Item-->
                                     ../div>
                                        <!--end::Items-->
                                        <!--begin::View more-->
                                        <div class="py-3 text-center border-top">
                                            <a href="#" class="btn btn-color-gray-600 btn-active-color-primary">View All
                                                <i class="ki-duotone ki-arrow-right fs-5">
                                                    <span class="path../span>
                                                    <span class="path../span>
                                             ../i></a>
                                     ../div>
                                        <!--end::View more-->
                                 ../div>
                                    <!--end::Tab panel-->
                             ../div>
                                <!--end::Tab content-->
                         ../div>
                            <!--end::Menu-->
                            <!--end::Menu wrapper-->
                     ../div>
                        <!--end::Notifications-->
                        <!--begin::Quick links-->
                        <div class="app-navbar-item">
                            <!--begin::Menu- wrapper-->
                            <div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-color-primary w-35px h-35px w-md-40px h-md-40px"
                                data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-notification-status fs-1">
                                    <span class="path../span>
                                    <span class="path../span>
                                    <span class="path../span>
                                    <span class="path../span>
                             ../i>
                         ../div>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px"
                                data-kt-menu="true">
                                <!--begin::Heading-->
                                <div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10"
                                    style="background-image:url('as..//m../../menu-header-bg.jpg')">
                                    <!--begin::Title-->
                                    <h3 class="text-white fw-semibold mb-3">Quick Li../h3>
                                    <!--end::Title-->
                                    <!--begin::Status-->
                                    <span class="badge bg-primary text-inverse-primary py-2 px-3">25 pending
                                        ta../span>
                                    <!--end::Status-->
                             ../div>
                                <!--end::Heading-->
                                <!--begin:Nav-->
                                <div class="row g-0">
                                    <!--begin:Item-->
                                    <div class="col-6">
                                        <a href="#"
                                            class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
                                            <i class="ki-duotone ki-dollar fs-3x text-primary mb-2">
                                                <span class="path../span>
                                                <span class="path../span>
                                                <span class="path../span>
                                         ../i>
                                            <span class="fs-5 fw-semibold text-gray-800 mb-0">Account../span>
                                            <span class="fs-7 text-gray-400">eComme../span>
                                     ../a>
                                 ../div>
                                    <!--end:Item-->
                                    <!--begin:Item-->
                                    <div class="col-6">
                                        <a href="#"
                                            class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom">
                                            <i class="ki-duotone ki-sms fs-3x text-primary mb-2">
                                                <span class="path../span>
                                                <span class="path../span>
                                         ../i>
                                            <span class="fs-5 fw-semibold text-gray-800 mb-0">Administrat../span>
                                            <span class="fs-7 text-gray-400">Cons../span>
                                     ../a>
                                 ../div>
                                    <!--end:Item-->
                                    <!--begin:Item-->
                                    <div class="col-6">
                                        <a href../../../proj../list.html"
                                            class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end">
                                            <i class="ki-duotone ki-abstract-41 fs-3x text-primary mb-2">
                                                <span class="path../span>
                                                <span class="path../span>
                                         ../i>
                                            <span class="fs-5 fw-semibold text-gray-800 mb-0">Proje../span>
                                            <span class="fs-7 text-gray-400">Pending Ta../span>
                                     ../a>
                                 ../div>
                                    <!--end:Item-->
                                    <!--begin:Item-->
                                    <div class="col-6">
                                        <a href="#" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light">
                                            <i class="ki-duotone ki-briefcase fs-3x text-primary mb-2">
                                                <span class="path../span>
                                                <span class="path../span>
                                         ../i>
                                            <span class="fs-5 fw-semibold text-gray-800 mb-0">Custom../span>
                                            <span class="fs-7 text-gray-400">Latest ca../span>
                                     ../a>
                                 ../div>
                                    <!--end:Item-->
                             ../div>
                                <!--end:Nav-->
                                <!--begin::View more-->
                                <div class="py-2 text-center border-top">
                                    <a href="#" class="btn btn-color-gray-600 btn-active-color-primary">View All
                                        <i class="ki-duotone ki-arrow-right fs-5">
                                            <span class="path../span>
                                            <span class="path../span>
                                     ../i></a>
                             ../div>
                                <!--end::View more-->
                         ../div>
                            <!--end::Menu-->
                            <!--end::Menu wrapper-->
                     ../div>
                        <!--end::Quick links-->
                        <!--begin::User menu-->
                        <div class="app-navbar-item ms-3 ms-lg-4 me-lg-2" id="kt_header_user_menu_toggle">
                            <!--begin::Menu wrapper-->
                            <div class="cursor-pointer symbol symbol-30px symbol-lg-40px"
                                data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                data-kt-menu-placement="bottom-end">
                                <img src="../as../m../ava../300-2.jpg" alt="us../>
                         ../div>
                            <!--begin::User account menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content d-flex align-items-center px-3">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-50px me-5">
                                            <img alt="Logo" src="../as../m../ava../300-2.j../>
                                     ../div>
                                        <!--end::Avatar-->
                                        <!--begin::Username-->
                                        <div class="d-flex flex-column">
                                            <div class="fw-bold d-flex align-items-center fs-5">Jane Cooper
                                                <span
                                                    class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">../span>
                                         ../div>
                                            <a href="#"
                                                class="fw-semibold text-muted text-hover-primary fs-7">jane@kt.../a>
                                     ../div>
                                        <!--end::Username-->
                                 ../div>
                             ../div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-../div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href../../acc../overview.html" class="menu-link px-5">My Prof../a>
                             ../div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href../../../proj../list.html" class="menu-link px-5">
                                        <span class="menu-text">My Proje../span>
                                        <span class="menu-badge">
                                            <span class="badge badge-light-danger badge-circle fw-bold fs-7../span>
                                     ../span>
                                 ../a>
                             ../div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                    <a href="#" class="menu-link px-5">
                                        <span class="menu-title">My Subscript../span>
                                        <span class="menu-arro../span>
                                 ../a>
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-5">Referr../a>
                                     ../div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-5">Bill../a>
                                     ../div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-5">Payme../a>
                                     ../div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link d-flex flex-stack px-5">Statements
                                                <span class="ms-2 lh-0" data-bs-toggle="tooltip"
                                                    title="View your statements">
                                                    <i class="ki-duotone ki-information-5 fs-5">
                                                        <span class="path../span>
                                                        <span class="path../span>
                                                        <span class="path../span>
                                                 ../i>
                                             ../sp../a>
                                     ../div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator my-../div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3">
                                                <label
                                                    class="form-check form-switch form-check-custom form-check-solid">
                                                    <input class="form-check-input w-30px h-20px" type="checkbox"
                                                        value="1" checked="checked" name="notificatio../>
                                                    <span class="form-check-label text-muted fs-7">Notificati../span>
                                             ../label>
                                         ../div>
                                     ../div>
                                        <!--end::Menu item-->
                                 ../div>
                                    <!--end::Menu sub-->
                             ../div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="#" class="menu-link px-5">My Stateme../a>
                             ../div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-../div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                    <a href="#" class="menu-link px-5">
                                        <span class="menu-title position-relative">Mode
                                            <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                                                <i class="ki-duotone ki-night-day theme-light-show fs-2">
                                                    <span class="path../span>
                                                    <span class="path../span>
                                                    <span class="path../span>
                                                    <span class="path../span>
                                                    <span class="path../span>
                                                    <span class="path../span>
                                                    <span class="path../span>
                                                    <span class="path../span>
                                                    <span class="path../span>
                                                    <span class="path1../span>
                                             ../i>
                                                <i class="ki-duotone ki-moon theme-dark-show fs-2">
                                                    <span class="path../span>
                                                    <span class="path../span>
                                             ../i>
                                         ../sp../span>
                                 ../a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                        data-kt-menu="true" data-kt-element="theme-mode-menu">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                                data-kt-value="light">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="ki-duotone ki-night-day fs-2">
                                                        <span class="path../span>
                                                        <span class="path../span>
                                                        <span class="path../span>
                                                        <span class="path../span>
                                                        <span class="path../span>
                                                        <span class="path../span>
                                                        <span class="path../span>
                                                        <span class="path../span>
                                                        <span class="path../span>
                                                        <span class="path1../span>
                                                 ../i>
                                             ../span>
                                                <span class="menu-title">Li../span>
                                         ../a>
                                     ../div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                                data-kt-value="dark">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="ki-duotone ki-moon fs-2">
                                                        <span class="path../span>
                                                        <span class="path../span>
                                                 ../i>
                                             ../span>
                                                <span class="menu-title">D../span>
                                         ../a>
                                     ../div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                                data-kt-value="system">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="ki-duotone ki-screen fs-2">
                                                        <span class="path../span>
                                                        <span class="path../span>
                                                        <span class="path../span>
                                                        <span class="path../span>
                                                 ../i>
                                             ../span>
                                                <span class="menu-title">Sys../span>
                                         ../a>
                                     ../div>
                                        <!--end::Menu item-->
                                 ../div>
                                    <!--end::Menu-->
                             ../div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                    <a href="#" class="menu-link px-5">
                                        <span class="menu-title position-relative">Language
                                            <span
                                                class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
                                                <img class="w-15px h-15px rounded-1 ms-2"
                                                    src="../as../m../f../united-states.svg"
                                                    alt../></sp../span>
                                 ../a>
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href../../acc../settings.html"
                                                class="menu-link d-flex px-5 active">
                                                <span class="symbol symbol-20px me-4">
                                                    <img class="rounded-1" src="../as../m../f../united-states.svg"
                                                        alt../>
                                             ../span>Engl../a>
                                     ../div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href../../acc../settings.html" class="menu-link d-flex px-5">
                                                <span class="symbol symbol-20px me-4">
                                                    <img class="rounded-1" src="../as../m../f../spain.svg"
                                                        alt../>
                                             ../span>Span../a>
                                     ../div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href../../acc../settings.html" class="menu-link d-flex px-5">
                                                <span class="symbol symbol-20px me-4">
                                                    <img class="rounded-1" src="../as../m../f../germany.svg"
                                                        alt../>
                                             ../span>Ger../a>
                                     ../div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href../../acc../settings.html" class="menu-link d-flex px-5">
                                                <span class="symbol symbol-20px me-4">
                                                    <img class="rounded-1" src="../as../m../f../japan.svg"
                                                        alt../>
                                             ../span>Japan../a>
                                     ../div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href../../acc../settings.html" class="menu-link d-flex px-5">
                                                <span class="symbol symbol-20px me-4">
                                                    <img class="rounded-1" src="../as../m../f../france.svg"
                                                        alt../>
                                             ../span>Fre../a>
                                     ../div>
                                        <!--end::Menu item-->
                                 ../div>
                                    <!--end::Menu sub-->
                             ../div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5 my-1">
                                    <a href../../acc../settings.html" class="menu-link px-5">Account Setti../a>
                             ../div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href../../authentica../lay../corpo../sign-in.html"
                                        class="menu-link px-5">Sign ../a>
                             ../div>
                                <!--end::Menu item-->
                         ../div>
                            <!--end::User account menu-->
                            <!--end::Menu wrapper-->
                     ../div>
                        <!--end::User menu-->
                        <!--begin::Action-->
                        <div class="app-navbar-item ms-3 ms-lg-4 me-lg-6">
                            <!--begin::Link-->
                            <a href../../authentica../sig../basic.html"
                                class="btn btn-icon btn-custom btn-color-gray-600 btn-active-color-primary w-35px h-35px w-md-40px h-md-40px">
                                <i class="ki-duotone ki-setting-3 fs-1">
                                    <span class="path../span>
                                    <span class="path../span>
                                    <span class="path../span>
                                    <span class="path../span>
                                    <span class="path../span>
                             ../i>
                         ../a>
                            <!--end::Link-->
                     ../div>
                        <!--end::Action-->
                        <!--begin::Header menu toggle-->
                        <div class="app-navbar-item ms-3 ms-lg-4 ms-n2 me-3 d-flex d-lg-none">
                            <div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-color-primary w-35px h-35px w-md-40px h-md-40px"
                                id="kt_app_aside_mobile_toggle">
                                <i class="ki-duotone ki-burger-menu-2 fs-2">
                                    <span class="path../span>
                                    <span class="path../span>
                                    <span class="path../span>
                                    <span class="path../span>
                                    <span class="path../span>
                                    <span class="path../span>
                                    <span class="path../span>
                                    <span class="path../span>
                                    <span class="path../span>
                                    <span class="path1../span>
                             ../i>
                         ../div>
                     ../div>
                        <!--end::Header menu toggle-->
                 ../div>
                    <!--end::Navbar-->
             ../div>
                <!--end::Header main-->
                <!--begin::Separator-->
                <div class="app-header-separato../div>
                <!--end::Separator-->
         ../div>
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                <!--begin::Sidebar-->
                <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true"
                    data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
                    data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start"
                    data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
                    <!--begin::Main-->
                    <div class="d-flex flex-column justify-content-between h-100 hover-scroll-overlay-y my-2 d-flex flex-column"
                        id="kt_app_sidebar_main" data-kt-scroll="true" data-kt-scroll-activate="true"
                        data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header"
                        data-kt-scroll-wrappers="#kt_app_main" data-kt-scroll-offset="5px">
                        <!--begin::Sidebar menu-->
                        <div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false"
                            class="flex-column-fluid menu menu-sub-indention menu-column menu-rounded menu-active-bg mb-7">
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                                <!--begin:Menu link-->
                                <a style="color: rgb(113, 110, 110);font-size: 15px;font-weight: bold;"
                                    href="index.html">

                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-element-11 fs-1">
                                            <span class="path../span>
                                            <span class="path../span>
                                            <span class="path../span>
                                            <span class="path../span>
                                     ../i>
                                 ../span>
                                    <span class="menu-title">ANASA../span>
                                    <span class="menu-arro../span>

                         ../div>
                            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                                <!--begin:Menu link-->
                                <a style="color: rgb(113, 110, 110);font-size: 15px;font-weight: bold;"
                                    href="aidatlar.html">

                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-element-11 fs-1">
                                            <span class="path../span>
                                            <span class="path../span>
                                            <span class="path../span>
                                            <span class="path../span>
                                     ../i>
                                 ../span>
                                    <span class="menu-title">AIDAT../span>
                                    <span class="menu-arro../span>

                         ../div>
                            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                                <!--begin:Menu link-->
                                <a style="color: rgb(113, 110, 110);font-size: 15px;font-weight: bold;"
                                    href="giderler.html">

                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-chart-line-star fs-1">
                                            <span class="path../span>
                                            <span class="path../span>
                                            <span class="path../span>
                                     ../i>
                                 ../span>
                                    <span class="menu-title">GİDER../span>
                                    <span class="menu-arro../span>

                         ../div>
                            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                                <!--begin:Menu link-->
                                <a style="color: rgb(113, 110, 110);font-size: 15px;font-weight: bold;"
                                    href="uyeler.html">

                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-element-11 fs-1">
                                            <span class="path../span>
                                            <span class="path../span>
                                            <span class="path../span>
                                            <span class="path../span>
                                     ../i>
                                 ../span>
                                    <span class="menu-title">ÜYE../span>
                                    <span class="menu-arro../span>

                         ../div>
                            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                                <!--begin:Menu link-->
                                <a style="color: rgb(113, 110, 110);font-size: 15px;font-weight: bold;"
                                    href="daireler.html">

                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-element-11 fs-1">
                                            <span class="path../span>
                                            <span class="path../span>
                                            <span class="path../span>
                                            <span class="path../span>
                                     ../i>
                                 ../span>
                                    <span class="menu-title">DAİRE../span>
                                    <span class="menu-arro../span>

                         ../div>
                            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                                <!--begin:Menu link-->
                                <a style="color: rgb(113, 110, 110);font-size: 15px;font-weight: bold;"
                                    href="site-duzen.html">

                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-some-files fs-1">
                                            <span class="path../span>
                                            <span class="path../span>
                                     ../i>
                                 ../span>
                                    <span class="menu-title">SİTE BLOG DÜZ../span>
                                    <span class="menu-arro../span>

                         ../div>
                            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                                <!--begin:Menu link-->
                                <a style="color: rgb(113, 110, 110);font-size: 15px;font-weight: bold;"
                                    href="kasa.html">

                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-element-11 fs-1">
                                            <span class="path../span>
                                            <span class="path../span>
                                            <span class="path../span>
                                            <span class="path../span>
                                     ../i>
                                 ../span>
                                    <span class="menu-title">K../span>
                                    <span class="menu-arro../span>

                         ../div>
                            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                                <!--begin:Menu link-->
                                <a style="color: rgb(113, 110, 110);font-size: 15px;font-weight: bold;"
                                    href="login.html">

                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-element-11 fs-1">
                                            <span class="path../span>
                                            <span class="path../span>
                                            <span class="path../span>
                                            <span class="path../span>
                                     ../i>
                                 ../span>
                                    <span class="menu-title">OTURUMU KA../span>
                                    <span class="menu-arro../span>

                         ../div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <!--end:Menu sub-->
                         ../div>
                     ../div>
                        <!--end::Sidebar menu-->
                        <!--begin::Footer-->
                        < <!--end::Footer-->
                 ../div>
                    <!--end::Main-->
             ../div>
                <!--end::Sidebar-->
                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">
                        <!--begin::Toolbar-->
                        <div id="kt_app_toolbar" class="app-toolbar pt-5">
                            <!--begin::Toolbar container-->
                            <div id="kt_app_toolbar_container"
                                class="app-container container-fluid d-flex align-items-stretch">
                                <!--begin::Toolbar wrapper-->
                                <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                                    <html lang="en">

                                    <head>
                                        <meta charset="utf-8">
                                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                        <meta name="viewport" content="width=device-width, initial-scale=1">
                                        <title>Bootstrap CRUD Data Table for Database with Modal F../title>
                                        <link rel="stylesheet"
                                            href="ht..//fonts.googleapis../css?family=Roboto|Varela+Round">
                                        <link rel="stylesheet"
                                            href="ht..//fonts.googleapis../icon?family=Material+Icons">
                                        <link rel="stylesheet"
                                            href="ht..//maxcdn.bootstrapcdn../font-awe../4../css/font-awesome.min.css">
                                        <link rel="stylesheet"
                                            href="ht..//maxcdn.bootstrapcdn../boots../3../css/bootstrap.min.css">
                                        <script src="ht..//ajax.googleapis../../../jq../1.../jquery.min.js">
                                     ../script>
                                        <script
                                            src="ht..//maxcdn.bootstrapcdn../boots../3../js/bootstrap.min.js">
                                     ../script>
                                        <style>
                                        body {
                                            color: #566787;
                                            background: #f5f5f5;
                                            font-family: 'Varela Round', sans-serif;
                                            font-size: 13px;
                                        }

                                        .table-responsive {
                                            margin: 30px 0;
                                        }

                                        .table-wrapper {
                                            min-width: 1000px;
                                            background: #ffffff;
                                            padding: 20px 25px;
                                            border-radius: 3px;
                                            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
                                        }

                                        .table-title {
                                            padding-bottom: 15px;
                                            background: #ffffff;
                                            color: #a9b1e2;
                                            padding: 16px 30px;
                                            margin: -20px -25px 10px;
                                            border-radius: 3px 3px 0 0;
                                        }

                                        .table-title h2 {
                                            margin: 5px 0 0;
                                            font-size: 24px;
                                        }

                                        .table-title .btn-group {
                                            float: right;
                                        }

                                        .table-title .btn {
                                            color: #ffffff;
                                            float: right;
                                            font-size: 13px;
                                            border: none;
                                            min-width: 50px;
                                            border-radius: 2px;
                                            border: none;
                                            outline: none !important;
                                            margin-left: 10px;
                                        }

                                        .table-title .btn i {
                                            float: left;
                                            font-size: 21px;
                                            margin-right: 5px;
                                        }

                                        .table-title .btn span {
                                            float: left;
                                            margin-top: 2px;
                                        }

                                        table.table tr th,
                                        table.table tr td {
                                            border-color: #e9e9e9;
                                            padding: 12px 15px;
                                            vertical-align: middle;
                                        }

                                        table.table tr th:first-child {
                                            width: 60px;
                                        }

                                        table.table tr th:last-child {
                                            width: 100px;
                                        }

                                        table.table-striped tbody tr:nth-of-type(odd) {
                                            background-color: #fcfcfc;
                                        }

                                        table.table-striped.table-hover tbody tr:hover {
                                            background: #f5f5f5;
                                        }

                                        table.table th i {
                                            font-size: 13px;
                                            margin: 0 5px;
                                            cursor: pointer;
                                        }

                                        table.table td:last-child i {
                                            opacity: 0.9;
                                            font-size: 22px;
                                            margin: 0 5px;
                                        }

                                        table.table td a {
                                            font-weight: bold;
                                            color: #566787;
                                            display: inline-block;
                                            text-decoration: none;
                                            outline: none !important;
                                        }

                                        table.table td a:hover {
                                            color: #2196F3;
                                        }

                                        table.table td a.edit {
                                            color: #FFC107;
                                        }

                                        table.table td a.delete {
                                            color: #F44336;
                                        }

                                        table.table td i {
                                            font-size: 19px;
                                        }

                                        table.table .avatar {
                                            border-radius: 50%;
                                            vertical-align: middle;
                                            margin-right: 10px;
                                        }

                                        .pagination {
                                            float: right;
                                            margin: 0 0 5px;
                                        }

                                        .pagination li a {
                                            border: none;
                                            font-size: 13px;
                                            min-width: 30px;
                                            min-height: 30px;
                                            color: #999;
                                            margin: 0 2px;
                                            line-height: 30px;
                                            border-radius: 2px !important;
                                            text-align: center;
                                            padding: 0 6px;
                                        }

                                        .pagination li a:hover {
                                            color: #666;
                                        }

                                        .pagination li.active a,
                                        .pagination li.active a.page-link {
                                            background: #03A9F4;
                                        }

                                        .pagination li.active a:hover {
                                            background: #0397d6;
                                        }

                                        .pagination li.disabled i {
                                            color: #ccc;
                                        }

                                        .pagination li i {
                                            font-size: 16px;
                                            padding-top: 6px
                                        }

                                        .hint-text {
                                            float: left;
                                            margin-top: 10px;
                                            font-size: 13px;
                                        }

                                    ../* Custom checkb../
                                        .custom-checkbox {
                                            position: relative;
                                        }

                                        .custom-checkbox input[type="checkbox"] {
                                            opacity: 0;
                                            position: absolute;
                                            margin: 5px 0 0 3px;
                                            z-index: 9;
                                        }

                                        .custom-checkbox label:before {
                                            width: 18px;
                                            height: 18px;
                                        }

                                        .custom-checkbox label:before {
                                            content: '';
                                            margin-right: 10px;
                                            display: inline-block;
                                            vertical-align: text-top;
                                            background: white;
                                            border: 1px solid #bbb;
                                            border-radius: 2px;
                                            box-sizing: border-box;
                                            z-index: 2;
                                        }

                                        .custom-checkbox input[type="checkbox"]:checked+label:after {
                                            content: '';
                                            position: absolute;
                                            left: 6px;
                                            top: 3px;
                                            width: 6px;
                                            height: 11px;
                                            border: solid #000;
                                            border-width: 0 3px 3px 0;
                                            transform: inherit;
                                            z-index: 3;
                                            transform: rotateZ(45deg);
                                        }

                                        .custom-checkbox input[type="checkbox"]:checked+label:before {
                                            border-color: #03A9F4;
                                            background: #03A9F4;
                                        }

                                        .custom-checkbox input[type="checkbox"]:checked+label:after {
                                            border-color: #fff;
                                        }

                                        .custom-checkbox input[type="checkbox"]:disabled+label:before {
                                            color: #b8b8b8;
                                            cursor: auto;
                                            box-shadow: none;
                                            background: #ddd;
                                        }

                                    ../* Modal styl../
                                        .modal .modal-dialog {
                                            max-width: 400px;
                                        }

                                        .modal .modal-header,
                                        .modal .modal-body,
                                        .modal .modal-footer {
                                            padding: 20px 30px;
                                        }

                                        .modal .modal-content {
                                            border-radius: 3px;
                                        }

                                        .modal .modal-footer {
                                            background: #ecf0f1;
                                            border-radius: 0 0 3px 3px;
                                        }

                                        .modal .modal-title {
                                            display: inline-block;
                                        }

                                        .modal .form-control {
                                            border-radius: 2px;
                                            box-shadow: none;
                                            border-color: #dddddd;
                                        }

                                        .modal textarea.form-control {
                                            resize: vertical;
                                        }

                                        .modal .btn {
                                            border-radius: 2px;
                                            min-width: 100px;
                                        }

                                        .modal form label {
                                            font-weight: normal;
                                        }
                                     ../style>
                                        <script>
                                        $(document).ready(function() {
                                        ..// Activate tooltip
                                            $('[data-toggle="tooltip"]').tooltip();

                                        ..// Se../Deselect checkboxes
                                            var checkbox = $('table tbody input[type="checkbox"]');
                                            $("#selectAll").click(function() {
                                                if (this.checked) {
                                                    checkbox.each(function() {
                                                        this.checked = true;
                                                    });
                                                } else {
                                                    checkbox.each(function() {
                                                        this.checked = false;
                                                    });
                                                }
                                            });
                                            checkbox.click(function() {
                                                if (!this.checked) {
                                                    $("#selectAll").prop("checked", false);
                                                }
                                            });
                                        });
                                     ../script>
                                 ../head>

                                    <body>
                                        <div class="container">
                                            <div class="table-responsive">
                                                <div class="table-wrapper">
                                                    <div class="table-title">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <h2>Aidat <b>List../b></h2>
                                                         ../div>
                                                            <div class="col-xs-6">
                                                                <a style="border-radius: 8px;" href="#addEmployeeModal"
                                                                    class="btn btn-success" data-toggle="modal"><i
                                                                        class="material-icons">&#xE1../i> <span>Aidat
                                                                        E../sp../a>
                                                                <a style="border-radius: 8px;"
                                                                    href="#deleteEmployeeModal" class="btn btn-danger"
                                                                    data-toggle="modal"><i
                                                                        class="material-icons">&#xE1../i>
                                                                    <span>../sp../a>
                                                         ../div>
                                                     ../div>
                                                 ../div>
                                                    <table class="table table-striped table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    <span class="custom-checkbox">
                                                                        <input type="checkbox" id="selectAll">
                                                                        <label for="selectAl../label>
                                                                 ../span>
                                                             ../th>
                                                                <th>Ev Sahibi ../th>
                                                                <th>Daire../th>
                                                                <th>Ta../th>
                                                                <th>Aidat Tut../th>
                                                                <th>Ödenme Tut../th>
                                                                <th>İşlem../th>
                                                         ../tr>
                                                     ../thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <span class="custom-checkbox">
                                                                        <input type="checkbox" id="checkbox1"
                                                                            name="options[]" value="1">
                                                                        <label for="checkbox../label>
                                                                 ../span>
                                                             ../td>
                                                                <td>Thomas Ha../td>
                                                                <td>thomashardy@mail.../td>
                                                                <td>89 Chiaroscuro Rd, Portland, ../td>
                                                                <td>(171) 555-2../td>
                                                                <td>(171) 555-2../td>
                                                                <td>
                                                                    <a href="#editEmployeeModal" class="edit"
                                                                        data-toggle="modal"><i class="material-icons"
                                                                            data-toggle="tooltip"
                                                                            title="Edit">&#xE2../i></a>
                                                                    <a href="#deleteEmployeeModal" class="delete"
                                                                        data-toggle="modal"><i class="material-icons"
                                                                            data-toggle="tooltip"
                                                                            title="Delete">&#xE8../i></a>
                                                             ../td>
                                                         ../tr>
                                                            <tr>
                                                                <td>
                                                                    <span class="custom-checkbox">
                                                                        <input type="checkbox" id="checkbox2"
                                                                            name="options[]" value="1">
                                                                        <label for="checkbox../label>
                                                                 ../span>
                                                             ../td>
                                                                <td>Dominique Perr../td>
                                                                <td>dominiqueperrier@mail.../td>
                                                                <td>Obere Str. 57, Berlin, Germ../td>
                                                                <td>(313) 555-5../td>
                                                                <td>(171) 555-2../td>
                                                                <td>
                                                                    <a href="#editEmployeeModal" class="edit"
                                                                        data-toggle="modal"><i class="material-icons"
                                                                            data-toggle="tooltip"
                                                                            title="Edit">&#xE2../i></a>
                                                                    <a href="#deleteEmployeeModal" class="delete"
                                                                        data-toggle="modal"><i class="material-icons"
                                                                            data-toggle="tooltip"
                                                                            title="Delete">&#xE8../i></a>
                                                             ../td>
                                                         ../tr>
                                                            <tr>
                                                                <td>
                                                                    <span class="custom-checkbox">
                                                                        <input type="checkbox" id="checkbox3"
                                                                            name="options[]" value="1">
                                                                        <label for="checkbox../label>
                                                                 ../span>
                                                             ../td>
                                                                <td>Maria And../td>
                                                                <td>mariaanders@mail.../td>
                                                                <td>25, rue Lauriston, Paris, Fra../td>
                                                                <td>(503) 555-9../td>
                                                                <td>(171) 555-2../td>
                                                                <td>
                                                                    <a href="#editEmployeeModal" class="edit"
                                                                        data-toggle="modal"><i class="material-icons"
                                                                            data-toggle="tooltip"
                                                                            title="Edit">&#xE2../i></a>
                                                                    <a href="#deleteEmployeeModal" class="delete"
                                                                        data-toggle="modal"><i class="material-icons"
                                                                            data-toggle="tooltip"
                                                                            title="Delete">&#xE8../i></a>
                                                             ../td>
                                                         ../tr>
                                                            <tr>
                                                                <td>
                                                                    <span class="custom-checkbox">
                                                                        <input type="checkbox" id="checkbox4"
                                                                            name="options[]" value="1">
                                                                        <label for="checkbox../label>
                                                                 ../span>
                                                             ../td>
                                                                <td>Fran Wil../td>
                                                                <td>franwilson@mail.../td>
                                                                <../ Araquil, 67, Madrid, Sp../td>
                                                                <td>(204) 619-5../td>
                                                                H <td>(171) 555-2../td>
                                                                <td>
                                                                    <a href="#editEmployeeModal" class="edit"
                                                                        data-toggle="modal"><i class="material-icons"
                                                                            data-toggle="tooltip"
                                                                            title="Edit">&#xE2../i></a>
                                                                    <a href="#deleteEmployeeModal" class="delete"
                                                                        data-toggle="modal"><i class="material-icons"
                                                                            data-toggle="tooltip"
                                                                            title="Delete">&#xE8../i></a>
                                                             ../td>
                                                         ../tr>
                                                            <tr>
                                                                <td>
                                                                    <span class="custom-checkbox">
                                                                        <input type="checkbox" id="checkbox5"
                                                                            name="options[]" value="1">
                                                                        <label for="checkbox../label>
                                                                 ../span>
                                                             ../td>
                                                                <td>Martin Bl../td>
                                                                <td>martinblank@mail.../td>
                                                                <td>Via Monte Bianco 34, Turin, It../td>
                                                                <td>(480) 631-2../td>
                                                                <td>(171) 555-2../td>
                                                                <td>
                                                                    <a href="#editEmployeeModal" class="edit"
                                                                        data-toggle="modal"><i class="material-icons"
                                                                            data-toggle="tooltip"
                                                                            title="Edit">&#xE2../i></a>
                                                                    <a href="#deleteEmployeeModal" class="delete"
                                                                        data-toggle="modal"><i class="material-icons"
                                                                            data-toggle="tooltip"
                                                                            title="Delete">&#xE8../i></a>
                                                             ../td>
                                                         ../tr>
                                                     ../tbody>
                                                 ../table>
                                                    <div class="clearfix">
                                                        <div class="hint-text">Showing <../b> out of <b../b> entries
                                                     ../div>
                                                        <ul class="pagination">
                                                            <li class="page-item disabled"><a href="#">Previ../a></li>
                                                            <li class="page-item"><a href="#" class="page-link../a>
                                                         ../li>
                                                            <li class="page-item"><a href="#" class="page-link../a>
                                                         ../li>
                                                            <li class="page-item active"><a href="#"
                                                                    class="page-link../a></li>
                                                            <li class="page-item"><a href="#" class="page-link../a>
                                                         ../li>
                                                            <li class="page-item"><a href="#" class="page-link../a>
                                                         ../li>
                                                            <li class="page-item"><a href="#" class="page-link">N../a>
                                                         ../li>
                                                     ../ul>
                                                 ../div>
                                             ../div>
                                         ../div>
                                     ../div>
                                        <!-- Edit Modal HTML -->
                                        <div id="addEmployeeModal" class="modal fade">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form>
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Aidat E../h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">&tim../button>
                                                     ../div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label>Ev Sahibi ../label>
                                                                <input type="text" class="form-control" id="jsGrid1"
                                                                    required>
                                                         ../div>
                                                            <div class="form-group">
                                                                <label>Daire../label>
                                                                <input type="number" class="form-control" id="jsGrid1"
                                                                    required>
                                                         ../div>
                                                            <div class="form-group">
                                                                <label>Ta../label>
                                                                <input type="date" class="form-control" id="jsGrid1"
                                                                    required>
                                                         ../div>
                                                            <div class="form-group">
                                                                <label>Aidat Tut../label>
                                                                <input type="number" class="form-control" id="jsGrid1"
                                                                    required>
                                                         ../div>
                                                            <div class="form-group">
                                                                <label>Ödenme Tut../label>
                                                                <input type="number" class="form-control" id="jsGrid1"
                                                                    required>
                                                         ../div>
                                                     ../div>
                                                        <div class="modal-footer">
                                                            <input type="button" class="btn btn-danger"
                                                                data-dismiss="modal" value="İptal">
                                                            <input type="submit" class="btn btn-success" id="jsGrid1"
                                                                value="Ekle">
                                                     ../div>
                                                 ../form>
                                             ../div>
                                         ../div>
                                     ../div>
                                        <!-- Edit Modal HTML -->
                                        <div id="editEmployeeModal" class="modal fade">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form>
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit Emplo../h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">&tim../button>
                                                     ../div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label>N../label>
                                                                <input type="text" class="form-control" required>
                                                         ../div>
                                                            <div class="form-group">
                                                                <label>Em../label>
                                                                <input type="email" class="form-control" required>
                                                         ../div>
                                                            <div class="form-group">
                                                                <label>Addr../label>
                                                                <textarea class="form-control" requir../textarea>
                                                         ../div>
                                                            <div class="form-group">
                                                                <label>Ph../label>
                                                                <input type="text" class="form-control" required>
                                                         ../div>
                                                     ../div>
                                                        <div class="modal-footer">
                                                            <input type="button" class="btn btn-default"
                                                                data-dismiss="modal" value="Cancel">
                                                            <input type="submit" class="btn btn-info" value="Save">
                                                     ../div>
                                                 ../form>
                                             ../div>
                                         ../div>
                                     ../div>
                                        <!-- Delete Modal HTML -->
                                        <div id="deleteEmployeeModal" class="modal fade">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form>
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Delete Emplo../h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">&tim../button>
                                                     ../div>
                                                        <div class="modal-body">
                                                            <p>Are you sure you want to delete these Recor../p>
                                                            <p class="text-warning"><small>This action cannot be
                                                                    undo../sma../p>
                                                     ../div>
                                                        <div class="modal-footer">
                                                            <input type="button" class="btn btn-default"
                                                                data-dismiss="modal" value="Cancel">
                                                            <input type="submit" class="btn btn-danger" value="Delete">
                                                     ../div>
                                                 ../form>
                                             ../div>
                                         ../div>
                                     ../div>
                                 ../body>

                                 ../html>
                             ../div>
                                <!--end::Toolbar wrapper-->
                         ../div>
                            <!--end::Toolbar container-->
                     ../div>
                        <!--end::Toolbar-->
                        <!--begin::Content-->
                        <!--end::Content-->
                 ../div>
                    <!--end::Content wrapper-->
                    <!--begin::Footer-->
                    <div id="kt_app_footer"
                        class="app-footer align-items-center justify-content-center justify-content-md-between flex-column flex-md-row py-3">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-semibold me-1">2023&co../span>
                            <a href="ht..//keenthemes.com" target="_blank"
                                class="text-gray-800 text-hover-primary">Keenthe../a>
                     ../div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                            <li class="menu-item">
                                <a href="ht..//keenthemes.com" target="_blank" class="menu-link px-2">Ab../a>
                         ../li>
                            <li class="menu-item">
                                <a href="ht..//devs.keenthemes.com" target="_blank" class="menu-link px-2">Supp../a>
                         ../li>
                            <li class="menu-item">
                                <a href="ht..//keenthemes../prod../saul-html-pro" target="_blank"
                                    class="menu-link px-2">Purch../a>
                         ../li>
                     ../ul>
                        <!--end::Menu-->
                 ../div>
                    <!--end::Footer-->
             ../div>
                <!--end:::Main-->
                <!--begin::aside-->
                <div id="kt_app_aside" class="app-aside flex-column" data-kt-drawer="true"
                    data-kt-drawer-name="app-aside" data-kt-drawer-activate="{default: true, lg: false}"
                    data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="end"
                    data-kt-drawer-toggle="#kt_app_aside_mobile_toggle">
                    <!--begin::Wrapper-->
                    <div id="kt_app_aside_wrapper"
                        class="d-flex flex-column align-items-center hover-scroll-y py-5 py-lg-0 gap-4"
                        data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                        data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header"
                        data-kt-scroll-wrappers="#kt_app_aside_wrapper" data-kt-scroll-offset="5px">
                        <a href="#"
                            class="btn btn-icon btn-color-primary bg-hover-body h-45px w-45px flex-shrink-0 mb-4"
                            data-bs-toggle="tooltip" title="Calendar" data-bs-custom-class="tooltip-inverse">
                            <i class="ki-duotone ki-calendar-add fs-2qx">
                                <span class="path../span>
                                <span class="path../span>
                                <span class="path../span>
                                <span class="path../span>
                                <span class="path../span>
                                <span class="path../span>
                         ../i>
                     ../a>
                        <a href../../acc../overview.html"
                            class="btn btn-icon btn-color-warning bg-hover-body h-45px w-45px flex-shrink-0 mb-4"
                            data-bs-toggle="tooltip" title="Profile" data-bs-custom-class="tooltip-inverse">
                            <i class="ki-duotone ki-message-add fs-2qx">
                                <span class="path../span>
                                <span class="path../span>
                                <span class="path../span>
                         ../i>
                     ../a>
                        <a href../../../ecomm../cat../products.html"
                            class="btn btn-icon btn-color-info bg-hover-body h-45px w-45px flex-shrink-0 mb-4"
                            data-bs-toggle="tooltip" title="Products" data-bs-custom-class="tooltip-inverse">
                            <i class="ki-duotone ki-devices-2 fs-2qx">
                                <span class="path../span>
                                <span class="path../span>
                                <span class="path../span>
                         ../i>
                     ../a>
                 ../div>
                    <!--end::Wrapper-->
             ../div>
                <!--end::aside-->
         ../div>
            <!--end::Wrapper-->
     ../div>
        <!--end::Page-->
 ../div>


    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src../plu../jq../jquery.min.j../script>
    <!-- Bootstrap 4 -->
    <script src../plu../boots../js/bootstrap.bundle.min.j../script>
    <!-- jsGrid -->
    <script src../plu../js../d../db.j../script>
    <script src../plu../js../jsgrid.min.j../script>
    <!-- AdminLTE App -->
    <script src../../js/adminlte.min.j../script>
    <!-- AdminLTE for demo purposes -->
    <script src../../js/demo.j../script>

    <script>
    $('#jsGrid1').jsGrid({

        width: "100%",
        height: "600px",

        filtering: true,
        inserting: true,
        editing: true,
        sorting: true,
        paging: true,
        autoload: true,
        pageSize: 10,
        pageButtonCount: 5,
        deleteConfirm: "Do you really want to delete data?",

        controller: {
            loadData: function(filter) {
                return $.ajax({
                    type: "GET",
                    url:../co../fetch_data.php",
                    data: filter
                });
            },
            insertItem: function(item) {
                return $.ajax({
                    type: "POST",
                    url:../co../fetch_data.php",
                    data: item
                });
            },
            updateItem: function(item) {
                return $.ajax({
                    type: "PUT",
                    url:../co../fetch_data.php",
                    data: item
                });
            },
            deleteItem: function(item) {
                return $.ajax({
                    type: "DELETE",
                    url:../co../fetch_data.php",
                    data: item
                });
            },
        },


        fields: [

            {
                name: "ev_sahibi_adi",
                title: "Ev Sahibi Adi",
                type: "text",
                width: 150,
                validate: "required"
            },
            {
                name: "daire_no",
                type: "hidden"
            },
            {
                name: "aidat_id",
                type: "hidden",
                css: 'hide'
            },
            {
                name: "daire_id",
                type: "hidden",
                css: 'hide',

            },


            {
                name: "tarih",
                title: "Tarih",
                type: "text",
                width: 150,
                validate: "required"
            },
            {
                name: "tutar",
                title: "Aidat Tutarı",
                type: "text",
                width: 150,
                validate: "required"
            },
            {
                name: "odendi_mi",
                title: "Aidat Ödenme Durumu",
                type: "select",
                items: [{
                        Name: "",
                        Id: ''
                    },
                    {
                        Name: "Odendi",
                        Id: 'Odendi'
                    },
                    {
                        Name: "Odenmedi",
                        Id: 'Odenmedi'
                    }
                ],
                valueField: "Id",
                textField: "Name",
                validate: "required"
            },

            {
                type: "control"
            }
        ]

    });
 ../script>



    <script src="../as../plu../gl../plugins.bundle.j../script>
    <script src="../as../js/scripts.bundle.j../script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="site_yoneti../as../plu../cu../fullcale../fullcalendar.bundle.j../script>
    <script src="ht..//cdn.amcharts../l../index.j../script>
    <script src="ht..//cdn.amcharts../l../xy.j../script>
    <script src="ht..//cdn.amcharts../l../percent.j../script>
    <script src="ht..//cdn.amcharts../l../radar.j../script>
    <script src="ht..//cdn.amcharts../l../th../Animated.j../script>
    <script src="ht..//cdn.amcharts../l../map.j../script>
    <script src="ht..//cdn.amcharts../l../geo../worldLow.j../script>
    <script src="ht..//cdn.amcharts../l../geo../continentsLow.j../script>
    <script src="ht..//cdn.amcharts../l../geo../usaLow.j../script>
    <script src="ht..//cdn.amcharts../l../geo../worldTimeZonesLow.j../script>
    <script src="ht..//cdn.amcharts../l../geo../worldTimeZoneAreasLow.j../script>
    <script src="../as../splu../cu../datata../datatables.bundle.j../script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="../as../js/widgets.bundle.j../script>
    <script src="../as../js/cu../widgets.j../script>
    <script src="../as../js/cu../../../chat.j../script>
    <script src="../as../js/cu../utili../mo../upgrade-plan.j../script>
    <script src="../as../js/cu../utili../mo../create-account.j../script>
    <script src="../as../js/cu../utili../mo../create-app.j../script>
    <script src="../as../js/cu../utili../mo../users-search.j../script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>