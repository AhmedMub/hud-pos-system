<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>you are logged in successfully</div>

    <form action="logout" method="POST">
        @csrf
        <button>get out</button>
    </form>
</body>

</html>
