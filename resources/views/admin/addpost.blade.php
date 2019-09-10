<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('public/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
    <!-- End layout styles -->
    {{--<link rel="shortcut icon" href="../../assets/images/favicon.png" />--}}
    <style>
        .ck-content{
            height: 450px;
        }
    </style>
</head>
<body>
<div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    @include('admin.topbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title"> Form elements </h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                        </ol>
                    </nav>
                </div>
                <div class="row">

                    <div class="col-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Basic form elements</h4>
                                <p class="card-description"> Basic form elements </p>
                                <form class="forms-sample">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Name</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Gender</label>
                                        <select class="form-control" id="exampleSelectGender">
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>File upload</label>
                                        <input type="file" name="img[]" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                            <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                          </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputCity1">City</label>
                                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Textarea</label>
                                        <div id="editor"></div>
                                    </div>
                                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                                    <button class="btn btn-light">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            @include('admin.footer')
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script type="text/javascript" src="{{ asset('public/assets/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script type="text/javascript" src="{{ asset('public/assets/js/off-canvas.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/js/hoverable-collapse.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/assets/js/misc.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{ asset('public/assets/js/file-upload.js')}}"></script>
<script src="{{ asset('resources/ckeditor5-build-classic-12.4.0/ckeditor5-build-classic/ckeditor.js')}}"></script>

<script src="{{ asset('resources/ckfinder/ckfinder.js')}}"></script>
<!-- End custom js for this page -->

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ), {
            ckfinder: {
                uploadUrl: 'resources/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
            },
            toolbar: [ 'ckfinder', 'imageUpload', '|', 'heading', '|', 'bold', 'italic', '|', 'undo', 'redo' ]
        } )
        .catch( function( error ) {
            console.error( error );
        } );

</script>
</body>
</html>
