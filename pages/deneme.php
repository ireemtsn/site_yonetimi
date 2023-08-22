<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href../... />
    <title>Saul Theme by Keenthe../title>
        <meta charset="utf../>
    <meta name=" description" content="Saul HTML Free - Bootstrap 5 HTML Multipurpose Admin Dashboard The../>
    <meta name=" keywords" content="Saul, bootstrap, bootstrap 5, dmin themes, free admin themes, bootstrap admin, bootstrap dashboa../>
    <meta name=" viewport" content="width=device-width, initial-scale../>
    <meta property=" og:locale" content="en_../>
    <meta property=" og:type" content="artic../>
    <meta property=" og:title" content="Saul HTML Free - Bootstrap 5 HTML Multipurpose Admin Dashboard The../>
    <meta property=" og:url" content="ht..//keenthemes../prod../saul-html-p../>
    <meta property=" og:site_name" content="Keenthemes | Saul HTML Fr../>
    <link rel=" canonical" href="ht..//preview.keenthemes../saul-html-fr../>
    <link rel=" shortcut icon" href=site_yone../m../l../favicon.i.. />
        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="ht..//fonts.googleapis../css?family=Inter:300,400,500,600,7../>
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href=" site_yoneti../as..///plu../gl../plugins.bundle.css" rel="stylesheet" type="../c../>
    <link href=" site_yoneti../as..//../style.bundle.css" rel="stylesheet" type="../c../>
    <!--end::Global Stylesheets Bundle-->
</head>

<body id=" kt_body" class="app-blank">
        <div class="d-flex flex-center flex-column flex-column-fluid">
            <div class="w-lg-500px p-10 p-lg-15 mx-auto">
                <form class="form w-100" id="login_form">
                    <div class=" text-center mb-10">
                        <h1 style="color: rgb(121, 125, 125) !important;" class="text-dark mb-3">Sign In to The Site
                            Administration
                            ../h1>
                            <div class="text-gray-400 fw-semibold fs-4">New Here?
                                <a href../../authentica../sig../basic.html" class="link-primary fw-bold">Create an
                                    Acco../a>
                                    ../div>
                                    ../div>
                                    <div class="fv-row mb-10">
                                        <label class="form-label fs-6 fw-bold text-dark">Em../label>
                                            <input class="form-control form-control-lg form-control-solid" type="text"
                                                name="user_email" id="user_email" .. />
                                            ../div>
                                            <div class="fv-row mb-10">
                                                <div class="d-flex flex-stack mb-2">
                                                    <!--begin::Label-->
                                                    <label class="form-label fw-bold text-dark fs-6 mb-0">Passw../label>
                                                        <a href../../authentica../sig../password-reset.html"
                                                            class="link-primary fs-6 fw-bold">Forgot Passwor../a>
                                                            ../div>
                                                            <input
                                                                class="form-control form-control-lg form-control-solid"
                                                                type="password" name="user_password" id="user_password"
                                                                autocomplete="o../>
             ../div>
         /form>
            <div class=" text-center">
                                                            <!--begin::Submit button-->
                                                            <div id="login_button"
                                                                class="btn btn-lg btn-primary w-100 mb-5">
                                                                <span class="indicator-label">Sign../span>
                                                                    <span class="indicator-progress">Please wait...
                                                                        <span class="spinner-border spinner-border-sm align-middle ms-../sp../span>
             ../div>
         ../div>
            <!--end::Actions-->
     ../div>
 ../div>
    <script src=" ht..//cdn.jsdelivr../npm/popper.js@1.../../umd/popper.min.js"
                                                                            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPx../ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                                                                            crossorigin="anonymous">
                                                                            ../script>
                                                                            <script
                                                                                src="ht..//cdn.jsdelivr../npm/bootstrap@4../../js/bootstrap.min.js"
                                                                                integrity="sha384-JZR6Spejh4U02d8jOt6vL../JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                                                                                crossorigin="anonymous">
                                                                            .. / script >
                                                                                <
                                                                                script src =
                                                                                "site_yoneti../as../plu../gl../plugins.bundle.j../script> <
                                                                            script src =
                                                                                "site_yoneti../as../js/scripts.bundle.j../script> <!
                                                                                --begin::Custom Javascript(used
                                                                                    for this page only) -- >
                                                                                <
                                                                                script src =
                                                                                "site_yoneti../as../js/cu../authentica../sig../general.j../script> <!
                                                                                --Include JQuery Library-- >
                                                                                <
                                                                                script src =
                                                                                "ht..//code.jquery../jquery-3.5.0.j../script> <
                                                                            script > .. // When DOM is loaded this 
                                                                                .. // function will get executed

                                                                                .function will get executed
                                                                            on click of submit button
                                                                            $("#login_button").click(function(ev) {
                                                                                var form = $("#login_form");

                                                                                $.ajax({
                                                                                    type: "POST",
                                                                                    url: 'site_yone../l../login_control.php',
                                                                                    data: form
                                                                                        .serialize(),
                                                                                    success: function(
                                                                                        response) {

                                                                                        if (response ===
                                                                                            "1") {
                                                                                            window
                                                                                                .location =
                                                                                                "site_yone../p../index.php";
                                                                                        } else {

                                                                                            alert(
                                                                                                "Invalid username and password!"
                                                                                            );
                                                                                        }
                                                                                    },
                                                                                    error: function(
                                                                                        data) {

                                                                                        .
                                                                                        . // Some error in ajax call
                                                                                        alert(
                                                                                            "some Error"
                                                                                        );
                                                                                    }
                                                                                });
                                                                            });.. / script >


                                                                                <
                                                                                /body>

                                                                                <
                                                                                /html>