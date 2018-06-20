
@extends('superadmin.layouts.app')
@section('headSection')
    <link href="{{asset('administrateur/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
@endsection
@section('main-content')
    <div class="content-wrapper">
        <section class="content-header">
    <div class="col-md-12 msgDiv">
<div class="col-md-3" style="background-color: #fff;">
<h3 align="center">Left Sidebar</h3>
    <hr>
</div>
<div class="col-md-7 " style="background-color: #fff">
    <h3 align="center">Left Sidebar</h3>
    <hr>
</div>
<div class="col-md-2 " style="background-color: #fff">
    <h3 align="center">Left Sidebar</h3>
    <hr>
</div>
    </div>
        </section>
    </div>
    @section('footerSection')
    <script src="{{asset('administrateur/bower_components/datatables.net/js/jquery.dataTables.min.js
')}}"></script>
    <script src="{{asset('administrateur/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>

@endsection
@endsection

