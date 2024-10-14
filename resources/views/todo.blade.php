<x-layout>
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <h1 class="text-2xl font-semibold mb-4">Todo Page</h1>
        <!-- Include the Todo table component with data -->
        @include('components.todo-table', ['todos' => $todos])
    </div>
</x-layout>