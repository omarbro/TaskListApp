<x-app-layout>
	<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>AllUserTasks</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>
	<div align="center"style="margin: 5rem;margin-right: 5rem;position: relative;">
 <table class="table .table-md table-hover table-dark table-bordered"  >
  <thead>
    <tr>
      <th scope="col">User's Task Name</th>
      <th scope="col">Task Description</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($data as $task)
    <tr>
      <td>{{$task->name}}</td>
      <td>{{$task->desc}}</td>
      <td><a class="btn btn-primary" onclick="return confirm('Are you sure to Update?')" href="{{url('upUserTaskV',$task->id)}}"  >Edit</a></td>
      <td><a class="btn btn-danger" onclick="return confirm('Are you sure to Delete?')" href="{{url('deleteTask',$task->id)}}"  >Delete</a></td>
    @endforeach
  </tbody>
</table>
</div>
<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>


</x-app-layout>