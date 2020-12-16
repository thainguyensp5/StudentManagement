<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Student Management</title>
</head>

<body>
    @include("naver")

    <div class="row justify-content-center mt-2 ">
            <h1 style="text-align: center; color: red; font-family: 'Lucida Casual', 'Comic Sans MS';">Student Management System</h1>
    </div>
    
    @if($layout == 'index')
    <div class="container-fluid mt-2">
        <div class="row justify-content-center">
            
            <section class="col-md-7">
                @include("studentList")
            </section>
        </div>
    </div>

    @elseif($layout == 'create')

    <div class="container-fluid">
        <div class="row">
            <section class="col">
                @include("studentList")
            </section>
            <section class="col">
                <div class="card mb-3">
                    <img src="https://img3.stockfresh.com/files/b/bluering/m/85/8833387_stock-vector-school-band-marching-in-front-of-school.jpg" style="height: 350px;" class="card-img-top " alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Create student</h5>
                        <p class="card-text">You can create the infomation about student</p>

                        <form action="/store" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Avt</label>
                                <input name="image" type="file" class="form-control" placeholder="Upload photos">
                            </div>
                            <div class="form-group">
                                <label class="form-label">CNE</label>
                                <input name="cne" type="text" class="form-control" placeholder="Enter cne">
                            </div>
                            <div class="form-group">
                                <label class="form-label">First Name</label>
                                <input name="firstName" type="text" class="form-control" placeholder="Enter first name">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Last Name</label>
                                <input name="lastName" type="text" class="form-control" placeholder="Enter last name">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Age</label>
                                <input name="age" type="text" class="form-control" placeholder="Enter age">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Address</label>
                                <input name="address" type="text" class="form-control" placeholder="Enter address">
                            </div>
                            <div class="pt-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="reset" class="btn btn-warning">Reset</button>
                                <a href="/" class="btn btn-info">Back To Home</a>
                            </div>
                        </form>
                    </div>
            </section>
        </div>
    </div>


    @elseif($layout == 'show')
    <div class="container-fluid">
        <div class="row">
            <section class="col">
                @include("studentList")
            </section>
            <section class="col">
                @include("show")
            </section>
        </div>
    </div>


    @elseif($layout == 'edit')
    <div class="container-fluid">
        <div class="row">
            <section class="col">
                @include("studentList")
            </section>
            <section class="col">
                <div class="card mb-3">
                    <img src="https://img3.stockfresh.com/files/b/bluering/m/85/8833387_stock-vector-school-band-marching-in-front-of-school.jpg" style="height: 350px;" class="card-img-top " alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Edit of student</h5>
                        <p class="card-text">You can update infomation about student</p>

                        <form action="/update/{{$student->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Avt</label>
                                <input  name="image" type="file" class="form-control" onchange="previewFile(this)"/>
                                <img id="previewFile" src="{{asset('images/'.$student->image)}}"class="rounded-circle" width="80px", height="80px">
                            </div>
                            <div class="form-group">
                                <label class="form-label">CNE</label>
                                <input  value="{{$student->cne}}" name="cne" type="text" class="form-control" placeholder="Enter cne">
                            </div>
                            <div class="form-group">
                                <label class="form-label">First Name</label>
                                <input value="{{$student->firstName}}" name="firstName" type="text" class="form-control" placeholder="Enter first name">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Last Name</label>
                                <input value="{{$student->lastName}}" name="lastName" type="text" class="form-control" placeholder="Enter last name">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Age</label>
                                <input value="{{$student->age}}" name="age" type="text" class="form-control" placeholder="Enter age">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Address</label>
                                <input value="{{$student->address}}" name="address" type="text" class="form-control" placeholder="Enter address">
                            </div>
                            <div class="pt-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <button type="reset" class="btn btn-warning">Reset</button>
                            </div>
                        </form>
                    </div>
            </section>
        </div>
    </div>


    @endif

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>