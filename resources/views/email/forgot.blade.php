<h1>
    hello {{ $user->name }}
</h1>
<p>
    please click the password rest button to rest your password
    <a href="{{ url('rest_password'.$user->email.'/'.$code) }}">Rest password</a>
</p>

