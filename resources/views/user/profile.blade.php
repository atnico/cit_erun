@extends('layouts/app')

@section('content')
    <h4 class="text-center p-4">Mes informations</h4>

    <div class="row">
        <div class="col-6 offset-1 text-center mx-auto">
            <form class="col-12 mx-auto p-5 border border-info" action="{{ route('user.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="prenom">Pseudo</label>
                    <input required type="text" class="form-control" name="pseudo" value="{{ $user->pseudo }}"
                        id="pseudo">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input required type="text" class="form-control" name="email" value="{{ $user->email }}"
                        id="email">
                </div>
                <div class="form-group">
                    <label for="prenom">Email</label>
                    <input required type="text" class="form-control" name="email" value="{{ $user->email }}"
                        id="email">
                </div>
            </form>
        </div>
    </div>



    <h4 class="text-center p-4">Mon mot de passe</h4>

    <div class="row">
        <div class="col-6 offset-1 text-center mx-auto">
            <form class="col-12 mx-auto p-5 border border-info" action="{{ route('password.update', $user->id) }}"
                method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="prenom">Ancien mot de passe</label>
                    <input required type="password" class="form-control" name="password" id="password">
                </div>
                <div class="form-group">
                    <label for="prenom">Nouveau mot de passe</label>
                    <input required type="password" class="form-control" name="password" id="password">
                </div>

                <div class="form-group">
                    <label for="prenom">Confirmation mot de passe</label>
                    <input required type="password" class="form-control" name="password" id="password">
                </div>
            </form>

        </div>
    </div>
@endsection
