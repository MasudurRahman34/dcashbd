<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="dcashbd.com is currency exchange merchandarize">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@dcashbd">
    <meta property="twitter:creator" content="@dcashbd">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="dcashbd.com">
    <meta property="og:title" content="dcashbd.com">
    <meta property="og:url" content="http://dcashbd.com">
    <!-- <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png"> -->
    <meta property="og:description" content="dcashbd.com is currency exchanger merchandarize.">
    <title>dcashbd.com</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    @include ('backend.partials.css')
  </head>
   <body class="app sidebar-mini rtl">
        @include ('backend.partials.navbar')
        <!-- Navbar-->
        @include ('backend.partials.sidebar')
        <main class="app-content">
            @yield('content')
        @include ('backend.partials.footer')
        </main>
        
        @include ('backend.partials.script')
        @yield('script');
    </body>
</html>