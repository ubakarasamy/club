@extends('layouts.app')

@section('content')

<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
        <div class="card">
            <div class="card-content">
                <h1 class="title">Register</h1>
            <form action="{{route('register')}}" method="POST" role="form">
                {{csrf_field()}}
                <div class="field">
                    <label for="name" class="label">Name</label>
                    <p class="control">
                    <input class="input {{$errors->has('name') ? 'is-danger' : ''}}" type="text" name="name" id="name" value="{{old('email')}}">
                    </p>
                    @if($errors->has('name'))
                        <p class="help is-danger">{{$errors->first('name')}}</p>
                    @endif
                </div>
                <div class="field">
                    <label for="email" class="label">Email Address</label>
                    <p class="control">
                    <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" id="email" value="{{old('email')}}">
                    </p>
                    @if($errors->has('email'))
                        <p class="help is-danger">{{$errors->first('email')}}</p>
                    @endif
                </div>
                <div class="field">
                    <label for="password" class="label">Password</label>
                    <p class="control">
                        <input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="text" name="password" id="password">
                    </p>
                    @if($errors->has('password'))
                        <p class="help is-danger">{{$errors->first('password')}}</p>
                    @endif
                </div>
                <div class="field">
                    <label for="password_confirmation" class="label">Confirm Password</label>
                    <p class="control">
                        <input class="input {{$errors->has('password_confirmation') ? 'is-danger' : ''}}" type="text" name="password_confirmation" id="password_confirmation">
                    </p>
                    @if($errors->has('password_confirmation'))
                        <p class="help is-danger">{{$errors->first('password_confirmation')}}</p>
                    @endif
                </div>
               
                <button class="button is-primary is-outlined is-fullwidth m-t-30">Register</button>

            </form>                
            </div> <!-- end of cord Content -->
        </div><!-- end fof cord -->
        <h5 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted">Already have an Account?</a></h5>
    </div>
</div>



@endsection
