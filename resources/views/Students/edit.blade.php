<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="mt-2 text-center">
                    Create Student
                </h2>
                <div>
                    <a href="{{ route('Students.index') }}" class="btn btn-success">Back</a>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <form class="row g-3 mt-2" action="{{ route('Students.update', $Student->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="col-auto">
                                <label for="name" class="visually-hidden">name</label>
                                <input type="text" class="form-control" name="name" placeholder="name"
                                    value="{{ $Student->name }}">
                            </div>
                            <div class="col-auto">
                                <label for="Age" class="visually-hidden">Age</label>
                                <input type="text" class="form-control" name="age" placeholder="Age"
                                    value="{{ $Student->age }}">
                            </div>
                            <div class="col-auto">
                                <label for="Grade" class="visually-hidden">Grade</label>
                                <input type="text" class="form-control" name="grade" placeholder="Grade"
                                    value="{{ $Student->grade }}">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mb-3">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
