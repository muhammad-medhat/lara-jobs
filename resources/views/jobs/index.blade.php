<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?>
    </title>
</head>

<body>
    <h2>{{ $title}}
    </h2>
    <ul>

        @forelse ($jobs as $job)
        <li>{{$job}}</li>
        @empty
        <li>Nothing</li>
        @endforelse
    </ul>
</body>

</html>
