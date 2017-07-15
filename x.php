
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="csrf-token" content="riZT1nqawknt5PTFXMCpEuO7iA5zyavcC5aEa68m" />

    <title>
        Add Member :: LION Admin
    </title>


    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="http://localhost:8080/businesscardfolder.com___/public/vendor/adminlte/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="http://localhost:8080/businesscardfolder.com___/public/vendor/adminlte/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="http://localhost:8080/businesscardfolder.com___/public/vendor/adminlte/dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="http://localhost:8080/businesscardfolder.com___/public/vendor/adminlte/plugins/pace/pace.min.css">
    <link rel="stylesheet" href="http://localhost:8080/businesscardfolder.com___/public/vendor/backpack/pnotify/pnotify.custom.min.css">

    <!-- BackPack Base CSS -->
    <link rel="stylesheet" href="http://localhost:8080/businesscardfolder.com___/public/vendor/backpack/backpack.base.css">

    <link rel="stylesheet" href="http://localhost:8080/businesscardfolder.com___/public/vendor/backpack/crud/css/crud.css">
    <link rel="stylesheet" href="http://localhost:8080/businesscardfolder.com___/public/vendor/backpack/crud/css/form.css">
    <link rel="stylesheet" href="http://localhost:8080/businesscardfolder.com___/public/vendor/backpack/crud/css/create.css">

    <!-- CRUD FORM CONTENT - crud_fields_styles stack -->
    <!-- include select2 css-->
    <link href="http://localhost:8080/businesscardfolder.com___/public/vendor/adminlte/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link href="http://localhost:8080/businesscardfolder.com___/public/vendor/backpack/cropper/dist/cropper.min.css" rel="stylesheet" type="text/css" />
    <style>
        .hide {
            display: none;
        }
        .image .btn-group {
            margin-top: 10px;
        }
        img {
            max-width: 100%; /* This rule is very important, please do not ignore this! */
        }
        .img-container, .img-preview {
            width: 100%;
            text-align: center;
        }
        .img-preview {
            float: left;
            margin-right: 10px;
            margin-bottom: 10px;
            overflow: hidden;
        }
        .preview-lg {
            width: 263px;
            height: 148px;
        }

        .btn-file {
            position: relative;
            overflow: hidden;
        }
        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
        }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue-light sidebar-mini fixed">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="http://localhost:8080/businesscardfolder.com___/public" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>B</b>F</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Business Card </b>Folder</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu pull-left">
                <ul class="nav navbar-nav">
                    <!-- =================================================== -->
                    <!-- ========== Top menu items (ordered left) ========== -->
                    <!-- =================================================== -->

                    <!-- <li><a href="http://localhost:8080/businesscardfolder.com___/public"><i class="fa fa-home"></i> <span>Home</span></a></li> -->

                    <!-- ========== End of top menu left items ========== -->
                </ul>
            </div>


            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- ========================================================= -->
                    <!-- ========== Top menu right items (ordered left) ========== -->
                    <!-- ========================================================= -->

                    <!-- <li><a href="http://localhost:8080/businesscardfolder.com___/public"><i class="fa fa-home"></i> <span>Home</span></a></li> -->

                    <li><a href="http://localhost:8080/businesscardfolder.com___/public/admin/logout"><i class="fa fa-btn fa-sign-out"></i> Logout</a></li>

                    <!-- ========== End of top menu right items ========== -->
                </ul>
            </div>
        </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="https://placehold.it/160x160/00a65a/ffffff/&text=S" class="img-circle" alt="Image">
                </div>
                <div class="pull-left info">
                    <p>Son Sothea</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->

            <ul class="sidebar-menu">
                <li class="header">ADMINISTRATION</li>
                <!-- ================================================ -->
                <!-- ==== Recommended place for admin menu items ==== -->
                <!-- ================================================ -->

                <li><a href="http://localhost:8080/businesscardfolder.com___/public/admin/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-newspaper-o"></i> <span>News</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="http://localhost:8080/businesscardfolder.com___/public/admin/article"><i class="fa fa-newspaper-o"></i> <span>Articles</span></a></li>
                        <li><a href="http://localhost:8080/businesscardfolder.com___/public/admin/category"><i class="fa fa-list"></i> <span>Categories</span></a></li>
                        <li><a href="http://localhost:8080/businesscardfolder.com___/public/admin/tag"><i class="fa fa-tag"></i> <span>Tags</span></a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa  fa-user"></i> <span>Client</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="http://localhost:8080/businesscardfolder.com___/public/admin/member"><i class="fa fa-file-o"></i> <span>Member</span></a></li>
                    </ul>
                </li>


                <li><a href="http://localhost:8080/businesscardfolder.com___/public/admin/page"><i class="fa fa-file-o"></i> <span>Pages</span></a></li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-suitcase"></i> <span>Business Setting</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="http://localhost:8080/businesscardfolder.com___/public/admin/business_intermediary"><i class="fa fa-file-o"></i> <span>Intermediary</span></a></li>
                        <li><a href="http://localhost:8080/businesscardfolder.com___/public/admin/business_function"><i class="fa fa-file-o"></i> <span>Function</span></a></li>
                        <li><a href="http://localhost:8080/businesscardfolder.com___/public/admin/business_type"><i class="fa fa-file-o"></i> <span>Type</span></a></li>
                        <li><a href="http://localhost:8080/businesscardfolder.com___/public/admin/business_category"><i class="fa fa-file-o"></i> <span>Category</span></a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-university"></i> <span>Product</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="http://localhost:8080/businesscardfolder.com___/public/admin/itembrand"><i class="fa fa-file-o"></i> <span>Item Brand</span></a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-phone-square"></i> <span>Contact Setting</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="http://localhost:8080/businesscardfolder.com___/public/admin/email_company"><i class="fa fa-file-o"></i> <span>Email Company</span></a></li>
                        <li><a href="http://localhost:8080/businesscardfolder.com___/public/admin/mobile"><i class="fa fa-file-o"></i> <span>Mobile</span></a></li>
                        <li><a href="http://localhost:8080/businesscardfolder.com___/public/admin/telephone"><i class="fa fa-file-o"></i> <span>Telephone</span></a></li>
                        <li><a href="http://localhost:8080/businesscardfolder.com___/public/admin/social_media"><i class="fa fa-file-o"></i> <span>Social Media</span></a></li>
                        <li><a href="http://localhost:8080/businesscardfolder.com___/public/admin/mobile_network"><i class="fa fa-file-o"></i> <span>Mobile Network</span></a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-map-marker"></i> <span>Location Setting</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="http://localhost:8080/businesscardfolder.com___/public/admin/village"><i class="fa fa-file-o"></i> <span>Village</span></a></li>
                        <li><a href="http://localhost:8080/businesscardfolder.com___/public/admin/commune"><i class="fa fa-file-o"></i> <span>Commune</span></a></li>
                        <li><a href="http://localhost:8080/businesscardfolder.com___/public/admin/district"><i class="fa fa-file-o"></i> <span>District</span></a></li>
                        <li><a href="http://localhost:8080/businesscardfolder.com___/public/admin/province"><i class="fa fa-file-o"></i> <span>Province</span></a></li>
                        <li><a href="http://localhost:8080/businesscardfolder.com___/public/admin/country"><i class="fa fa-file-o"></i> <span>Country</span></a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa  fa-user-md"></i> <span>Job</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="http://localhost:8080/businesscardfolder.com___/public/admin/position"><i class="fa fa-file-o"></i> <span>Position</span></a></li>
                        <li><a href="http://localhost:8080/businesscardfolder.com___/public/admin/department"><i class="fa fa-file-o"></i> <span>Department</span></a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-cogs"></i> <span>Advanced</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="http://localhost:8080/businesscardfolder.com___/public/admin/elfinder"><i class="fa fa-files-o"></i> <span>File manager</span></a></li>
                        <li><a href="http://localhost:8080/businesscardfolder.com___/public/admin/language"><i class="fa fa-flag-o"></i> <span>Languages</span></a></li>
                        <li><a href="http://localhost:8080/businesscardfolder.com___/public/admin/language/texts"><i class="fa fa-language"></i> <span>Language Files</span></a></li>
                        <li><a href="http://localhost:8080/businesscardfolder.com___/public/admin/setting"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
                    </ul>
                </li>
                <!-- ======================================= -->
                <li class="header">USER</li>
                <li><a href="http://localhost:8080/businesscardfolder.com___/public/admin/logout"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>



    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Add <span>Member</span>
            </h1>
            <ol class="breadcrumb">
                <li><a href="http://localhost:8080/businesscardfolder.com___/public/admin/dashboard">Admin</a></li>
                <li><a href="http://localhost:8080/businesscardfolder.com___/public/admin/member" class="text-capitalize">Members</a></li>
                <li class="active">Add</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!-- Default box -->
                    <a href="http://localhost:8080/businesscardfolder.com___/public/admin/member"><i class="fa fa-angle-double-left"></i> Back to all  <span>Members</span></a><br><br>


                    <form method="POST" action="http://localhost:8080/businesscardfolder.com___/public/admin/member" accept-charset="UTF-8" enctype="multipart/form-data"><input name="_token" type="hidden" value="riZT1nqawknt5PTFXMCpEuO7iA5zyavcC5aEa68m">
                        <div class="box">

                            <div class="box-header with-border">
                                <h3 class="box-title">Add a new  Member</h3>
                            </div>
                            <div class="box-body row">
                                <!-- load the view from the application if it exists, otherwise load the one in the package -->
                                <!-- load the view from the application if it exists, otherwise load the one in the package -->
                                <!-- select2 from array -->
                                <div class="form-group col-md-12"
                                >
                                    <label>Role</label>
                                    <select
                                        name="role_id"
                                        style="width: 100%"
                                        class="form-control select2_from_array"
                                    >


                                        <option value="1"
                                        >User</option>
                                        <option value="2"
                                        >Admin</option>
                                        <option value="3"
                                        >Supper Admin</option>
                                    </select>


                                </div>











                                <!-- load the view from the application if it exists, otherwise load the one in the package -->
                                <!-- text input -->
                                <div class="form-group col-md-12"
                                >
                                    <label>Name</label>

                                    <input
                                        type="text"
                                        name="name"
                                        value=""
                                        class="form-control"
                                    >


                                </div>














                                <!-- load the view from the application if it exists, otherwise load the one in the package -->
                                <!-- text input -->
                                <div class="form-group col-md-12"
                                >
                                    <label>User Name</label>

                                    <input
                                        type="text"
                                        name="username"
                                        value=""
                                        class="form-control"
                                    >


                                </div>














                                <!-- load the view from the application if it exists, otherwise load the one in the package -->
                                <!-- text input -->
                                <div class="form-group col-md-12"
                                >
                                    <label>E-mail</label>
                                    <input
                                        type="email"
                                        name="email"
                                        value=""
                                        class="form-control"
                                    >


                                </div>        <!-- load the view from the application if it exists, otherwise load the one in the package -->
                                <!-- text input -->
                                <div class="form-group col-md-12"
                                >
                                    <label>Phone</label>

                                    <input
                                        type="text"
                                        name="phone"
                                        value=""
                                        class="form-control"
                                    >


                                </div>














                                <!-- load the view from the application if it exists, otherwise load the one in the package -->
                                <!-- password -->
                                <div class="form-group col-md-12"
                                >
                                    <label>Password</label>
                                    <input
                                        type="password"
                                        name="password"
                                        class="form-control"
                                    >


                                </div>        <!-- load the view from the application if it exists, otherwise load the one in the package -->
                                <!-- password -->
                                <div class="form-group col-md-12"
                                >
                                    <label>Password Confirm</label>
                                    <input
                                        type="password"
                                        name="password_confirmation"
                                        class="form-control"
                                    >


                                </div>        <!-- load the view from the application if it exists, otherwise load the one in the package -->
                                <div class="form-group col-md-12 image" data-preview="#photo1099" data-aspectRatio="1" data-crop="1" class="form-group col-md-12"
                                >
                                    <div>
                                        <label>Photo</label>
                                    </div>
                                    <!-- Wrap the image or canvas element with a block element (container) -->
                                    <div class="row">
                                        <div class="col-sm-6" style="margin-bottom: 20px;">
                                            <img id="mainImage" src="http://localhost:8080/businesscardfolder.com___/public/no-image.png">
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="docs-preview clearfix">
                                                <div id="photo1099" class="img-preview preview-lg">
                                                    <img src="" style="display: block; min-width: 0px !important; min-height: 0px !important; max-width: none !important; max-height: none !important; margin-left: -32.875px; margin-top: -18.4922px; transform: none;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <label class="btn btn-primary btn-file">
                                            Choose file <input type="file" accept="image/*" id="uploadImage"  class="hide"
                                            >
                                            <input type="hidden" id="hiddenImage" name="photo">
                                        </label>
                                        <button class="btn btn-default" id="rotateLeft" type="button" style="display: none;"><i class="fa fa-rotate-left"></i></button>
                                        <button class="btn btn-default" id="rotateRight" type="button" style="display: none;"><i class="fa fa-rotate-right"></i></button>
                                        <button class="btn btn-default" id="zoomIn" type="button" style="display: none;"><i class="fa fa-search-plus"></i></button>
                                        <button class="btn btn-default" id="zoomOut" type="button" style="display: none;"><i class="fa fa-search-minus"></i></button>
                                        <button class="btn btn-warning" id="reset" type="button" style="display: none;"><i class="fa fa-times"></i></button>
                                        <button class="btn btn-danger" id="remove" type="button"><i class="fa fa-trash"></i></button>
                                    </div>


                                </div>











                                <!-- load the view from the application if it exists, otherwise load the one in the package -->
                                <!-- enum -->
                                <div class="form-group col-md-12"
                                >
                                    <label>Status</label>
                                    <select
                                        name="status"
                                        class="form-control"
                                    >


                                        <option value="ACTIVE"
                                        >ACTIVE</option>
                                        <option value="INACTIVE"
                                        >INACTIVE</option>
                                    </select>


                                </div>




                            </div><!-- /.box-body -->
                            <div class="box-footer">

                                <div id="saveActions" class="form-group">

                                    <input type="hidden" name="save_action" value="save_and_back">

                                    <div class="btn-group">

                                        <button type="submit" class="btn btn-success">
                                            <span class="fa fa-save" role="presentation" aria-hidden="true"></span> &nbsp;
                                            <span data-value="save_and_back">Save and back</span>
                                        </button>

                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aira-expanded="false">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Save Dropdown</span>
                                        </button>

                                        <ul class="dropdown-menu">
                                            <li><a href="javascript:void(0);" data-value="save_and_edit">Save and edit this item</a></li>
                                            <li><a href="javascript:void(0);" data-value="save_and_new">Save and new item</a></li>
                                        </ul>

                                    </div>

                                    <a href="http://localhost:8080/businesscardfolder.com___/public/admin/member" class="btn btn-default"><span class="fa fa-ban"></span> &nbsp;Cancel</a>
                                </div>
                            </div><!-- /.box-footer-->

                        </div><!-- /.box -->
                    </form>
                </div>
            </div>


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        Handcrafted by <a target="_blank" href="http://camsmile.org">Son Sothea</a>.
    </footer>
