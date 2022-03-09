<div class="login-box d-flex flex-column align-items-center m-auto">
    <h3>{{ __('Login') }}</h3>
    <div class="card card-outline card-primary w-100 mt-3">
        <div class="card-body login-card-body rounded ">
            <form method="post" action="{{ route('login') }}">
                @csrf
                <div class="form-group mb-3">
                    <label>Email</label>
                    <input 
                        id="email" 
                        type="email" 
                        placeholder="Email" 
                        required 
                        class="form-control form-control-sm @error('email') is-invalid @enderror" 
                        name="email" 
                        value="{{ old('email') }}" 
                        required
                        >
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label>Password</label>
                    <input 
                        id="password" 
                        type="password" 
                        placeholder="Password" 
                        class="form-control form-control-sm @error('password') is-invalid @enderror" 
                        name="password" 
                        required 
                        >
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4 d-flex justify-content-end">
                        <button type="submit" class="btn btn-sm btn-primary">
                            {{ __('Login') }}
                        </button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            @if (Route::has('password.request'))
                <p class="mb-1">
                    <a class="btn btn-sm btn-link pl-0" style="text-decoration:none;"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </p>
            @endif
        </div>
    </div>
</div>
@push('scripts')
    <script type="text/javascript" src="{{ mix('js/share.js') }}"> </script>
@endpush
