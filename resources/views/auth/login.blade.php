<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    form {
        background-color: #fff;
        padding: 30px 40px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        width: 100%;
    }

    label {
        display: block;
        margin-bottom: 15px;
        font-size: 1rem;
        color: #555;
    }

    input[type="text"],
    input[type="password"],
    select {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 1rem;
    }

    input[type="text"]:focus,
    input[type="password"]:focus,
    select:focus {
        border-color: #007bff;
        outline: none;
    }

    button {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 1rem;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #0056b3;
    }

    p {
        color: red;
        margin: 5px 0;
        text-align: center;
    }
    h3{
        text-align: center;
    }
</style>


<form action="{{ route('login') }}" method="post" >

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p><strong>{{ $error }}</strong></p>
        @endforeach

    @endif
    @csrf
        <h3>Login Form</h3>
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

