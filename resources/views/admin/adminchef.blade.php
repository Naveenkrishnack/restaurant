<x-app-layout>    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
   @include("admin.admincss")
  </head>
  <body><br><br>
    <div class="container-scroller" >
          @include("admin.navbar")
          <form action="{{url('uploadchef')}}"  method="post"  enctype="multipart/form-data" >
            @csrf
            <div class="form-group" >
                <label>Name of Chef</label>
                <input type="text" name="name" class="form-control" style="color:white" placeholder="Enter name" required>   
            </div>
            <div class="form-group">
                <label>Speciality</label>
                <input type="text" name="speciality" class="form-control" style="color:white" placeholder=" Enter specialization" required>   
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" name="image" class="form-control" style="color:white" required>   
            </div>
            <div >
                <input type="submit"  class="btn btn-primary" value="save">
            </div>
          </form>
          <div >
          <table class="table">
                <tr style="color:white">
                    <th>Chef Name</th>
                    <th>Speciality</th>
                    <th>Image</th>
                    <th>Action</th>
                    <th>Action 2</th>
                </tr>
                @foreach($data as $data) 
                <tr >
                    <td>{{$data->name}}</td>
                    <td>{{$data->speciality}}</td>
                    <td><img src="/chefimage/{{$data->image}}" ></td>
                    <!-- <td><a href="{{url('/deletemenu',$data->id)}}">DELETE</a></td> -->
                    <td><a href="{{url('/updatechef',$data->id)}}">UPDATE</a></td>
                </tr>
                @endforeach                
            </table>
          </div>          
         </div>
    @include("admin.adminscript")
  </body>
</html>