<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new sending</title>
</head>
<body>
<form method="POST" action="{{ route('add-post') }}">
    @csrf
    <input type="text" name="Name" placeholder="Name">
    <input type="text" name="Surname" placeholder="Surname">
    <input type="text" name="Email" placeholder="Email">
    
    <label class="control-label">Select Images</label>
    <input id="src" name="src" multiple type="file">
    <button type="submit">Create</button>
    </form>
</body>
</html>