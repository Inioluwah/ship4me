@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> I want to ship </div>

                    <div class="card-body">
                        <form method="POST" action="">
                            @csrf
                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label text-md-right">Box Dimension</label>

                                <div class="col-md-2">
                                    <input id="box_length" placeholder= "Length" type="email" class="form-control{{ $errors->has('box_length') ? ' is-invalid' : '' }}" name="box_length" value="{{ old('box_length') }}" required autofocus>

                                    @if ($errors->has('box_length'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('box_length') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-2">
                                    <input id="box_width" placeholder="Width" type="email" class="form-control{{ $errors->has('box_width') ? ' is-invalid' : '' }}" name="box_width" value="{{ old('box_width') }}" required autofocus>

                                    @if ($errors->has('box_width'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('box_width') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-2">
                                    <input id="box_height" placeholder="Height" type="email" class="form-control{{ $errors->has('box_height') ? ' is-invalid' : '' }}" name="box_height" value="{{ old('box_height') }}" required autofocus>

                                    @if ($errors->has('box_height'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('box_height') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label text-md-right">Receiver Information</label>
                            </div>
                                <div class="form-group col-md-6">
                                    <input id="receiver_name" placeholder="Receiver's Name" type="email" class="form-control{{ $errors->has('receiver_name') ? ' is-invalid' : '' }}" name="receiver_name" value="{{ old('receiver_name') }}" required autofocus>

                                    @if ($errors->has('receiver_name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('receiver_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <input id="receiver_email" placeholder="Receiver's Email" type="email" class="form-control{{ $errors->has('receiver_email') ? ' is-invalid' : '' }}" name="receiver_email" value="{{ old('receiver_email') }}" required autofocus>

                                    @if ($errors->has('receiver_email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('receiver_email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <input id="receiver_phone" placeholder="Receiver's Phone Number" type="email" class="form-control{{ $errors->has('receiver_phone') ? ' is-invalid' : '' }}" name="receiver_phone" value="{{ old('receiver_phone') }}" required autofocus>

                                    @if ($errors->has('receiver_phone'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('receiver_phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                        <input id="receiver_address" placeholder="Receiver's Address" type="email" class="form-control{{ $errors->has('receiver_address') ? ' is-invalid' : '' }}" name="receiver_address" value="{{ old('receiver_address') }}" required autofocus>

                                    @if ($errors->has('receiver_address'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('receiver_address') }}</strong>
                                    </span>
                                    @endif
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



{{--@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection--}}
