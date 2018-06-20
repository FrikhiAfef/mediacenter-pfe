@extends('superadmin.layouts.app')

@section('main-content')
    <!-- contenu de l'entete de page -->
    <div class="content-wrapper">

        <section class="content-header">
            <h1>
                Bienvenue
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li class="active">Utilisateur</li>
                <li class="active">Role</li>
            </ol>
            <br>
            <br>
            <!-- formulaire de creation de nouveau emission -->
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Nouvelle Role </h3>
                        </div>
                        <br>
                        <form role="form" method="post"  action="{{route('role.store')}}">
                            {{csrf_field()}}

                            <div class="box-body">
                                <div class="form-group"  @if($errors->get('nomR')) has-error @endif >
                                    <label for="exampleInputEmail1">Role</label>
                                    <input type="text" name="nomR" class="form-control"  placeholder="Enter le role ">
                                    @if($errors->get('nomR'))
                                        @foreach($errors->get('nomR') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="name">Emission Permissions</label>
                                        <div class="checkbox">
                                            @foreach ($permissions as $permission)
                                                @if ($permission->type == 'emission')
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->nomP }}</label>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>

                                    </div>


                                    <div class="col-lg-4">
                                        <label for="name">Evenement Permissions</label>
                                        <div class="checkbox">
                                            @foreach ($permissions as $permission)
                                                @if ($permission->type == 'evenement')
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->nomP }}</label>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="name">Actualite Permissions</label>
                                        <div class="checkbox">
                                            @foreach ($permissions as $permission)
                                                @if ($permission->type == 'actualite')
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->nomP }}</label>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="name">Galerie Permissions</label>
                                        <div class="checkbox">
                                            @foreach ($permissions as $permission)
                                                @if ($permission->type == 'galerie')
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->nomP }}</label>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="name">Podcast Permissions</label>
                                        <div class="checkbox">
                                            @foreach ($permissions as $permission)
                                                @if ($permission->type == 'podcast')
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->nomP }}</label>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="name">Programme Permissions</label>
                                        <div class="checkbox">
                                            @foreach ($permissions as $permission)
                                                @if ($permission->type == 'programme')
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->nomP }}</label>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="name">A propos Permissions</label>
                                        <div class="checkbox">
                                            @foreach ($permissions as $permission)
                                                @if ($permission->type == 'apropos')
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->nomP }}</label>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="name">Partenaire Permissions</label>
                                        <div class="checkbox">
                                            @foreach ($permissions as $permission)
                                                @if ($permission->type == 'partenaire')
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->nomP }}</label>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="name">Equipe Permissions</label>
                                        <div class="checkbox">
                                            @foreach ($permissions as $permission)
                                                @if ($permission->type == 'equipe')
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->nomP }}</label>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="name">Jump in incubator Permissions</label>
                                        <div class="checkbox">
                                            @foreach ($permissions as $permission)
                                                @if ($permission->type == 'jump')
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->nomP }}</label>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="name">Publicite Permissions</label>
                                        <div class="checkbox">
                                            @foreach ($permissions as $permission)
                                                @if ($permission->type == 'publicite')
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->nomP }}</label>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="name">Digital Permissions</label>
                                        <div class="checkbox">
                                            @foreach ($permissions as $permission)
                                                @if ($permission->type == 'digital')
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->nomP }}</label>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="name">Autre Permissions</label>
                                        <div class="checkbox">
                                            @foreach ($permissions as $permission)
                                                @if ($permission->type == 'autre')
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->nomP }}</label>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>




                                </div>


                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> valider
                                    </label>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Enregistrer</button>

                                <a href="{{route('role.index')}}"  class="btn btn-warning" >Annuler</a>
                            </div>

                        </form>
                    </div>

                    </div>
                </div>
        </section>
    </div>

    </div>

@endsection