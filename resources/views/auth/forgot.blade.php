<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="X-UA-Compatible" content="ie=edge">
    <title>forgot password</title>
</head>

<body>
<form action="{{ url('/ForgotPassword') }}" method="post">

    {{ csrf_field() }}

    @if(session('error'))
        <div>
            {{ session('success') }}
        </div>
    @endif
    @if(session('success'))
        <div>
        {{ session('success') }}
        </div>

    @endif

    <input type="email" name="email" id="email">
    <button type="submit">submit</button>
</form>
</body>

</html>
