<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('save-laptop') }}">
        @csrf
        <div>Input Brand</div>
        <input type="text" name="Brand">
        <div>Input Models</div>
        <input type="text" name="Model">
        <div>Input Processor</div>
        <input type="text" name="Processor">
        <div>Input Ram</div>
        <input type="number" name="Ram">
        <div><input type="submit" value ="save"></div>
    </form>
</body>
</html>