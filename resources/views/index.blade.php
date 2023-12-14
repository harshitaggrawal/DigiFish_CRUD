
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <style>
        *{
            margin:0;
            padding: 0;
            box-sizing:border-box;
        
        }
    
        .main{
            height: auto;
            width:100%;          
            background:#041E32;
            display:flex;
            flex-wrap:wrap;
            justify-content:space-between;
            align-items:center;
            padding: 3rem 9%;

        }
        .main .heading{
            font-size:40px;          
            color:white;                
        }
        
      
    </style>
</head>
<body>

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


    @if(session('delete'))
        <script>
            Toastify({
                text: "{{ session('delete') }}",
                duration: 3000,
                gravity: "top", // or "bottom"
                position: 'right', // or 'left'
                backgroundColor: "red",
            }).showToast();
        </script>
    @endif

    <div class="main">
        <h1 class="heading">CRUD OPERATION </h1>
        <a class="add" href="add"><button class="btn btn-success">ADD NEW STUDENTS</button></a>  
    </div>




<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">AGE</th>
                <th scope="col">GENDER</th>
                <th scope="col">PHONE</th>
                <th colspan="2" scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody>
           
       @foreach($student as $e)

            <tr>
                <th scope="row">{{ $e['id'] }}</th>
                <td>{{ $e['name'] }}</td>
                <td>{{ $e['email'] }}</td>
                <td>{{ $e['age'] }}</td>
                <td>{{ $e['gender'] }}</td>
                <td>{{ $e['phone_no'] }}</td>
                <td> <a href="update/{{ $e['id'] }}"><button class="btn btn-dark">EDIT</button></a></td>

                <td>
                    <form action="delete/{{ $e['id'] }}" method='POST'>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">DELETE</button>
                    </form>
                </td>


            </tr>
            @endforeach
        </tbody>
    </table>
</div>






   
   
</body>
</html>