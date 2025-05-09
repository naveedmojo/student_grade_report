<h1>login form</h1>
@if ($errors->any())

            @foreach ($errors->all() as $error)
                <p><strong>{{ $error }}</strong></p>
            @endforeach


@endif
<form action="{{ route('login') }}" method="post" >
    @csrf
    <label for="username">
        <input type="text" id="username" name="username" placeholder="enter the username" required>
    </label>
    <br><br>
    <label for="password">
        <input type="password" id="password" name="password" placeholder="enter password" required>
    </label>
    <br><br>
    <select name="role" id="role">
        <option value="Teacher">Teacher</option>
        <option value="Student">Student</option>
    </select>
    <br><br>
    <button type="submit">Sign In</button>
</form>

