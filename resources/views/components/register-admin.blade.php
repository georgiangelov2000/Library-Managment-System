<div class="m-auto">
    <div class="card-body pr-0 pl-0">
        <form method="POST" action="{{ route('register.admin') }}" class="col-md-12 m-auto">
            @csrf

            <div class="form-group mb-3 col-12 pl-0">
                <label>Name</label>
                <input 
                    id="name" 
                    type="text" 
                    name="name"
                    class="form-control form-control-sm @error('name') is-invalid @enderror" 
                    value="{{ old('name') }}"
                    placeholder="Name">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="form-group mb-3 col-12 pl-0">
                <label>Email</label>
                <input 
                    id="email" 
                    type="email" 
                    class="form-control form-control-sm @error('email') is-invalid @enderror" 
                    name="email"
                    value="{{ old('email') }}" 
                    placeholder="Email"
                    >
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-3 col-12 pl-0">
                <div class="form-group">
                    <label>Select Gender</label>
                    <select 
                        class="form-control form-control-sm @error('gender_id') is-invalid @enderror" 
                        name="gender_id" 
                        id="gender_id"
                        >
                        @foreach ($genders as $gender)
                            <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                        @endforeach
                    </select>
                    @error('gender_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group mb-3 col-12 pl-0">
                <label>Password</label>
                <input  
                    id="password" 
                    type="password" 
                    class="form-control form-control-sm @error('password') is-invalid @enderror" 
                    name="password"
                    placeholder="Password"
                    >
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-3 col-12 pl-0">
                <label>Confirm Password</label>
                <input 
                    id="password-confirm" 
                    type="password" 
                    class="form-control form-control-sm @error('password_confirmation') is-invalid @enderror" 
                    name="password_confirmation" 
                    placeholder="Confirm Password"
                    >
                @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row mb-0">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-sm">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
