<div class="container">

    <!-- Trigger the modal with a button -->
    <button id="register-btn" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
    Launch demo modal
  </button>

    <!-- Modal -->
    <div class="modal fade" id="reg" role="dialog">
        <div class="modal-dialog" position>

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-user"></span> Register</h4>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                    <form role="form" method="POST" action="{{ route('register') }}">
                      @csrf

                        <div class="form-group">
                            <label for="name" style="margin-Right:83px"><span class="glyphicon glyphicon-user"></span> Name</label>
                            <input type="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Enter email" required autofocus>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email" style="margin-Right:80px"><span class="glyphicon glyphicon-envelope"></span> E-mail </label>
                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" id="email" placeholder="Enter email" required>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password" style="margin-Right:55px"><span class="glyphicon glyphicon-lock"></span> Password</label>
                            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password" placeholder="Enter password" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password-confirm"><span class="glyphicon glyphicon-lock"></span>Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation" id="password-confirm" placeholder="Enter password" required>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="" checked>Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-success btn-block" style="background-color:#ff3000"><span class="glyphicon glyphicon-off"></span> Register</button>
                    </form>
                </div>
                <div class="modal-footer">

                    <p>Not a member? <a href="#">Sign Up</a></p>
                    <p>Forgot <a href="#">Password?</a></p>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#register-btn").click(function() {
            $("#reg").modal();
        });
    });
</script>
