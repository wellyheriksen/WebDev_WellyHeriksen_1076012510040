<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Laptop</title>
</head>
<body>
    <form method="POST" action="{{ route('update-laptop', $laptop->id) }}">
        @csrf
        <div>Input Brand</div>
        <input type="text" name="Brand" value="{{ $laptop->Brand }}">
        <div>Input Models</div>
        <input type="text" name="Model" value="{{ $laptop->Model }}">
        <div>Input Processor</div>
        <input type="text" name="Processor" value="{{ $laptop->Processor }}">
        <div>Input Ram</div>
        <input type="number" name="Ram" value="{{ $laptop->Ram }}">
        <div>
            <input type="submit" value="Update">
            <a href="/">Batal</a>
        </div>
    </form>
</body>
</html>