<!DOCTYPE html>
<html lang="en">
<head>

    @include('superadmin.layouts.head')

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    @include('superadmin.layouts.header')

    @include('superadmin.layouts.sidebar')

    @section('main-content')
        @show

        @include('superadmin.layouts.footer')



</div>

</body>

</html>
