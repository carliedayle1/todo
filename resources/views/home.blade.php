<x-layout>
<x-slot:heading>
        Home
    </x-slot:heading>
<h1>Hello from Home page</h1>

<table class ="table-auto">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Completed</th>
        </tr>
    </thead>
    <body>
    @foreach($todos as $todo)
    <tr>
        <td>{{ $todo->id }}</td>
        <td>{{ $todo->title}}</td>
        <td>{{$todo->description}}</td>
        <td>{{ $todo->completed ? 'Yes' : 'No'}}</td>
    </tr>
    @endforeach
    </body>
</x-layout>