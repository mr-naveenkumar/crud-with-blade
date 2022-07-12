<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Read Page</title>
    <style>
table {
  border-collapse: collapse;

}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #D6EEEE;
}
</style>
</head>
<body>


 <div class="table-my" >
 
  <table>
   

   <tr>
      <td>Serial Number</td>
      <td>Name</td>
      <td>Email</td>
       <td>Detail</td>
       <td>Action</td>
    </tr>
    
    @foreach($cruds as $data)
           
    <tr>
         <td>  </td>
         <td> {{$data->name}} </td>
         <td> {{$data->email}} </td>
         <td> {{$data->detail}} </td>
       
         <td> <!-- <a href="edit-page/{{$data->id}}"><i class='fa fa-trash' style='font-size:24px'></i> </a>  this is edit uncommented then
        check --> 
          <a href="{{route('deleting',['id'=>$data->id])}}" > <i class="fa fa-trash"></i></a> 
        </td>
     </tr>
    @endforeach
</table>
</div>

<div class="styles" style="border:solid:15px;padding:150px">
{{-- $cruds->links() --}}

</div>
</body>
</html>