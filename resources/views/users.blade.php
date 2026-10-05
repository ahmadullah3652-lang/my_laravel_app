html
<!DOCTYPE html>
<html lang="ps">
<head>
    <meta charset="UTF-8">
    <title>د کاروونکو لیست</title>
    <style>
        body { font-family: sans-serif; padding: 20px; background-color: #f8f9fa; }
        h1 { color: #333; }
        ul { list-style-type: none; padding: 0; }
        li { background: white; margin: 10px 0; padding: 15px; border-radius: 5px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
    </style>
</head>
<body>
    <h1>د کاروونکو لیست (له ډیټابیس څخه)</h1>
    <ul>
        @foreach($users as $user)
            <li>
                <strong>{{ $user->name }}</strong> - {{ $user->email }}
            </li>
        @endforeach
    </ul>
</body>
</html>