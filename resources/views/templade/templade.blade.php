
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>API</title>
    <!-- Favicon-->
    

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="https://gurayyarar.github.io/AdminBSBMaterialDesign/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="https://gurayyarar.github.io/AdminBSBMaterialDesign/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="https://gurayyarar.github.io/AdminBSBMaterialDesign/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Colorpicker Css -->
    <link href="https://gurayyarar.github.io/AdminBSBMaterialDesign/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="https://gurayyarar.github.io/AdminBSBMaterialDesign/plugins/dropzone/dropzone.css" rel="stylesheet">

    <!-- JQuery DataTable Css -->
    <link href="https://gurayyarar.github.io/AdminBSBMaterialDesign/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Sweet Alert Css -->
    <link href="https://gurayyarar.github.io/AdminBSBMaterialDesign/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="https://gurayyarar.github.io/AdminBSBMaterialDesign/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="https://gurayyarar.github.io/AdminBSBMaterialDesign/css/themes/all-themes.css" rel="stylesheet" />

</head>

<body class="theme-red">
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <div class="overlay"></div>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
              
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="javascript:void(0)">API</a>
            </div>
        
        </div>
    </nav>    
        
    @include('templade.menu')        

<section class="content">
    <div class="container-fluid">
        @if(session('info'))
        <div class="container">
            <div class="row">
                
                <div class="alert bg-green alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {{ session('info') }} 
                </div>
            </div>
            
        </div>
        @endif

        @yield('body')

   </div>
</section>

    

    <!-- Jquery Core Js -->
    <script src="https://gurayyarar.github.io/AdminBSBMaterialDesign/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="https://gurayyarar.github.io/AdminBSBMaterialDesign/plugins/bootstrap/js/bootstrap.js"></script>


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Select Plugin Js -->
    <script src="https://gurayyarar.github.io/AdminBSBMaterialDesign/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="https://gurayyarar.github.io/AdminBSBMaterialDesign/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

        <!-- Bootstrap Colorpicker Js -->
    <script src="https://gurayyarar.github.io/AdminBSBMaterialDesign/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

    <!-- Dropzone Plugin Js -->
    <script src="https://gurayyarar.github.io/AdminBSBMaterialDesign/plugins/dropzone/dropzone.js"></script>

    <!-- Jquery Validation Plugin Css -->

    <script src="{{ asset('plugins/jquery-validation/jquery.validate.js') }}"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="https://gurayyarar.github.io/AdminBSBMaterialDesign/plugins/jquery-steps/jquery.steps.js"></script>

   

    <!-- Waves Effect Plugin Js -->
    <script src="https://gurayyarar.github.io/AdminBSBMaterialDesign/plugins/node-waves/waves.js"></script>

        <!-- Jquery DataTable Plugin Js -->
    <script src="https://gurayyarar.github.io/AdminBSBMaterialDesign/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="https://gurayyarar.github.io/AdminBSBMaterialDesign/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="https://gurayyarar.github.io/AdminBSBMaterialDesign/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="https://gurayyarar.github.io/AdminBSBMaterialDesign/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="https://gurayyarar.github.io/AdminBSBMaterialDesign/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="https://gurayyarar.github.io/AdminBSBMaterialDesign/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="https://gurayyarar.github.io/AdminBSBMaterialDesign/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="https://gurayyarar.github.io/AdminBSBMaterialDesign/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="https://gurayyarar.github.io/AdminBSBMaterialDesign/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="https://gurayyarar.github.io/AdminBSBMaterialDesign/js/admin.js"></script>

    <script src="https://gurayyarar.github.io/AdminBSBMaterialDesign/js/pages/tables/jquery-datatable.js"></script>
    <script src="https://gurayyarar.github.io/AdminBSBMaterialDesign/js/pages/forms/form-validation.js"></script>

    <!-- Demo Js -->
    <script src="https://gurayyarar.github.io/AdminBSBMaterialDesign/js/demo.js"></script>

    <script>
    $(".btndelete").click(function(e){
        e.preventDefault();

        swal({
          title: "¿Estás seguro?",
          text: "Una vez eliminado, no podrás recuperar!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {

            var row     = $(this).parents('tr');
            var form    = $(this).parents('form');
            var url     = form.attr('action');
                    
            
            $.post(url, form.serialize(), function(result){
                row.fadeOut();
                
            });
            swal("Ha sido eliminado!", {
              icon: "success",
            });
          } else {
            swal("¡No ha sido eliminado!");
          }
        });    
    });
    </script>
</body>

</html>
