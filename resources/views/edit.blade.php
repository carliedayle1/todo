<x-layout>
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <h1 class="text-2xl font-semibold mb-4">Edit Todo</h1>
        <form action="{{ route('todo.update', $todo->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="max-w-sm space-y-5">
                <!-- Input for title -->
                <div class="relative mb-5">
                    <input type="text" name="title" value="{{ old('title', $todo->title) }}" id="title" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm" required>
                    <label for="title">Title</label>
                    @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Textarea for description -->
                <div class="relative">
                    <textarea id="description" name="description" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm" required>{{ old('description', $todo->description) }}</textarea>
                    <label for="description">Description</label>
                    @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Dropdown for completed status -->
                <div class="relative">
                    <select name="completed" id="completed" class="w-full p-4 border-gray-200 rounded-lg text-sm" required>
                        <option value="0" {{ old('completed', $todo->completed) == 0 ? 'selected' : '' }}>No</option>
                        <option value="1" {{ old('completed', $todo->completed) == 1 ? 'selected' : '' }}>Yes</option>
                    </select>
                    @error('completed')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-teal-500 text-white hover:bg-teal-600">
                    Update
                </button>
            </div>
        </form>
    </div>
</x-layout>