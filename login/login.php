<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../" />
    <title>Saul Theme by Keenthemes</title>
    <meta charset="utf-8" />
    <meta name="description" content="Saul HTML Free - Bootstrap 5 HTML Multipurpose Admin Dashboard Theme" />
    <meta name="keywords"
        content="Saul, bootstrap, bootstrap 5, dmin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Saul HTML Free - Bootstrap 5 HTML Multipurpose Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/products/saul-html-pro" />
    <meta property="og:site_name" content="Keenthemes | Saul HTML Free" />
    <link rel="canonical" href="https://preview.keenthemes.com/saul-html-free" />
    <link rel="shortcut icon" href="../assets/media/logos/favicon.ico" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="site_yonetimi/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="site_yonetimi/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>

<body id="kt_body" class="app-blank">
    <div class="d-flex flex-center flex-column flex-column-fluid">
        <div class="w-lg-500px p-10 p-lg-15 mx-auto">
            <form class="form w-100" id="login_form">
                <div class=" text-center mb-10">
                    <h1 style="color: rgb(121, 125, 125) !important;" class="text-dark mb-3">Sign In to The Site
                        Administration
                    </h1>
                    <div class="text-gray-400 fw-semibold fs-4">New Here?
                        <a href="../dist/authentication/sign-up/basic.html" class="link-primary fw-bold">Create an
                            Account</a>
                    </div>
                </div>
                <div class="fv-row mb-10">
                    <label class="form-label fs-6 fw-bold text-dark">Email</label>
                    <input class="form-control form-control-lg form-control-solid" type="text" name="user_email"
                        id="user_email" off />
                </div>
                <div class="fv-row mb-10">
                    <div class="d-flex flex-stack mb-2">
                        <!--begin::Label-->
                        <label class="form-label fw-bold text-dark fs-6 mb-0">Password</label>
                        <a href="../dist/authentication/sign-in/password-reset.html"
                            class="link-primary fs-6 fw-bold">Forgot Password ?</a>
                    </div>
                    <input class="form-control form-control-lg form-control-solid" type="password" name="user_password"
                        id="user_password" autocomplete="off" />
                </div>
            </form>
            <div class="text-center">
                <!--begin::Submit button-->
                <div id="login_button" class="btn btn-lg btn-primary w-100 mb-5">
                    <span class="indicator-label">Sign in</span>
                    <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </div>
            </div>
            <!--end::Actions-->
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="site_yonetimi/assets/plugins/global/plugins.bundle.js"></script>
    <script src="site_yonetimi/assets/js/scripts.bundle.js"></script>
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="site_yonetimi/assets/js/custom/authentication/sign-in/general.js"></script>
    <!--Include JQuery Library -->
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script>
    // When DOM is loaded this 
    // function will get executed

    // function will get executed 
    // on click of submit button
    $("#login_button").click(function(ev) {
        var form = $("#login_form");

        $.ajax({
            type: "POST",
            url: 'site_yonetimi/login/login_control.php',
            data: form.serialize(),
            success: function(response) {

                if (response === "1") {
                    window.location = "site_yonetimi/pages/index.php";
                } else {

                    alert("Invalid username and password!");
                }
            },
            error: function(data) {

                // Some error in ajax call
                alert("some Error");
            }
        });
    });
    </script>


</body>

</html>