<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>AtrioHR - HR and Company Management Admin Template</title>
    <!-- Favicon-->
  @include('SuperAdmin.css')
</head>

<body>
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30">
                <img class="loading-img-spin" src="{{asset('admin/assets/images/loading.png')}}" alt="admin">
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
   @include('Staff.top_header')
    <!-- #Top Bar -->
    <div>
        <!-- Left Sidebar -->
       @include('Staff.sidebar')
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
     @include('SuperAdmin.rightbar')
        <!-- #END# Right Sidebar -->
    </div>
    <section class="content">
        <div class="container-fluid">
         @yield('content')
        </div>
    </section>
  @include('SuperAdmin.js')
</body>

</html>