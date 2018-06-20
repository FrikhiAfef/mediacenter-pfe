<!DOCTYPE html>
<html lang="en">
<head>

    @include('investisseur.layouts.head')

</head>
<body class="sidebar-mini skin-black">
<div class="wrapper">

    @include('investisseur.layouts.header')

    @include('investisseur.layouts.sidebar')

    @section('main-content')
        @show
    @include('investisseur.layouts.footer')
    



</div>

</body>

</html>
