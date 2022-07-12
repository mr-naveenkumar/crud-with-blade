<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>
</head>
<body>
   
<form method="post"  enctype="multipart/form-data" action="{{route('update.post')}}">
     @csrf
   
     <input type="hidden" name="id" value="{{$data->id}}"> <!--  type hidden this is used when not using @method('put') or patch    -->
    <label>NAME</label> <input type="text" name="name"  value="{{$data->name}}"><br><br>
     @error('name')
    <div class="alert alert-danger">
     {{$message}}
    </div>
     @enderror
     <label>EMAIL</label> <input type="email" name="email"  value="{{$data->email}}"><br><br>
     
     <label>PASSWORD</label> <input type="password" name="password" ><br><br>
     @error('password')
    <div class="alert alert-danger">
     {{$message}}
    </div>
     @enderror
     <label>CONFORMED PASSWORD</label> <input type="password" name="password_confirmation" ><br><br>
     @error('password_confirmation')
    <div class="alert alert-danger">
     {{$message}}
    </div>
     @enderror
     <label>DETAIL</label> <input type="text" name="detail" value="{{$data->detail}}"><br><br>
     @error('detail')
    <div class="alert alert-danger">
     {{$message}}
    </div>
     @enderror
     <input type="submit" >
        </form>

</body>
</html>