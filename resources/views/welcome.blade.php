<x-layout>
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <h1 class="text-2xl font-semibold mb-4">Todo List</h1>

        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Title</th>
                    <th class="py-2 px-4 border-b">Description</th>
                    <th class="py-2 px-4 border-b">Completed</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($todos as $todo)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $todo->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $todo->title }}</td>
                        <td class="py-2 px-4 border-b">{{ $todo->description }}</td>
                        <td class="py-2 px-4 border-b">{{ $todo->completed ? 'Yes' : 'No' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
