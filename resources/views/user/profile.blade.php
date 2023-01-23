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
                    <label for="streetName">n° rue</label>
                    <input required type="text" class="form-control" name="rue" value="{{ $user->rue }}"
                        id="rue">
                </div>
                <div class="form-group">
                    <label for="postcode">Code postal</label>
                    <input required type="string" class="form-control" name="code_postal" value="{{ $user->code_postal }}"
                        id="code_postal">
                </div>
                <div class="form-group">
                    <label for="city">Ville</label>
                    <input required type="string" class="form-control" name="ville" value="{{ $user->ville}}"
                        id="ville">
                </div>
                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4 mx-auto mt-5">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Valider') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="row mt-5">
        <div class="col-6 offset-1 text-center mx-auto">
            <form class="col-12 mx-auto p-5 border border-info" action="{{ route('user.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

    <h4 class="text-center p-4">Modification mot de passe</h4>

    <div class="row">
        <div class="col-6 offset-1 ">
            <label for="password" class="col-md-12 col-form-label text-md-end">{{ __('Ancien mot de passe') }}</label>

            <form class="col-12 mx-auto p-5 border border-info" action="{{ route('password.update', $user->id) }}"
                method="POST">
                @csrf
                @method('PUT')
                <div class="row mb-4">
                    <label for="new_password" class="col-md-4 col-form-label text-md-end">{{ __('Nouveau mot de passe') }}</label>

                    <div class="col-md-6">
                        <input id="new_password" type="new_password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" required autocomplete="new-password">

                        @error('new_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-4">
                    <label for="new_password" class="col-md-4 col-form-label text-md-end">{{ __('Nouveau mot de passe') }}</label>

                    <div class="col-md-6">
                        <input id="new_password" type="new_password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" required autocomplete="new-password">

                        @error('new_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-4">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmez le mot de passe') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password_confirm" class="form-control" name="password_confirm" required autocomplete="password_confirm">
                    </div>
                </div>
                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4 mx-auto mt-5">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Valider') }}
                        </button>
                    </div>
                </div>

            </form>

        </div>
    </div>
@endsection
