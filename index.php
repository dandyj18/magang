<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 9 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
<!--begin::Head-->

<head>
    <base href="">
    <meta charset="utf-8" />
    <title>PMJSmart</title>
    <meta name="description" content="Updates and statistics" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.4" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/global/plugins.bundle.css?v=7.0.4" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.4" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css?v=7.0.4" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="assets/logo/pmjsmart-favicon.png" />
    <link href="assets/css/pages/wizard/wizard-3.css?v=7.1.0" rel="stylesheet" type="text/css" />
    <link href="assets/css/image-uploader.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />

    <link href="assets/css/plugins/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet" type="text/css" />


    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.1.2" rel="stylesheet" type="text/css" />

    <!-- custom style CSS -->
    <link href="assets/css/style-pegawai.css" rel="stylesheet">

    <!-- FilePond -->
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

    <!-- BudleJs -->
    <script src="assets/plugins/global/plugins.bundle.js?v=7.1.0"></script>
    <script src="assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.1.0">
    </script>
    <script src="assets/js/scripts.bundle.js?v=7.1.0"></script>

    <!-- Datatables -->
    <link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>


    <!-- ChartJS-->
    <script src="assets/js/plugins/chartJs/Chart.min.js"></script>

    <!-- Flot -->
    <script src="assets/js/plugins/flot/jquery.flot.js"></script>
    <script src=" assets/js/plugins/flot/jquery.flot.time.js"></script>
    <script src="assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src=" assets/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="assets/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src=" assets/js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <!-- Image uploader -->
    <script src="assets/js/image-uploader.min.js"></script>

    <script src="assets/js/jquery.imageloader.js"></script>


    <script src="assets/js/plugins/clockpicker/bootstrap-clockpicker.min.js"></script>

    <!-- SUMMERNOTE -->
    <script src="assets/js/pages/crud/forms/editors/summernote.js?v=7.1.5"></script>


    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPQua--pCZ9MySlLnTxumT9rYXZdYkCH8&libraries=places">
    </script>
    <script src="assets/js/plugins/geocoding/jquery.geocomplete.min.js"></script>
    <!-- include FilePond library -->
    <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>

    <!-- include FilePond plugins -->
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js">
    </script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js">
    </script>

    <!-- include FilePond jQuery adapter -->
    <script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>

    <style>       
        .card-title{
            margin: 10px;
            color: grey;
            font-size: 150%;
        }

        .card-text{
            font-size: 10px;
            margin-top: 6px;
            
        }

        .breadcrumb-item>a.text-muted {
            color: black !important;
        }

        .card-header>.btn {
            text-shadow: none;
        }

        .fc-unthemed th.fc-day-header>a,
        .fc-unthemed th.fc-day-header>span,
        .fc-button,
        .fc-day-number {
            font-weight: 500;
            font-size: 15px !important;
            color: black !important;
        }

        .fc-button-active {
            color: white !important;
        }

        .list-group-item:first-child {
            border-radius: 0px;
        }

        div.tooltip-inner {
            max-width: none;
            white-space: nowrap;
        }

        .alert {
            border-radius: 0px !important;
        }

        .nav .nav-link.active {
            background-color: white !important;
        }

        .tab-content>.active {
            background-color: white !important;
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        <blade media|%20screen%20and%20(max-width%3A%20992px)%20%7B%0D>.topbar-item.mr-4.text-center.mt-7 {
            margin-top: 9px !important;
        }
      
      .gambar_kota{
        position: relative;
        margin-bottom: -200px;
        top: -220px;
      }
      .bgcolor {
        background-color: #DAECFA;
        height: 200px;
      }

      .posisi_gambar {
        position: relative;
        top: -110px;
        left:-200px; 
      }

      .posisi_gambar2 {
        position: relative;
        top: -75px; 
      }

    
    </style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed aside-enabled aside-static page-loading" style="overflow-x: hidden">
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile header-mobile-fixed">
        <!--begin::Logo-->
        <a href="#">
            <img alt="Logo" src="assets/logo/logo-green.png" class="logo-default max-h-40px" />
        </a>
        <!--end::Logo-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <button class="btn p-0 burger-icon rounded-0 burger-icon-left" id="kt_aside_tablet_and_mobile_toggle">
                <span></span>
            </button>
            <button class="btn btn-hover-text-primary p-0 ml-3" id="kt_header_mobile_topbar_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </button>
            <div class="btn btn-icon btn-sm btn-clean btn-text-dark-75" id="kt_quick_actions_toggle_2">
                <span class="svg-icon  svg-icon-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                            <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </div>
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header header-fixed">
                    <!--begin::Container-->
                    <div class="container d-flex align-items-stretch justify-content-between" style="background-size: 100%; background-position: 30px 0px;">
                        <!--begin::Left-->
                        <div class="d-none d-lg-flex align-items-center mr-3">
                            <!--begin::Aside Toggle-->
                            <button class="btn btn-icon aside-toggle ml-n3 mr-10" id="kt_aside_desktop_toggle">
                                <span class="svg-icon svg-icon-xxl">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <rect fill="#000000" opacity="0.3" x="4" y="5" width="16" height="2" rx="1" />
                                            <rect fill="#000000" opacity="0.3" x="4" y="13" width="16" height="2" rx="1" />
                                            <path d="M5,9 L13,9 C13.5522847,9 14,9.44771525 14,10 C14,10.5522847 13.5522847,11 13,11 L5,11 C4.44771525,11 4,10.5522847 4,10 C4,9.44771525 4.44771525,9 5,9 Z M5,17 L13,17 C13.5522847,17 14,17.4477153 14,18 C14,18.5522847 13.5522847,19 13,19 L5,19 C4.44771525,19 4,18.5522847 4,18 C4,17.4477153 4.44771525,17 5,17 Z" fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </button>
                            <!--end::Aside Toggle-->
                            <!--begin::Logo-->
                            <!--end::Logo-->
                        </div>
                        <!--end::Left-->
                        <!--begin::Topbar-->
                        <div class="topbar">

                            <div class="topbar-item mr-4 text-center mt-7" style="display: block;">
                                <p>
                                    Test
                                </p>
                                <p class="text-muted" style="margin-top: -14px;">
                                    <small>
                                        test
                                    </small>
                                </p>
                            </div>


                            <!--begin::User-->
                            <div class="topbar-item mr-4">
                                <div class="btn btn-icon btn-sm btn-clean btn-text-dark-75" id="kt_quick_user_toggle">
                                    <div class="symbol-group symbol-hover">
                                        <div class="symbol symbol-30 symbol-circle">
                                            <img alt="Pic" src="assets/default.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Topbar-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                <div class="row bgcolor">
                  <div class="container">
                    <div class="col-lg-6" style="padding-top:10px">
                          <center>
                            <font size="6" face="Quando" style="padding-top: 12px">DIGITALIZATION</font>
                            <p><font size="6" face="Quando">PROPERTY by</font><img src="assets/logo/PMJLand.jpg" width="240" height="80" style="object-fit: cover;"></p>
                            <a href="..." class="btn btn-success text-dark" ><b>Portal Pegawai</b></a>
                        </center>
                    </div>
                  </div>
                </div>
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content" style="background-image: url(assets/media/bg/bg-3.jpg); background-size: 150%; background-attachment: fixed;">
                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                       
                            <!-- Ngoding nya disini -->
                      <div class="container">  
                        <div class="row">
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-lg-6 d-flex quando py-3" style="margin-left: 20%;"> 
                                <h1 style="font-size: 7rem;" class="fw-bold" ><font face="Quando">PMJ</h1>
                                  <div class="align-self-center">
                                      <h1>SMART</h1>
                                      <h1>ECOSYSTEM</h1></font>
                                  </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 gambar_kota">
                            <img src="assets/img/AllIsometricNov1-16.png" width="100%">
                          </div>
                        </div>
   
                        <div class="row mt-3" style="margin-left: 10%; margin-bottom: 2%; margim-right:1%">
                          <div class="col-sm-2 d-flex" style="margin-right:3%;">
                            <a href="...">
                              <div class="p-4 rounded-circle">
                                <div>
                                  <img src="assets/logo/CLOUD-1.png" class="card-img-top img-responsive mx-auto d-block" style="height: auto; width: 100%;">
                                </div>
                                <div>
                                  <p>Asset</p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="col-sm-2 d-flex" style="margin-right:3%;">
                            <a href = "...">
                              <div class="card border-success" style="height: 98%; width:115%;">
                                <div class="card-body">
                                  <div>
                                    <img src="assets/logo/CLOUD-1.png" class="card-img-top img-responsive mx-auto d-block" style="height: auto; width: 100%;">
                                  </div>
                                  <div>
                                    <p class="card-title text-center">Cloud</p>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="col-sm-2 d-flex" style="margin-right:3%;">
                            <a href = "...">
                              <div class="card border-success" style="height: 98%; width:115%;">
                                <div class="card-body m-auto">
                                  <div>
                                    <img src="assets/logo/EOFFICE.png" class="card-img-top img-responsive mx-auto d-block" style="height: auto; width: 100%;">
                                  </div>
                                  <div> 
                                    <p class="card-title text-center">KPI<p>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="col-sm-2 d-flex" style="margin-right:3%;">
                            <a href = "...">
                              <div class="card border-success" style="height: 98%; width:115%;">
                                <div class="card-body m-auto">
                                  <img src="assets/logo/EOFFICE.png" class="card-img-top img-responsive mx-auto d-block" style="object-fit: cover;">
                                  <p class="card-title text-center">Microsoft Dinamics</p>
                                </div>
                              </div>
                            </a>
                          </div>                          
                          <div class="col-sm-2 d-flex" style="margin-right:3%;">
                            <a href = "...">
                              <div class="card border-success" style="height: 98%; width:115%;">
                                <div class="card-body m-auto">
                                  <img src="assets/logo/EMAIL.png" class="card-img-top img-responsive mx-auto d-block" style="object-fit: cover;">
                                  <p class="card-title text-center">EMAIL</p>
                                </div>
                              </div>
                            </a>
                          </div>
                        </div>

                        <div class="row mt-3" style="margin-left: 10%; margin-bottom: 2%; margim-right:1%">
                        <div class="col-sm-2 d-flex" style="margin-right:3%;">
                            <a href = "...">
                              <div class="card border-success" style="height: 98%; width:115%;">
                                <div class="card-body">
                                  <img src="assets/logo/ARSIP.png" class="card-img-top img-responsive mx-auto d-block" style="height: 50%; width: 100%; object-fit:cover;">
                                  <p class="card-title text-center">Arsip<p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="col-sm-2 d-flex" style="margin-right:3%;">
                            <a href = "...">
                              <div class="card border-success" style="height: 98%; width:115%;">
                                <div class="card-body">
                                  <img src="assets/logo/OMS.png" class="card-img-top img-responsive mx-auto d-block" style="height:36%; width: 100%; object-fit:cover;">
                                  <p class="card-title text-center">GA-System<p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="col-sm-2 d-flex" style="margin-right:3%;">
                            <a href = "...">
                              <div class="card border-success" style="height: 98%; width:115%;">
                                <div class="card-body">
                                  <img src="assets/logo/OMS.png" class="card-img-top img-responsive mx-auto d-block" style="height:36%; width: 100%; object-fit:cover;">
                                  <p class="card-title text-center">B I</p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="col-sm-2 d-flex" style="margin-right:3%;">
                            <a href = "...">
                              <div class="card border-success" style="height: 98%; width:115%;">
                                <div class="card-body">
                                  <img src="assets/logo/EOFFICE.png" class="card-img-top img-responsive mx-auto d-block" style="height: 28px;%; width: 100%; object-fit:cover;">
                                  <p class="card-title text-center">E-Office</p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="col-sm-2 d-flex" style="margin-right:3%;">
                            <a href = "...">
                              <div class="card border-success" style="height: 98%; width:115%;">
                                <div class="card-body">
                                  <img src="assets/logo/HRIS.png" class="card-img-top img-responsive mx-auto d-block" style="height:35%; width: 100%; object-fit:cover;">
                                  <p class="card-title text-center">HRIS</p>
                                </div>
                              </div>
                            </a>
                          </div>
                        </div>
                       
                        <div class="row mt-4" style="margin-left: 28%; margin-bottom: 5%; magin-right:1%;">
                          <div class="col-sm-2 d-flex" style="margin-right:8%;">
                            <a href = "...">
                              <div class="card border-success" style="height: 110%; width:113%;">
                                <div class="card-body">
                                  <img src="assets/logo/HRIS.png" class="card-img-top img-responsive mx-auto d-block" style="object-fit: cover;">
                                  <p class="card-title text-center">E-Komando</p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="col-sm-2 d-flex" style="margin-right: 8%;">
                            <a href = "...">
                              <div class="card border-success" style="height: 110%; width:143%;">
                                <div class="card-body">
                                  <img src="assets/logo/CRM.png" class="card-img-top img-responsive mx-auto d-block" style="width: 100%; object-fit: cover;">
                                  <p class="card-title text-center">CRM-JIEP</p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="col-sm-2 d-flex" style="margin-right: 8%;">
                            <a href = "...">
                              <div class="card border-success" style="height: 110%; width:143%;">
                                <div class="card-body">
                                  <img src="assets/logo/CRM.png" class="card-img-top img-responsive mx-auto d-block" style="width: 100%; object-fit: cover;">
                                  <p class="card-title text-center">CRM-POP</p>
                                </div>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                        <div class="row mt-3 mb-3" style="background-color: #DAECFA; height: 100px;">
                          <div class="col-sm-5"></div>
                          <div class="col-sm-7 py-4 justify-content-between flex-column">
                            <p><h1><font face="Quando" style="margin: 20%">PT. Pulo Mas Jaya</font></h1></p>
                          </div>
                        </div>
                      <div class="container">
                        <div class="row">
                          <div class="col-sm-6 posisi_gambar">
                            <img src="assets/img/A7301517-1536x1024.jpg" width="130%" style="margin: 5%;">
                          </div>
                          <div class="col-sm-6">
                            <div class="container"> 
                              <div class="row">
                                <div class="col-sm-5" style="margin-left: 10%;">
                                  <a href = "https://www.facebook.com/"><div class="card">
                                    <div class="card-body">
                                      <img src="assets/logo-sosmed/FB 1.png" class="card-img-top img-responsive mx-auto d-block" style=" width:60%;">
                                      <p class="card-text text-center text-dark"><b>https://www.facebook.com/</b></p>
                                    </div>
                                  </div></a>
                                </div>
                                  <div class="col-sm-5" >
                                    <a href = "https://pulomasjaya.co.id/"><div class="card">
                                      <div class="card-body">
                                        <img src="assets/logo-sosmed/web 1.png" class="card-img-top img-responsive mx-auto d-block" style=" width:60%;">
                                        <p class="card-text text-center text-dark"><b>https://pulomasjaya.co.id/</b></p>
                                      </div>
                                    </div></a>
                                  </div>
                              </div>  
                              <div class="row mt-3">
                                <div class="col-sm-5" style="margin-left: 10%;">
                                  <a href = "https://www.instagram.com/"><div class="card">
                                    <div class="card-body">
                                      <img src="assets/logo-sosmed/ig 1.png" class="card-img-top img-responsive mx-auto d-block" style=" width:60%;">
                                      <p class="card-text text-center text-dark"><b>https://www.instagram.com/</b></p>
                                    </div>
                                  </div></a>
                                </div>
                                <div class="col-sm-5">
                                  <a href = "https://www.youtube.com/"><div class="card">
                                    <div class="card-body">
                                      <img src="assets/logo-sosmed/yt 1.png" class="card-img-top img-responsive mx-auto d-block" style=" width:60%;">
                                      <p class="card-text text-center text-dark"><b>https://www.youtube.com/</b></p>
                                    </div>
                                  </div></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                        <div class="row mt-3 mb-3" style="background-color: #DAECFA; height: 100px;">
                          <div class="col-sm-5 d-flex py-4 justify-content-between flex-column">
                            <p style="float: right;"><h1><font face="Quando" style="margin: 32% ;">Pulomas Office Park</font></h1></p></div>
                          <div class="col-sm-7"></div>
                        </div>

                        <div class="container">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="container">

                                <div class="row">
                                  <div class="col-sm-5">
                                    <a href = "https://www.facebook.com/"><div class="card">
                                      <div class="card-body">
                                        <img src="assets/logo-sosmed/FB 1.png" class="card-img-top img-responsive mx-auto d-block" style=" width:60%;">
                                        <p class="card-text text-center text-dark" target="_blank"><b>https://www.facebook.com/</b></p>
                                      </div>
                                    </div></a>
                                  </div>
                                  <div class="col-sm-5" style="margin-right: 10%;">
                                    <a href = "https://pulomasofficepark.com/"><div class="card">
                                      <div class="card-body">
                                        <img src="assets/logo-sosmed/web 1.png" class="card-img-top img-responsive mx-auto d-block" style=" width:60%;">
                                        <p class="card-text text-center text-dark"><b>https://pulomasofficepark.com/</b></p>
                                      </div>
                                    </div></a>
                                  </div>
                                </div>
                                <div class="row mt-3">
                                  <div class="col-sm-5">
                                    <a href = "https://www.instagram.com/"><div class="card">
                                      <div class="card-body">
                                        <img src="assets/logo-sosmed/ig 1.png" class="card-img-top img-responsive mx-auto d-block" style=" width:60%;">
                                        <p class="card-text text-center text-dark"><b>https://www.instagram.com/</b></p>
                                      </div>
                                    </div></a>
                                  </div>
                                  <div class="col-sm-5" style="margin-right: 10%;">
                                    <a href = "https://www.youtube.com/"><div class="card">
                                      <div class="card-body">
                                        <img src="assets/logo-sosmed/yt 1.png" class="card-img-top img-responsive mx-auto d-block" style=" width:60%;">
                                        <p class="card-text text-center text-dark"><b>https://www.youtube.com/</b></p>
                                      </div>
                                    </div></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6 posisi_gambar2" style="margin-bottom: 5%">
                              <img src="assets/img/History-Option-B.jpg" width="130%">
                            </div>
                          </div>
                        </div>  

                        <div class="row mt-3 mb-3" style="background-color: #DAECFA; height: 100px;">
                          <div class="col-sm-5"></div>
                          <div class="col-sm-7 py-4 justify-content-between flex-column">
                            <p><h1><font face="Quando" style="margin: 20%;">Jakarta Internasional Equestrian Park </font></h1></p></div>
                        </div>
                        <div class="container">
                          <div class="row">
                            <div class="col-sm-6 posisi_gambar">
                              <img src="assets/img/jiep-sample1.jpg" width="130%" style="margin:5%;">
                            </div>
                            <div class="col-sm-6">
                              <div class="container">

                                <div class="row">
                                  <div class="col-sm-5" style="margin-left: 10%;">
                                    <a href = "https://www.facebook.com/"><div class="card">
                                      <div class="card-body">
                                        <img src="assets/logo-sosmed/FB 1.png" class="card-img-top img-responsive mx-auto d-block" style=" width:60%;">
                                        <p class="card-text text-center text-dark"><b>https://www.facebook.com/</b></p>
                                      </div>
                                    </div></a>
                                  </div>
                                  <div class="col-sm-5">
                                  <a href = "https://pulomasofficepark.com/"><div class="card">
                                      <div class="card-body">
                                        <img src="assets/logo-sosmed/web 1.png" class="card-img-top img-responsive mx-auto d-block" style=" width:60%;">
                                        <p class="card-text text-center text-dark"><b>https://jakartaequestrian.com/</b></p>
                                      </div>
                                    </div></a>
                                  </div>
                                </div>
                                <div class="row mt-3">
                                  <div class="col-sm-5" style="margin-left: 10%;">
                                  <a href = "https://www.instagram.com/"><div class="card">
                                      <div class="card-body">
                                        <img src="assets/logo-sosmed/ig 1.png" class="card-img-top img-responsive mx-auto d-block" style=" width:60%;">
                                        <p class="card-text text-center text-dark"><b>https://www.instagram.com/</b></p>
                                      </div>
                                    </div></a>
                                  </div>
                                  <div class="col-sm-5">
                                  <a href = "https://www.youtube.com/"><div class="card">
                                      <div class="card-body">
                                        <img src="assets/logo-sosmed/yt 1.png" class="card-img-top img-responsive mx-auto d-block" style=" width:60%;">
                                        <p class="card-text text-center text-dark"><b>https://www.youtube.com/</b></p>
                                      </div>
                                    </div></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end::Container-->
                    <!--end::Entry-->
                </div>
                <!--end::Content-->


                <!--begin::Footer-->
                
                <div class="footer" id="kt_footer">
                    <!--begin::Container-->
                    <!--div class="container d-flex flex-column flex-md-row align-items-center justify-content-between"-->
                        <!--begin::Copyright-->
                       
                          <div class="row">
                            <div class="col" align="center" style="background-color: #DAECFA;"><b>2021@</b></div>
                            <div class="col" align="center" style="background-color: #DAECFA;">
                              <b><a href="#" target="_blank" class="text-dark-75">PT.Pulo Mas Jaya</a></b>
                            </div>
                            <div class="col" align="center" style="background-color: #DAECFA;">
                            <b><a href="#" target="_blank" class="text-dark-75  ">PMJSmart</a></b>
                            </div>
                          </div>
                        
                   <!-- <div class="text-dark order-2 order-md-1"> 
                            <span class="text-muted font-weight-bold mr-2">2021©</span>
                            <a href="#" target="_blank" class="text-dark-75 text-hover-primary">PMJSmart</a>
                        </div>-->
                        <!--end::Copyright-->
                    <!--/div-->
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->
    <!--begin::Global Config(global config for global JS scripts)-->

    <script src="assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.1.0"></script>

    <script src="assets/js/scripts.bundle.js?v=7.1.0"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>

    <script src="assets/tableHeadFixer.js"></script>

    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />

    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <script src="assets/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <script src="assets/js/pages/custom/todo/todo.js?v=7.1.5"></script>

    <!-- Image uploader -->
    <script src="assets/js/image-uploader.min.js"></script>
    <script>
        $('.menu-item-active').attr('id', 'menu-scroll');
        $('#kt_aside_desktop_toggle').click(function() {
            var scrollyDiv = document.getElementById('menu-scroll');
            scrollyDiv.scrollIntoView({
                behavior: 'auto',
                block: 'center',
                inline: 'center'
            });
        });
    </script>
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1200
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#6993FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#F3F6F9",
                        "dark": "#212121"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1E9FF",
                        "secondary": "#ECF0F3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#212121",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#ECF0F3",
                    "gray-300": "#E5EAEE",
                    "gray-400": "#D6D6E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#80808F",
                    "gray-700": "#464E5F",
                    "gray-800": "#1B283F",
                    "gray-900": "#212121"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--end::Global Config-->

    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
</body>
<!--end::Body-->

</html>