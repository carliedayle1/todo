<x-layout>
<x-slot:heading>
        Home
</x-slot:heading>
<h1>Home Page</h1>
<body>
<table class ="table-auto">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Completed</th>
        </tr>
    </thead>
    @foreach($todos as $todo)
    <tr>
        <td>{{ $todo->id}}</td>
        <td>{{ $todo->title}}</td>
        <td>{{ $todo->description}}</td>
        <td>{{ $todo->completed ? 'Yes' : 'No'}}</td>
    </tr>
    @endforeach
    </table>
  </body>
</x-layout>