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
          <form class="form-inline" action="{{url('/updatefoodchef',$data->id)}}" method="Post" enctype="multypart/formdata">
            @csrf
            <div  >
                <label for="">Chef Name</label>
                <input type="text"  name="name" value="{{$data->name}}" style="color:black" >
            </div>
            <div>
                <label for="">Speciality</label>
                <input type="text" name="speciality" value="{{$data->speciality}}" style="color:black">
            </div>
            <div>
                <label for=""> Current Image</label>
                <img src="/chefimage/{{$data->image}}" alt="" height="250" width="250">
            </div>
            <div>
                <label for=""> New Image</label>
                <input type="file" name="image">
            </div><br>
            <div>
                <input type="submit" name="update chef" >
            </div>
          </form>
    </div>
    @include("admin.adminscript")
  </body>
</html>