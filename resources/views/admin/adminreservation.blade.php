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



          <div>
            <table class="table" style="color:white">
                <tr >
                    <th>Name</th>
                    <th>Email</th>
                    <th>phone</th>
                    <th>No: of Guest</th>
                    <th>date</th>
                    <th>time</th>
                    <th>Message</th>
                </tr>
                @foreach($data as $data)
                <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->guest}}</td>
                    <td>{{$data->date}}</td>
                    <td>{{$data->time}}</td>
                    <td>{{$data->message}}</td>
                </tr>
                @endforeach
            </table>
          </div>
    </div>
    @include("admin.adminscript")
  </body>
</html>