<!-- resources/views/form.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</head>
<body>
    <h1>Form Validation</h1>

    @if(session('success'))
        <script>
            Toastify({
                text: "{{ session('success') }}",
                duration: 3000,
                gravity: "top", // or "bottom"
                position: 'right', // or 'left'
                backgroundColor: "green",
            }).showToast();
        </script>
    @endif

    




    @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <form method="POST" action="/validate">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" >
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" >
        <br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
