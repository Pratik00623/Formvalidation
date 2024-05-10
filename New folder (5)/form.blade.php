<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
    />
</head>

<body>
<h1>Form Validation Example</h1>
<form action="/form" method="post">
    @csrf
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name">
    @error('name')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    <br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email">
    @error('email')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    <br>

    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password">
    @error('password')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    <br>

    <label for="confirmpassword">Confirm Password:</label><br>
    <input type="password" id="confirmpassword" name="password_confirmation">
    @error('password_confirmation')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    <br>

    <button type="submit">Submit</button>
</form>

</body>
</html>