</div>
<!-- ./wrapper -->



<!-- jQuery 2.2.0 -->
<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<script>window.jQuery || document.write('<script src="http://localhost:8080/businesscardfolder.com___/public/vendor/adminlte/plugins/jQuery/jQuery-2.2.0.min.js"><\/script>')</script>
<!-- Bootstrap 3.3.5 -->
<script src="http://localhost:8080/businesscardfolder.com___/public/vendor/adminlte/bootstrap/js/bootstrap.min.js"></script>
<script src="http://localhost:8080/businesscardfolder.com___/public/vendor/adminlte/plugins/pace/pace.min.js"></script>
<script src="http://localhost:8080/businesscardfolder.com___/public/vendor/adminlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="http://localhost:8080/businesscardfolder.com___/public/vendor/adminlte/plugins/fastclick/fastclick.js"></script>
<script src="http://localhost:8080/businesscardfolder.com___/public/vendor/adminlte/dist/js/app.min.js"></script>

<!-- page script -->
<script type="text/javascript">
    // To make Pace works on Ajax calls
    $(document).ajaxStart(function() { Pace.restart(); });

    // Ajax calls should always have the CSRF token attached to them, otherwise they won't work
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Set active state on menu element
    var current_url = "http://localhost:8080/businesscardfolder.com___/public/admin/member/create";
    $("ul.sidebar-menu li a").each(function() {
        if ($(this).attr('href').startsWith(current_url) || current_url.startsWith($(this).attr('href')))
        {
            $(this).parents('li').addClass('active');
        }
    });

    var activeTab = $('[href="' + location.hash.replace("#", "#tab_") + '"]');
    activeTab && activeTab.tab('show');
    $('.nav-tabs a').on('shown.bs.tab', function (e) {
        location.hash = e.target.hash.replace("#tab_", "#");
    });
