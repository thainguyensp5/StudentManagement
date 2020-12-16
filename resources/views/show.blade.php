<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <div class="card text-dark bg-info mb-5" style="max-width: 540px; max-height:220px">
        <div class="row mb-3">
            <div class="col-md-5">
                <img class="card-img-top" src="{{asset('images/'.$student->image)}}" class="rounded-circle" width="220px" , height="218px"></td>
            </div>
            <div class="col-md-5">
                <div class="card-body">
                    <p class="card-text"><strong>CNE: </strong> {{$student->cne}}</p>
                    <p class="card-text"><strong>First Name: </strong> {{$student->firstName}}</p>
                    <p class="card-text"><strong>Last Name: </strong> {{$student->lastName}}</p>
                    <p class="card-text"><strong>Age: </strong> {{$student->age}}</p>
                    <a href="/" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>