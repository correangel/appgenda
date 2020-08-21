@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col" style="max-width: 480px;">
			
            <div class="card">
                <div class="card-header">{{ __('Ingresa los datos del usuario') }}</div>

                <div class="card-body">
                	<form method="POST" action="/dashboard/user/new/create">
							    @csrf
										<div class="form-group row">
							        <label for="name" class="col-md-12 col-form-label ">{{ __('Nombre') }}</label>

							        <div class="col-md-12">
							            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

							            @error('name')
							                <span class="invalid-feedback" role="alert">
							                    <strong>{{ $message }}</strong>
							                </span>
							            @enderror
							        </div>
							    	</div>

							    	<div class="form-group row">
                            <label for="email" class="col-md-12 col-form-label ">{{ __('Correo electronico') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-12 col-form-label ">{{ __('Celular') }}</label>

                            <div class="col-md-12">
                                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-lg btn-block" style="background: #6c5ce7; border: #6c5ce7">
                                    {{ __('Crear usuario') }}
                                </button>
                            </div>
                        </div>
									</form>
              	</div>
						</div>
		</div>
	</div>
</div>
@endsection