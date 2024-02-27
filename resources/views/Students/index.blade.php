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
                    Laravel 10 CRUD
                </h2>
                <div>
                    <a href="{{ route('Students.create') }}" class="btn btn-success">Create Student</a>
                </div>
                <div class="row d-flex justify-content-center mt-2">
                    <div class="col-lg-8">
                        <table class="table table-striped">
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Grade</th>
                                <th width="250px">Action</th>
                            </tr>
                            @foreach ($Students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->age }}</td>
                                    <td>{{ $student->grade }}</td>
                                    <td>
                                        <form action="{{ route('Students.destroy', $student->id) }}" method="POST"
                                            class="d-flex justify-content-evenly">
                                            @csrf
                                            <a href="{{ route('Students.edit', $student->id) }}"
                                                class="btn btn-warning">
                                                edit
                                            </a>
                                            <div class="row">
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">delete</button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
