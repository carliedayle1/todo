<x-layout>
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <h1 class="text-2xl font-semibold mb-4 dark:text-white">Display Todo</h1>

        <div class="mt-6">
            <div class="flex flex-col">
                <div class="overflow-x-auto">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden">
                            <table class="w-full table-auto divide-y divide-gray-200 dark:divide-neutral-700">
                                <thead>
                                    <tr>
                                        <th scope="col" class="w-1/12 px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">ID</th>
                                        <th scope="col" class="w-3/12 px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Title</th>
                                        <th scope="col" class="w-4/12 px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Description</th>
                                        <th scope="col" class="w-2/12 px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Completed</th>
                                        <th scope="col" class="w-2/12 px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                    @foreach($todos as $todo)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">{{ $todo->id }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{ $todo->title }}</td>
                                        <td class="px-6 py-4 whitespace-normal break-words text-sm text-gray-800 dark:text-neutral-200">{{ $todo->description }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{ $todo->completed ? "Yes" : "No" }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <a href="{{ route('todo.update', $todo->id) }}" class="inline-flex items-center gap-x-2 text-sm font-semibold text-blue-600 hover:text-blue-800 dark:text-blue-500 dark:hover:text-blue-400">Edit</a>
                                            <form action="{{ route('todo.destroy', $todo->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this todo?');">
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

        <!-- Pagination -->
        <div class="flex justify-center mt-4">
            <div class="flex items-center space-x-2">
                {{-- Previous Page Link --}}
                @if ($todos->onFirstPage())
                <span class="text-gray-500 text-[30px]">«</span>
                @else
                <a href="{{ $todos->previousPageUrl() }}" class="text-green-900 hover:underline text-[30px]">«</a>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($todos->getUrlRange(1, $todos->lastPage()) as $page => $url)
                @if ($page == $todos->currentPage())
                <span class="text-green-400 font-semibold text-[20px]">{{ $page }}</span>
                @else
                <a href="{{ $url }}" class="text-green-600 hover:underline text-[20px]">{{ $page }}</a>
                @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($todos->hasMorePages())
                <a href="{{ $todos->nextPageUrl() }}" class="text-green-900 hover:underline text-[30px]">»</a>
                @else
                <span class="text-gray-500 text-[30px]">»</span>
                @endif
            </div>
        </div>
        <!--End Pagination -->
    </div>
</x-layout>