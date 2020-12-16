<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    #cssTable {
      text-align: center;
      vertical-align: middle;
    }
  </style>
</head>

<body>

</body>

</html>

<div class="card mb-3">
  <img src="https://previews.123rf.com/images/tigatelu/tigatelu1502/tigatelu150200122/36777912-two-happy-students-cartoon-standing-in-front-of-school-building.jpg" style="height: 350px;" class="card-img-top " alt="...">
  <div class="card-body">
    <h5 class="card-title">List of student</h5>
    <p class="card-text">You can find all the infomation about student</p>

    <table class="table" id="cssTable">
      <thead class="table-light">
        <tr>
          <th> <input type="checkbox" id="chkCheckAll"/></th>
          <th scope="col">Avt</th>
          <th scope="col">CNE</th>
          <th scope="col">FirstName</th>
          <th scope="col">LastName</th>
          <th scope="col">Age</th>
          <th scope="col">Address</th>
        </tr>
      </thead>
      <tbody>
        @foreach($students as $student)
        <tr>
          <td><img src="{{asset('images/'.$student->image)}}" class="rounded-circle" width="50px" , height="50px"></td>
          <!-- <td>{{$student->image}}</td> -->
          <td>{{$student->cne}}</td>
          <td>{{$student->firstName}}</td>
          <td>{{$student->lastName}}</td>
          <td>{{$student->age}}</td>
          <td>{{$student->address}}</td>
          <td>
            <a href="{{url('/show/'.$student->id)}}" class="btn btn-sm btn-info">Show</a>
            <a href="{{url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning">Edit</a>
            <a href="{{url('/delete/'.$student->id)}}" class="btn btn-sm btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
    {{$students->links()}}
  </div>
</div>