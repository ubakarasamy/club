@extends('layouts.manage')

@section('content')
  <div class="flux-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Create New User</h1>
      </div>
    </div>
  </div>
  <hr class="m-t-0">
  <div class="columns">
    <div class="column">
      <form action="{{route('users.store')}}" method="post" class="m-l-20 m-r-20">
          {{csrf_field()}}
        <div class="field">
          <label for="name" class="label">Name</label>
            <p class="control">
              <input type="text" name="name" class="input" id="name">
            </p>
        </div>
        <div class="field">
          <label for="email" class="label">Email</label>
            <p class="control">
              <input type="email" name="email" class="input" id="email">
            </p>
        </div>
        <div class="field">
          <label for="password" class="label">Password</label>
            <p class="control">
              <input type="password" name="password" class="input" id="password" placeholder="New Password to the User">
            </p>
        </div>
        <button class="button is-success">Create User</button>
      </form>
    </div>
  </div>
@endsection