
<!-- Bootstrap JS -->
<script src="{{URL::asset('resources/templates/assets/js/bootstrap.bundle.min.js')}}"></script>
<!--plugins-->
<script src="{{URL::asset('resources/templates/assets/js/jquery.min.js')}}"></script>
<script src="{{URL::asset('resources/templates/assets/js/jquery-ui.min.js')}}"></script>
<script src="{{URL::asset('resources/templates/assets/js/sweetalert.min.js')}}"></script>
<script src="{{URL::asset('resources/templates/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{URL::asset('resources/templates/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{URL::asset('resources/templates/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
@yield('chat-js')
<script src="{{URL::asset('resources/templates/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{URL::asset('resources/templates/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{URL::asset('resources/templates/assets/plugins/highcharts/js/highcharts.js')}}"></script>
<script src="{{URL::asset('resources/templates/assets/plugins/highcharts/js/exporting.js')}}"></script>
<script src="{{URL::asset('resources/templates/assets/plugins/highcharts/js/variable-pie.js')}}"></script>
<script src="{{URL::asset('resources/templates/assets/plugins/highcharts/js/export-data.js')}}"></script>
<script src="{{URL::asset('resources/templates/assets/plugins/highcharts/js/accessibility.js')}}"></script>
<script src="{{URL::asset('resources/templates/assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
<!--notification js -->
<script src="{{URL::asset('resources/templates/assets/plugins/notifications/js/lobibox.min.js')}}"></script>
<script src="{{URL::asset('resources/templates/assets/plugins/notifications/js/notifications.min.js')}}"></script> 

<script> 
    var base_url = {!! json_encode(url('/')) !!} 
    var file_profile;
</script>
<script src="{{URL::asset('resources/templates/assets/js/app.js')}}"></script>
<script src="{{URL::asset('resources/customs/js/global.js')}}"></script>

@yield('js')