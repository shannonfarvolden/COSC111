<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Course Canvas Reset Email</title>
</head>
<body>
<p>Reset your password by clicking <a href="{{ url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}">here</a>.</p>
</body>
</html>