<head>
    <meta charset="utf-8"/>
    @stack('title')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Laravel Admin Panel" name="description"/>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{URL::to('/')}}/assets/images/favicon.ico">


    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{URL::to('/')}}/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{URL::to('/')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- Icons Css -->
    <link href="{{URL::to('/')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="{{URL::to('/')}}/assets/css/app.min.css" rel="stylesheet" type="text/css"/>

    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css"/>

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

    <!-- custom Css-->
    <link href="{{URL::to('/')}}/assets/css/custom.min.css" rel="stylesheet" type="text/css"/>
    <style>
        div.dt-buttons {
            padding: 0.5rem !important;
        }
        table.dataTable {
            padding: 0.5rem !important;
        }
    </style>
</head>