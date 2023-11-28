<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>e-LKPJ Jember</title>
      @include('includes.style')
   </head>
   <body class="hold-transition light-skin sidebar-mini theme-primary fixed">
      <div class="wrapper">
         {{-- <div id="loader"></div> --}}
         @include('includes.navbar')
         @include('includes.sidebar')
         <div class="content-wrapper bg-temple-white">
            <div class="container-full">
               <section class="content">
                  @yield('content')
               </section>
            </div>
         </div>
         <div class="control-sidebar-bg"></div>
      </div>
      @include('includes.script')
      @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
   </body>
</html>