</script>

<script src="http://localhost:8080/businesscardfolder.com___/public/vendor/backpack/pnotify/pnotify.custom.min.js"></script>


<script type="text/javascript">
    jQuery(document).ready(function($) {

        PNotify.prototype.options.styling = "bootstrap3";
        PNotify.prototype.options.styling = "fontawesome";

    });
</script>
<script src="http://localhost:8080/businesscardfolder.com___/public/vendor/backpack/crud/js/crud.js"></script>
<script src="http://localhost:8080/businesscardfolder.com___/public/vendor/backpack/crud/js/form.js"></script>
<script src="http://localhost:8080/businesscardfolder.com___/public/vendor/backpack/crud/js/create.js"></script>

<!-- CRUD FORM CONTENT - crud_fields_scripts stack -->
<!-- include select2 js-->
<script src="http://localhost:8080/businesscardfolder.com___/public/vendor/adminlte/plugins/select2/select2.min.js"></script>
<script>
    jQuery(document).ready(function($) {
        // trigger select2 for each untriggered select2 box
        $('.select2_from_array').each(function (i, obj) {
            if (!$(obj).hasClass("select2-hidden-accessible"))
            {
                $(obj).select2({
                    theme: "bootstrap"
                });
            }
        });
    });
</script>

<script src="http://localhost:8080/businesscardfolder.com___/public/vendor/backpack/cropper/dist/cropper.min.js"></script>
<script>
    jQuery(document).ready(function($) {
        // Loop through all instances of the image field
        $('.form-group.image').each(function(index){
            // Find DOM elements under this form-group element
            var $mainImage = $(this).find('#mainImage');
            var $uploadImage = $(this).find("#uploadImage");
            var $hiddenImage = $(this).find("#hiddenImage");
            var $rotateLeft = $(this).find("#rotateLeft")
            var $rotateRight = $(this).find("#rotateRight")
            var $zoomIn = $(this).find("#zoomIn")
            var $zoomOut = $(this).find("#zoomOut")
            var $reset = $(this).find("#reset")
            var $remove = $(this).find("#remove")
            // Options either global for all image type fields, or use 'data-*' elements for options passed in via the CRUD controller
            var options = {
                viewMode: 2,
                checkOrientation: false,
                autoCropArea: 1,
                responsive: true,
                preview : $(this).attr('data-preview'),
                aspectRatio : $(this).attr('data-aspectRatio')
            };
            var crop = $(this).attr('data-crop');

            // Hide 'Remove' button if there is no image saved
            if (!$mainImage.attr('src')){
                $remove.hide();
            }
            // Initialise hidden form input in case we submit with no change
            $hiddenImage.val($mainImage.attr('src'));


            // Only initialize cropper plugin if crop is set to true
            if(crop){

                $remove.click(function() {
                    $mainImage.cropper("destroy");
                    $mainImage.attr('src','');
                    $hiddenImage.val('');
                    $rotateLeft.hide();
                    $rotateRight.hide();
                    $zoomIn.hide();
                    $zoomOut.hide();
                    $reset.hide();
                    $remove.hide();
                });
            } else {

                $(this).find("#remove").click(function() {
                    $mainImage.attr('src','');
                    $hiddenImage.val('');
                    $remove.hide();
                });
            }

            $uploadImage.change(function() {
                var fileReader = new FileReader(),
                    files = this.files,
                    file;

                if (!files.length) {
                    return;
                }
                file = files[0];

                if (/^image\/\w+$/.test(file.type)) {
                    fileReader.readAsDataURL(file);
                    fileReader.onload = function () {
                        $uploadImage.val("");
                        if(crop){
                            $mainImage.cropper(options).cropper("reset", true).cropper("replace", this.result);
                            // Override form submit to copy canvas to hidden input before submitting
                            $('form').submit(function() {
                                var imageURL = $mainImage.cropper('getCroppedCanvas').toDataURL(file.type);
                                $hiddenImage.val(imageURL);
                                return true; // return false to cancel form action
                            });
                            $rotateLeft.click(function() {
                                $mainImage.cropper("rotate", 90);
                            });
                            $rotateRight.click(function() {
                                $mainImage.cropper("rotate", -90);
                            });
                            $zoomIn.click(function() {
                                $mainImage.cropper("zoom", 0.1);
                            });
                            $zoomOut.click(function() {
                                $mainImage.cropper("zoom", -0.1);
                            });
                            $reset.click(function() {
                                $mainImage.cropper("reset");
                            });
                            $rotateLeft.show();
                            $rotateRight.show();
                            $zoomIn.show();
                            $zoomOut.show();
                            $reset.show();
                            $remove.show();

                        } else {
                            $mainImage.attr('src',this.result);
                            $hiddenImage.val(this.result);
                            $remove.show();
                        }
                    };
                } else {
                    alert("Please choose an image file.");
                }
            });

        });
    });
