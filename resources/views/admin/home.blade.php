<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
   @livewireStyles
  </head>
  <body>
    <livewire:counter /> 
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        @include('admin.header')
        <!-- partial -->
      @include('admin.body')  
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
   @livewireScripts
    <!-- End custom js for this page -->
  </body>
</html>