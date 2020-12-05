<form method="post" action="{{ route('post_register') }}">
    @csrf
    <div class="form-group">
        <label>name</label>
        <input type="text" name="name" class="form-control">
        @error('name')
            <p class="text-danger">{{ $errors->first('name') }}</p>
        @enderror
        <label>role</label>
        <input type="text" name="role" class="form-control">
        @error('role')
            <p class="text-danger">{{ $errors->first('role') }}</p>
        @enderror
        <label>email</label>
        <input type="text" name="email" class="form-control">
        @error('email')
            <p class="text-danger">{{ $errors->first('email') }}</p>
        @enderror
        <label>password</label>
        <input type="text" name="password" class="form-control">
        @error('password')
            <p class="text-danger">{{ $errors->first('password') }}</p>
        @enderror
        <button type="submit">register</button>
    </div>
</form>
