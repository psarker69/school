@extends('backend.layout.master')

@section('title')
    Profile
@endsection


@section('main_contents')

<main class="app-content">
    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">{{ Auth::user()->name }}</h3>
                <div class="tile-body">
                    <p>
                        Email: {{ Auth::user()->email }} <br>
                        Admin:
                        @if (Auth::user()->is_admin == 1)
                            <span class="badge badge-success">Yes</span>
                        @else
                            <span class="badge badge-danger">No</span>
                        @endif
                        <br>
                        Active:
                        @if (Auth::user()->is_active == 1)
                            <span class="badge badge-success">Yes</span>
                        @else
                            <span class="badge badge-danger">No</span>
                        @endif


                    </p>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">Change Password</h3>
                <div class="tile-body">
                    <form action="{{ asset(route('profile.update', Auth::user()->id)) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Old Password</label>
                            <input type="password" name="old_password" value="{{ old('old_password') }}" class="form-control form-control-sm" required>
                        </div>
                        <div class="form-group">
                            <label for="">New Password</label>
                            <input type="password" name="password" value="{{ old('password') }}" class="form-control form-control-sm" required>
                        </div>
                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" class="form-control form-control-sm" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="change_password" class="form-control btn btn-primary btn-sm" >
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</main>

@endsection
