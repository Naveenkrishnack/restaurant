<x-app-layout>
    
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
   @include("admin.admincss")
  </head>
  <body>  
    <div class="container-scroller"> 
        @include("admin.navbar")
        <div >
            <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data" >

            @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input style="color:white" type="text" class="form-control" name="title" placeholder="Write a title" require>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input  style="color:white" type="num" class="form-control" name="price" placeholder="price" require>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control"  name="image" require>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input  style="color:white" type="text" class="form-control" name="description" placeholder="description" require>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="save">
                </div>
            </form>


            <div>
                <table class="table">
                
                    <tr >
                        <th>Food Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                        <th>Action 2</th>
                    </tr>
                   @foreach($data as $data) 
                    <tr >
                        <td>{{$data->title}}</td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->description}}</td>
                        <td><img src="/foodimage/{{$data->image}}" ></td>
                        <td><a href="{{url('/deletemenu',$data->id)}}">DELETE</a></td>
                        <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>

                    </tr>
                    @endforeach
                </table>

            </div>


        </div>

    </div>
    @include("admin.adminscript")
    
  </body>
</html>