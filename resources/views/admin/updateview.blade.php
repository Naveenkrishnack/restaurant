<x-app-layout>
    
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
   @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
            @include("admin.navbar")
            <div >
                <form  action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data" >

                @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input style="color:white" type="text" class="form-control" name="title" value="{{$data->title}}" require>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input  style="color:white" type="num" class="form-control" name="price" value="{{$data->price}}" require>
                    </div>
                    
                    <div class="form-group">
                        <label>Description</label>
                        <input  style="color:white" type="text" class="form-control" name="description" value="{{$data->description}}" require>
                    </div>
                    <div class="form-group">
                        <label>Previous Image</label>
                        <img src="/foodimage/{{$data->image}}" >
                    </div>
                    <div class="form-group">
                        <label>New Image</label>
                        <input type="file" class="form-control" name="image" require>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="save">
                    </div>
                </form>
          </div>
    </div>
    @include("admin.adminscript")
  </body>
</html>