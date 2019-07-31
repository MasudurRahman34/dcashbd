	<script src="{{ asset('admin/js/jquery-3.2.1.min.js') }}" ></script>
    <script src="{{ asset('admin/js/popper.min.js') }}" ></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}" ></script>
    <script src="{{ asset('admin/js/main.js') }} "></script>
    <!-- The javascript plugin to display page loading on top-->
    
    
    <script src='https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script>
    <!-- Page specific javascripts-->
   <script src="{{ asset('admin/js/plugins/fakeLoader.min.js') }}" ></script>
    <script type="text/javascript">
        $(window).on('load',function(){
                $.fakeLoader({
                    timeToHide:600,
                    bgColor:"#F71111",
                    spinner:"spinner6"
                });
            });
    </script>
    <script src="{{ asset('admin/js/plugins/pace.min.js') }}" ></script>
    <!-- Google analytics script-->
    <!-- <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
      }
    </script> -->