@if (substr(Cookie::get('tahun_aktif'), 3) == 2)

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>LKPJ SIPPD Jember</title>
      @include('lkpj-fix.includes_new.style')
   </head>
   <body class="hold-transition light-skin sidebar-mini theme-primary fixed">
      <div class="wrapper">
         <div id="loader"></div>
         @include('lkpj-fix.includes_new.navbar')
         @include('lkpj-fix.includes_new.sidebar')
         <div class="content-wrapper">
            <div class="container-full">
               <section class="content">
                  @yield('content')
               </section>
            </div>
         </div>
         <div class="control-sidebar-bg"></div>
      </div>
      @include('lkpj-fix.includes_new.script')
   </body>
</html>

@else

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    @include('lkpj-fix.includes.style')
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
    @include('lkpj-fix.includes.navbar')
    @include('lkpj-fix.includes.sidebar')
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        {{-- <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Good Morning Jason!</h3>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-5 align-self-center">
                    <div class="customize-input float-right">
                        <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                            <option selected>Aug 19</option>
                            <option value="1">July 19</option>
                            <option value="2">Jun 19</option>
                        </select>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block"><button type="button" class="close" data-dismiss="alert">×</button>{{ $message }}</div>
                    @elseif ($message = Session::get('warning'))
                    <div class="alert alert-warning alert-block"><button type="button" class="close" data-dismiss="alert">×</button>{{ $message }}</div>
                    @elseif ($message = Session::get('danger'))
                    <div class="alert alert-danger alert-block"><button type="button" class="close" data-dismiss="alert">×</button>{{ $message }}</div>
                    @elseif ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block"><button type="button" class="close" data-dismiss="alert">×</button>{{ $message }}</div>
                    @endif
                </div>
            </div>
            @yield('content')
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        
        @include('lkpj-fix.includes.footer')
        
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
@include('lkpj-fix.includes.script')
</body>

</html>

@endif