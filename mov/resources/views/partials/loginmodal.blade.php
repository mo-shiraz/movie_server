<!--Login Modal Start From Here -->
<!-- Button trigger modal -->

<!--start
<button type="button" class="btn btn-primary" 
        data-toggle="modal" 
        data-target="#delete_project">
  Delete
</button> 
end-->

<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">{{__('Login')}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="card-body">
              <form method="POST" action="{{ route('login') }}">
                  @csrf

                  <div class="form-group row">
                      <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                      <div class="col-md-7">
                          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                          @if ($errors->has('email'))
                              <span class="invalid-feedback">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                      <div class="col-md-7">
                          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                          @if ($errors->has('password'))
                              <span class="invalid-feedback">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group row">
                      <div class="col-md-6 offset-md-4">
                          <div class="checkbox">
                              <label>
                                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                              </label>
                          </div>
                      </div>
                  </div>

                  <div class="form-group row mb-0">
                      <div class="col-md-8 offset-md-4">
                          <button type="submit" class="btn btn-primary">
                              {{ __('Login') }}
                          </button>

                          <a class="btn btn-link" href="{{ route('password.request') }}">
                              {{ __('Forgot Your Password?') }}
                          </a>
                      </div>
                  </div>
              </form>
          </div>
        </div>
      </div>
    </div>
<!--Login Modal end -->