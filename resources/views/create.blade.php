<x-layout>
    <div class="bg-gray-50 dark:bg-gray-900 rounded-lg shadow-lg p-6">
        <h1 class="text-2xl font-semibold mb-4 text-gray-900 dark:text-white">Create Todo</h1>

        <form action="{{ route('todo.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Title</label>
                <input type="text" name="title" 
                    class="shadow-md appearance-none border border-gray-400 dark:border-gray-600 rounded w-full py-2 px-3 
                    text-gray-900 dark:text-gray-200 bg-white dark:bg-gray-800 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-300"
                    required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Description</label>
                <textarea name="description" 
                    class="shadow-md appearance-none border border-gray-400 dark:border-gray-600 rounded w-full py-2 px-3 
                    text-gray-900 dark:text-gray-200 bg-white dark:bg-gray-800 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-300"
                    required></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Completed</label>
                <select name="completed" 
                    class="shadow-md appearance-none border border-gray-400 dark:border-gray-600 rounded w-full py-2 px-3 
                    text-gray-900 dark:text-gray-200 bg-white dark:bg-gray-800 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-300">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="flex justify-center mt-4">
                <button class="bg-blue-600 dark:bg-blue-800 text-white font-bold py-2 px-4 rounded 
                        hover:bg-blue-700 dark:hover:bg-blue-900 
                        focus:outline-none focus:shadow-outline">
                    Create
                </button>
            </div>
        </form>
    </div>
</x-layout>