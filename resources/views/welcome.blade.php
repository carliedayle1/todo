<x-layout>
<div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
  <div class="overflow-x-auto mt-4">
      <table class="min-w-full border-collapse border border-gray-200">
          <thead>
              <tr class="bg-gray-100">
                  <th class="border border-gray-300 px-4 py-2 text-left">ID</th>
                  <th class="border border-gray-300 px-4 py-2 text-left">Title</th>
                  <th class="border border-gray-300 px-4 py-2 text-left">Description</th>
                  <th class="border border-gray-300 px-4 py-2 text-left">Completed</th>
                  <th class="border border-gray-300 px-4 py-2 text-left">Action</th>

              </tr>
          </thead>
          <tbody>
              @foreach($todos as $todo)
                  <tr class="hover:bg-gray-100">
                      <td class="border border-gray-300 px-4 py-2">{{ $todo->id }}</td>
                      <td class="border border-gray-300 px-4 py-2">{{ $todo->title }}</td>
                      <td class="border border-gray-300 px-4 py-2">{{ $todo->description }}</td>
                      <td class="border border-gray-300 px-4 py-2">{{ $todo->completed}}</td>
                      <td class="border border-gray-300 px-4 py-2">
                        <a href="/todo/{{$todo->id}}" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent 
                            text-green-600 hover:text-green-800 focus:outline-none focus:text-green-800 disabled:opacity-50 disabled:pointer-events-none 
                            dark:text-green-500 dark:hover:text-green-400 dark:focus:text-green-400">Edit</a>
                        <form action="/todo/{{$todo->id}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this todo?');">
                        @csrf
                        @method("DELETE")
                            <button type="submit" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent 
                            text-red-600 hover:text-red-800 focus:outline-none focus:text-red-800 disabled:opacity-50 disabled:pointer-events-none 
                            dark:text-red-500 dark:hover:text-red-400 dark:focus:text-red-400">Delete</button>
                        </form>

                  </tr>
              @endforeach
          </tbody>
      </table>
  </div>
</div>
</x-layout>