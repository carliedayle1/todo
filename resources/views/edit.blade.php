<x-layout>
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <h1 class="text-2xl font-semibold mb-4 dark:text-white">Edit Todo</h1>
        
        <form action="{{ route('todos.update', $todo->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title', $todo->title) }}" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400">
                @error('title')
                    <span class="text-red-600 dark:text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Description</label>
                <textarea id="description" name="description" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400">{{ old('description', $todo->description) }}</textarea>
                @error('description')
                    <span class="text-red-600 dark:text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="completed" class="inline-flex items-center">
                    <input type="checkbox" id="completed" name="completed" {{ $todo->completed ? 'checked' : '' }} class="form-checkbox h-5 w-5 text-blue-600 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400">
                    <span class="ml-2 text-sm font-medium text-gray-700 dark:text-gray-300">Completed</span>
                </label>
            </div>

            <button type="submit" class="mt-4 px-4 py-2 text-sm font-semibold text-white bg-blue-600 rounded hover:bg-blue-700 focus:outline-none focus:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600">
                Update 
            </button>
        </form>
    </div>
</x-layout>
