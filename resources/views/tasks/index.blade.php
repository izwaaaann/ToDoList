<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    

    <!-- Roboto Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            background-image: url('/images/wallpaper4.jpg'); 
            background-size: 2500px;
            background-position: center;
            background-repeat: no-repeat;
            font-family: 'Roboto', sans-serif;
            zoom: 90%;
        }

        .container {
            margin-top: 50px;
            background-color: white;
            padding: 20px;
            padding-top: 1px;
            border-radius: 10px;
           
        }

        .btn-custom {
            margin-bottom: 10px;
        }

        
       
    </style>
</head>
@vite(['resources/css/app.css', 'resources/js/app.js'])
@include('layouts.navigation')

    <div class="container pt-10 bg-transparent">
        
        

        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-3" role="alert">
                {{ $message }}
            </div>
        @endif

        <table class="table bg-white mt-3">
            <thead class="table-dark">
                <tr>
                    <th>Bil</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->start_date }}</td>
                        <td>{{ $task->end_date }}</td>
                        <td>
                            <a class="btn btn-secondary btn-sm" href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">No tasks found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="flex justify-center">
    <a class="btn btn-primary btn-custom" href="{{ route('tasks.create') }}">Add New Task</a>
</div>


    </div>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
