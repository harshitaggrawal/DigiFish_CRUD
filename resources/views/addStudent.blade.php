<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>


<div class="container">
        <h1>Add New Student</h1>

        <form action="add" method="POST">
            @csrf
          
            <div class="form-group">
                <label for="username">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Your name" >
                @error('name')
                    <p style="color:red">{{ $message }}</p>
                @enderror
            </div>

            
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email"  placeholder="Enter your email">
                @error('email')
                    <p style="color:red">{{ $message }}</p>
                @enderror
            </div>

            
            <div class="form-group">
                <label for="password">Phone Number</label>
                <input type="text" class="form-control" name="phone_no" placeholder="Enter your Phone Number"  >
                @error('phone_no')
                    <p style="color:red">{{ $message }}</p>
                @enderror   

            </div>

            <div class="form-group">
                <label for="password">Age</label>
                <input type="text" name="age" placeholder="Enter your age" class="form-control" >
                @error('age')
                    <p style="color:red">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <input type="text" name="gender" placeholder="Enter your Gender" class="form-control" >
                @error('gender')
                    <p style="color:red">{{ $message }}</p>
                @enderror
            </div>

            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>