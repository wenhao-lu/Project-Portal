@extends ('layout.console')
@section ('content')




<section class="w3-padding">
<div class="container">
    <h2 class="title">Add User</h2>

    <form method="post" action="/console/users/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="first">First Name:</label>
            <input type="text" name="first" id="first" value="{{old('first')}}" required>
            
            @if ($errors->first('first'))
                <br>
                <span class="w3-text-red">{{$errors->first('first')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="last">Last Name:</label>
            <input type="text" name="last" id="last" value="{{old('last')}}" required>

            @if ($errors->first('last'))
                <br>
                <span class="w3-text-red">{{$errors->first('last')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{old('email')}}" required>

            @if ($errors->first('email'))
                <br>
                <span class="w3-text-red">{{$errors->first('email')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">

            @if ($errors->first('password'))
                <br>
                <span class="w3-text-red">{{$errors->first('password')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="role">Role:</label>
            <input type="text" name="role" id="role" value="{{old('role')}}" required>

            @if ($errors->first('role'))
                <br>
                <span class="w3-text-red">{{$errors->first('role')}}</span>
            @endif
        </div>

        <button type="submit" class="addBtn">Add User</button>

    </form>

    <a href="/console/users/list">Back to User List</a>
    </div>
</section>

@endsection
