@extends('layouts.manage')

@section('content')
  <div class="flux-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Edit User</h1>
      </div>
    </div>
  </div>
  <hr class="m-t-0">
  <div class="columns">
    <div class="column">
      <form action="{{route('users.update', $user->id)}}" method="POST" class="m-l-20 m-r-20">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <div class="field">
          <label for="name" class="label">Name</label>
            <p class="control">
            <input type="text" name="name" class="input" id="name" value="{{$user->name}}">
            </p>
        </div>
        <div class="field">
          <label for="email" class="label">Email</label>
            <p class="control">
              <input type="email" name="email" class="input" id="email" value="{{$user->email}}">
            </p>
        </div>
        <p id="ChangePassword" class="button m-b-10">Change Password</p><br>
        <div class="field" id="showPassword">
          <label for="password" class="label">Password</label>
            <p class="control">
              <input type="password" name="password" class="input" id="password" placeholder="New Password to the User">
            </p>
        </div>

        <button class="button is-success">Save User</button>
      </form>
    </div>
  </div>
@endsection

@section('scripts')
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $("#showPassword").css("display", "none");
    $("#ChangePassword").click(function(){
        $("#showPassword").toggle();
    });
});
</script>
@endsection