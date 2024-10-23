<x-layout>
    <x-slot:heading>
        Welcome
    </x-slot>
 <h1>Welcome Page</h1>
 
 <table class="table-auto">
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Description</th>
      <th>Completed</th>
    </tr>
  </thead>
  <tbody>
    @foreach($todos as $todo)
    <tr>
      <td>{{ $todo->id }}</td>
      <td>{{ $todo->title }}</td>
      <td>{{ $todo->description }}</td>
      <td>{{ $todo->completed ? 'Yes' : 'No' }}</td>
    </tr>
   @endforeach
  </tbody>
</table>
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <h1 class="text-2xl font-semibold mb-4">Welcome</h1>
    </div>
</x-layout>