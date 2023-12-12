<x-app-layout>
</x-app-layout>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include("admin.admincss");
  
</head>
  <body>
  
   
  <div class= "container-scroller">
  @include("admin.navbar");

  <div style= "position: relative; top: 60px; right:-150px">

    <form  action="{{url('/uploadfood')}}" method="post" enctype="multipart/from-data">
        @csrf
   
    <div>
        <label >Title</label>
        <input style="color:blue" type="text" name="title"title placeholder="write a title" required>
    </div>

    <div>
        <label >Price</label>
        <input style="color:blue" type="num" name="price" title placeholder="price" required>
    </div>

    <div>
        <label >Image</label>
        <input style="color:blue" type="file" name="image" required>
    </div>

    <div>
        <label >Description</label>
        <input style="color:blue" type="text" name="description" placeholder="description" required>
    </div>

    
    <div>
        <input style="color: white" type="submit" value='save'>
    </div>

    </form>
  </div> 



  </div>
  

  @include("admin.adminscript");
  </body>
</html>
<!-- new -->