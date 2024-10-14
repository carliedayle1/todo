<x-layout>
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <h1 class="text-2xl font-semibold mb-4">Create Todo</h1>

        <div class="container p-4">
            <div class="max-w-sm space-y-3 mx-auto">
                <!-- Form Starts -->
                <form action="{{ route('todos.store') }}" method="POST">
                    @csrf <!-- CSRF Token for security -->

                    <!-- Floating Input -->
                    <div class="relative">
                      <input type="text" name="title" id="title" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm" placeholder="Title" required>
                      <label for="title" class="absolute top-0 start-0 p-4 h-full text-sm truncate">Title</label>
                    </div>
                    <!-- End Floating Input -->

                    <!-- Floating Textarea -->
                    <div class="relative">
                        <textarea name="description" id="description" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm" placeholder="Description" required></textarea>
                        <label for="description" class="absolute top-0 start-0 p-4 h-full text-sm truncate">Description</label>
                    </div>
                    <!-- End Floating Textarea -->

                    <!-- Completed Radio -->
                    <div class="gap-x-6">
                        <p class="text-lg pb-2">Completed?</p>
                        <div class="grid sm:grid-cols-2 gap-2">
                            <label class="flex p-3 w-full bg-white border rounded-lg text-sm">
                                <input type="radio" name="completed" value="1" class="shrink-0 mt-0.5" checked>
                                <span class="text-sm text-gray-500 ms-3">Yes</span>
                            </label>

                            <label class="flex p-3 w-full bg-white border rounded-lg text-sm">
                                <input type="radio" name="completed" value="0" class="shrink-0 mt-0.5">
                                <span class="text-sm text-gray-500 ms-3">No</span>
                            </label>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex items-center justify-center">
                        <button type="submit" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-teal-500 text-white hover:bg-teal-600">
                            Submit
                        </button>
                    </div>
                </form>
                <!-- Form Ends -->
            </div>
        </div>
    </div>
</x-layout>
