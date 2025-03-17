<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
</head>
<body>
    @foreach (auth()->user()->notifications as $notification)
        <div>
            <p>{{ $notification->data['message'] }}</p>
        </div>
    @endforeach
</body>
</html>