</script>



<script>
    jQuery('document').ready(function($){

        // Save button has multiple actions: save and exit, save and edit, save and new
        var saveActions = $('#saveActions'),
            crudForm        = saveActions.parents('form'),
            saveActionField = $('[name="save_action"]');

        saveActions.on('click', '.dropdown-menu a', function(){
            var saveAction = $(this).data('value');
            saveActionField.val( saveAction );
            crudForm.submit();
        });

        // Ctrl+S and Cmd+S trigger Save button click
        $(document).keydown(function(e) {
            if ((e.which == '115' || e.which == '83' ) && (e.ctrlKey || e.metaKey))
            {
                e.preventDefault();
                // alert("Ctrl-s pressed");
                $("button[type=submit]").trigger('click');
                return false;
            }
            return true;
        });

        // Place the focus on the first element in the form

        var focusField = $('form').find('input, textarea, select').not('[type="hidden"]').eq(0),

            fieldOffset = focusField.offset().top,
            scrollTolerance = $(window).height() / 2;

        focusField.trigger('focus');

        if( fieldOffset > scrollTolerance ){
            $('html, body').animate({scrollTop: (fieldOffset - 30)});
        }

        // Add inline errors to the DOM

    });
</script>

<!-- JavaScripts -->

</body>
</html>
