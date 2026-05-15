<!DOCTYPE html>
<html lang="pt-BR">
<head>
    @include('admin.partials.head')
</head>
    <body class="layout-fixed sidebar-expand-lg bg-body-tertiary"></body>
  <div class="app-wrapper">
     
@include('admin.partials.app-header')

        
        @include('admin.partials.app-sidebar')

        <main>
        @yield('content')
       
        
    </main>

   @include('admin.partials.app-footer')

</div>


    
    @include('admin.partials.script')

</body>
</html>