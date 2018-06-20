<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('storage/'.Auth::user()->image)}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> En ligne</a>
            </div>
        </div>

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <br>
        <br>
        <ul class="pull-left">


    <li><a href="{{route('profilI')}}"><i class="fa fa-circle-o text-red"></i> <span>Profil</span></a></li><br>

            <li><a href="{{route ('ideeinv')}}"><i class="fa fa-circle-o text-yellow"></i> <span>Liste des Idées </span></a></li><br>
            <li><a href="{{route ('inventreprise')}}"><i class="fa fa-circle-o text-aqua"></i> <span>Liste des Entreprises </span></a></li><br>

    <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Contact</span></a></li>
</ul>
    </section>
    <!-- /.sidebar -->
</aside>
