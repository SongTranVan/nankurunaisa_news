<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') Admin Dashboard - Vizew - Nakurunaisa</title>
  <link rel="icon" href="{!! asset('img/core-img/favicon.ico') !!}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{!! asset('plugins/fontawesome-free/css/all.min.css') !!}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet"
    href="{!! asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') !!}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{!! asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') !!}">
  <!-- Select -->
  <link rel="stylesheet" href="{!! asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') !!}">
  <link rel="stylesheet" href="{!! asset('plugins/select2/css/select2.min.css') !!}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{!! asset('plugins/jqvmap/jqvmap.min.css') !!}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{!! asset('dist/css/adminlte.min.css') !!}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{!! asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') !!}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{!! asset('plugins/daterangepicker/daterangepicker.css') !!}">
  <!-- summernote -->
  <link rel="stylesheet" href="{!! asset('plugins/summernote/summernote-bs4.css') !!}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    @include('shared.admin_header')
    @include('shared.admin_sidebar')
    <div class="content-wrapper">
      @yield('content')
    </div>
    @include('shared.admin_footer')
    @include('shared.admin_control_sidebar')
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{!! asset('plugins/jquery/jquery.min.js') !!}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{!! asset('plugins/jquery-ui/jquery-ui.min.js') !!}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{!! asset('plugins/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
  <!-- ChartJS -->
  <script src="{!! asset('plugins/chart.js/Chart.min.js') !!}"></script>
  <!-- Sparkline -->
  <script src="{!! asset('plugins/sparklines/sparkline.js') !!}"></script>
  <!-- JQVMap -->
  <script src="{!! asset('plugins/jqvmap/jquery.vmap.min.js') !!}"></script>
  <script src="{!! asset('plugins/jqvmap/maps/jquery.vmap.usa.js') !!}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{!! asset('plugins/jquery-knob/jquery.knob.min.js') !!}"></script>
  <!-- daterangepicker -->
  <script src="{!! asset('plugins/moment/moment.min.js') !!}"></script>
  <script src="{!! asset('plugins/daterangepicker/daterangepicker.js') !!}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{!! asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') !!}"></script>
  <!-- Summernote -->
  <script src="{!! asset('plugins/summernote/summernote-bs4.min.js') !!}"></script>
  <!-- overlayScrollbars -->
  <script src="{!! asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') !!}"></script>
  <!-- AdminLTE App -->
  <script src="{!! asset('dist/js/adminlte.js') !!}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{!! asset('dist/js/pages/dashboard.js') !!}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{!! asset('dist/js/demo.js') !!}"></script>
  <!-- Select2 -->
  <script src="{!! asset('plugins/select2/js/select2.full.min.js') !!}"></script>
  <!-- Page script -->
  <script>
    $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
  </script>
</body>

</html>