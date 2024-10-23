<x-layout>
    <div class="bg-gray-50 dark:bg-gray-900 rounded-lg shadow p-6">
        <h1 class="text-2xl font-semibold mb-4 dark:text-white">Display Todos</h1>
        
        <div class="mt-6">
            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-600 uppercase dark:text-neutral-400">ID</th>
                                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-600 uppercase dark:text-neutral-400">Title</th>
                                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-600 uppercase dark:text-neutral-400">Description</th>
                                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-600 uppercase dark:text-neutral-400">Completed</th>
                                        <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-600 uppercase dark:text-neutral-400">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                    @foreach($todos as $todo)
                                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-800">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">{{ $todo->id }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{ $todo->title }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{ $todo->description }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{ $todo->completed ? "Yes" : "No" }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                <form action="{{ route('todos.delete', $todo->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this todo?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:text-red-800 focus:outline-none focus:text-red-800 disabled:opacity-50 disabled:pointer-events-none dark:text-red-500 dark:hover:text-red-400 dark:focus:text-red-400">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>