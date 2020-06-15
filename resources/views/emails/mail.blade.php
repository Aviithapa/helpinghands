Hi <strong>{{ $name }}</strong>,

<p>{{ $body }}</p>
<p>Please reset your password from given link <a href="{{route('change-password',$user->password_change_code)}}">click this link</a></p>