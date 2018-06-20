<!DOCTYPE html>
<html lang="en">
<head>

    @include('porteure.layouts.head')

</head>
<body class="sidebar-mini skin-black">
<div class="wrapper">

    @include('porteure.layouts.header')

    @include('porteure.layouts.sidebar')

    @section('main-content')
        @show

    @include('porteure.layouts.footer')


</div>

</body>

</html>
