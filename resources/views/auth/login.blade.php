@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                <button 
                                type="button" 
                                class="btn btn-success" 
                                data-toggle="modal" 
                                data-target="#favoritesModal">
                                Forgot Login
                                </button>
                            </div>
                        </div>
                        <div class="modal fade" id="favoritesModal" 
                            tabindex="-1" role="dialog" 
                            aria-labelledby="favoritesModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" 
                                data-dismiss="modal" 
                                aria-label="Close">
                                
                                <h4 class="modal-title" 
                                id="favoritesModalLabel">Login Info</h4>
                            </div>
                            <div class="modal-body">
                                    <div class="table-responsive">
                                            <table class="table table-striped" border="1px">
                                                <thead STYLE="background-color: black; color: white">
                                                <tr>
                                                    <th scope="col">Login</th>
                                                    <th scope="col">Password</th>
                                                 
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Bert.VanDenburgh@golf.com</td>
                                                    <td>password</td>
                                                </tr>
                                                <tr>
                                                    <td>Bill.Dowen@golf.com</td>
                                                    <td>password</td>
                                                </tr>
                                                <tr>
                                                    <td>Bill.Naylor@golf.com</td>
                                                    <td>password</td>
                                                </tr>
                                                <tr>
                                                    <td>Bob.LeMay@golf.com</td>
                                                    <td>password</td>
                                                </tr>
                                                <tr>
                                                    <td>Bob.Shoemaker@golf.com</td>
                                                    <td>password</td>
                                                </tr>
                                                <tr>
                                                    <td>Craig.Martin@golf.com</td>
                                                    <td>password</td>
                                                </tr>
                                                <tr>
                                                        <td>Dan.Farrell@golf.com</td>
                                                        <td>password</td>
                                                    </tr>
                                                <tr>
                                                    <td>Dave.Welch@golf.com</td>
                                                    <td>password</td>
                                                </tr>
                                                <tr>
                                                    <td>Dennis.Bordeau@golf.com</td>
                                                    <td>password</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>Ed.Whelan@golf.com</td>
                                                    <td>password</td>
                                                </tr>
                                                <tr>
                                                    <td>Eric.Kehn@golf.com</td>
                                                    <td>password</td>
                                                </tr>
                                                <tr>
                                                    <td>George.Marcil@golf.com</td>
                                                    <td>password</td>
                                                </tr>
                                                <tr>
                                                    <td>Jack.Daigneault@golf.com</td>
                                                    <td>password</td>
                                                </tr>
                                                <tr>
                                                    <td>Jason.VanDenburg@golf.com</td>
                                                    <td>password</td>
                                                </tr>
                                                <tr>
                                                    <td>Jeff.Stevens@golf.com</td>
                                                    <td>password</td>
                                                </tr>
                                                <tr>
                                                    <td>Jim.Breig@golf.com</td>
                                                    <td>password</td>
                                                </tr>
                                                <tr>
                                                    <td>Jim.Durkin@golf.com</td>
                                                    <td>password</td>
                                                </tr>
                                                <tr>
                                                    <td>Joe.Gerwin@golf.com</td>
                                                    <td>password</td>
                                                </tr>
                                                <tr>
                                                    <td>Joe.Zawistowski@golf.com</td>
                                                    <td>password</td>
                                                </tr>
                                                <tr>
                                                        <td>Keith.Meyers@golf.com</td>
                                                        <td>password</td>
                                                    </tr>
                                                <tr>
                                                    <td>Kevin.Galuski@golf.com</td>
                                                    <td>password</td>
                                                </tr>
                                                <tr>
                                                    <td>Leon.Rosko@golf.com</td>
                                                    <td>password</td>
                                                </tr>
                                                <tr>
                                                    <td>Mike.Cole@golf.com</td>
                                                    <td>password</td>
                                                </tr>
                                                <tr>
                                                    <td>Mike.Hack@golf.com</td>
                                                    <td>password</td>
                                                </tr>
                                                <tr>
                                                    <td>Rick.Bertand@golf.com</td>
                                                    <td>password</td>
                                                </tr>
                                                <tr>
                                                    <td>Ryan.Cole@golf.com</td>
                                                    <td>password</td>
                                                </tr>
                                                <tr>
                                                    <td>Tim.Allard@golf.com</td>
                                                    <td>password</td>
                                                </tr>
                                                <tr>
                                                    <td>Tom.Condon@golf.com</td>
                                                    <td>password</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" 
                                class="btn btn-default" 
                                data-dismiss="modal">Close</button>
                                <span class="pull-right">
                                
                                </span>
                            </div>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
