<x-layout>
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 max-w-lg mx-auto">
        <h1 class="text-3xl font-bold mb-4 text-gray-900 dark:text-white">Create Todo</h1>

        <div class="container p-4">
            <div class="max-w-sm space-y-4 mx-auto">
                <!-- Floating Input -->
                <div class="relative">
                    <input type="text" name="title" id="hs-floating-input-title" class="peer p-4 block w-full border-gray-300 rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600
                    focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2" placeholder="Todo Title" required>
                    <label for="hs-floating-input-title" class="absolute top-0 left-3 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 dark:text-white peer-focus:scale-90 peer-focus:-translate-y-1.5 peer-[:not(:placeholder-shown)]:scale-90 peer-[:not(:placeholder-shown)]:-translate-y-1.5">Title</label>
                </div>
                <!-- End Floating Input -->

                <!-- Floating Textarea -->
                <div class="relative">
                    <textarea id="hs-floating-textarea" name="description" class="peer p-4 block w-full border-gray-300 rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600
                    focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2" placeholder="Description" required></textarea>
                    <label for="hs-floating-textarea" class="absolute top-0 left-3 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 dark:text-white peer-focus:scale-90 peer-focus:-translate-y-1.5 peer-[:not(:placeholder-shown)]:scale-90 peer-[:not(:placeholder-shown)]:-translate-y-1.5">Description</label>
                </div>
                <!-- End Floating Textarea -->

                <div class="gap-x-6">
                    <p class="text-lg pb-2">Completed?</p>
                    <div class="grid sm:grid-cols-2 gap-2">
                        <label for="hs-radio-yes" class="flex p-3 w-full bg-white border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                            <input type="radio" name="completed" id="hs-radio-yes" class="shrink-0 mt-0.5 border-gray-300 rounded-full text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500" checked>
                            <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Yes</span>
                        </label>
                        <label for="hs-radio-no" class="flex p-3 w-full bg-white border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                            <input type="radio" name="completed" id="hs-radio-no" class="shrink-0 mt-0.5 border-gray-300 rounded-full text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500">
                            <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">No</span>
                        </label>
                    </div>
                </div>

                <div class="flex items-center justify-center">
                    <button type="submit" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-teal-500 text-white hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-offset-gray-800">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-layout>

