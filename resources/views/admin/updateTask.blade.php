<x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
      label{

        display: inline-block;
        width: 200px;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
         <div class="container-fluid page-body-wrapper">
            <div class="container " align="center" style="padding-top: 80px" >



              @if(session()->has('message'))

                <div class="alert alert-success alert-dismissible">
              		<a href="{{url('/showAdTask')}}" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              		<strong>Success!</strong> {{session()->get('message')}}
          		</div>

              @endif
              <form action="{{url('editAdTask',$upData->id)}}" method="POST">
                @csrf
                <div style="padding-top: 20px" >
                  <label>Task Name :</label>
                  <input style="color:black" type="text" name="name" value="{{$upData->name}}" placeholder="Write The Task Name" required="">
                </div>
                <div style="padding-top: 20px" >
                  <label>Task Description :</label>
                  <input style="color:black" type="text" name="desc" value="{{$upData->desc}}"  placeholder="Write The Task Description" required="">
                </div>
                <div style="padding-top: 20px " >
                  <input type="submit" class="btn btn-dark"value="Submit" required="">
                </div>
                
              </form>
            </div>
          </div>
        </div>
  </body>
</html>
</x-app-layout>