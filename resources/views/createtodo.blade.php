<x-layout>
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <h1 class="text-2xl font-semibold mb-4">Create Todo</h1>
        <form action="/todo/store" method="POST">
            @csrf
        <div class="container p-4">
            <div class="max-w-sm space-y-3 mx-auto">
                <!-- Floating Input -->
                <div class="relative">
                    <input type="text" name="title" id="hs-floating-input-title" 
                           class="peer p-4 block w-full border-gray-200 rounded-lg text-sm 
                                  placeholder:text-transparent focus:border-blue-500 
                                  focus:ring-blue-500 disabled:opacity-50 
                                  disabled:pointer-events-none dark:bg-neutral-900 
                                  dark:border-neutral-700 dark:text-neutral-400 
                                  dark:focus:ring-neutral-600
                                  focus:pt-6 focus:pb-2 
                                  [&:not(:placeholder-shown)]:pt-6 
                                  [&:not(:placeholder-shown)]:pb-2 
                                  autofill:pt-6 autofill:pb-2" 
                           placeholder="you@email.com" required>
                    <label for="hs-floating-input-title" 
                           class="absolute top-0 start-0 p-4 h-full text-sm truncate 
                                  pointer-events-none transition ease-in-out duration-100 
                                  border border-transparent dark:text-white 
                                  peer-disabled:opacity-50 peer-disabled:pointer-events-none 
                                  peer-focus:scale-90 peer-focus:translate-x-0.5 
                                  peer-focus:-translate-y-1.5 peer-focus:text-gray-500 
                                  dark:peer-focus:text-neutral-500 
                                  peer-[:not(:placeholder-shown)]:scale-90 
                                  peer-[:not(:placeholder-shown)]:translate-x-0.5 
                                  peer-[:not(:placeholder-shown)]:-translate-y-1.5 
                                  peer-[:not(:placeholder-shown)]:text-gray-500 
                                  dark:peer-[:not(:placeholder-shown)]:text-neutral-500 
                                  dark:text-neutral-500">Title</label>
                </div>
                <!-- End Floating Input -->

                <!-- Floating Textarea -->
                <div class="relative">
                    <textarea id="hs-floating-textarea"
                              name = "description"
                              class="peer p-4 block w-full border-gray-200 rounded-lg text-sm 
                                     placeholder:text-transparent focus:border-blue-500 
                                     focus:ring-blue-500 disabled:opacity-50 
                                     disabled:pointer-events-none dark:bg-neutral-900 
                                     dark:border-neutral-700 dark:text-neutral-400 
                                     dark:focus:ring-neutral-600
                                     focus:pt-6 focus:pb-2 
                                     [&:not(:placeholder-shown)]:pt-6 
                                     [&:not(:placeholder-shown)]:pb-2 
                                     autofill:pt-6 autofill:pb-2" 
                              placeholder="This is a textarea placeholder"></textarea>
                    <label for="hs-floating-textarea" 
                           class="absolute top-0 start-0 p-4 h-full text-sm truncate 
                                  pointer-events-none transition ease-in-out duration-100 
                                  border border-transparent dark:text-white 
                                  peer-disabled:opacity-50 peer-disabled:pointer-events-none 
                                  peer-focus:text-xs peer-focus:-translate-y-1.5 
                                  peer-focus:text-gray-500 dark:peer-focus:text-neutral-500 
                                  peer-[:not(:placeholder-shown)]:text-xs 
                                  peer-[:not(:placeholder-shown)]:-translate-y-1.5 
                                  peer-[:not(:placeholder-shown)]:text-gray-500 
                                  dark:peer-[:not(:placeholder-shown)]:text-neutral-500 
                                  dark:text-neutral-500">Description</label>
                </div>
                <!-- End Floating Textarea -->

                <!-- Floating Select -->
                <div class="relative">
                    <p class="text-lg pb-2">Completed?</p>
                    <select name="completed" class="peer p-2 pe-9 block w-full border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600
                      focus:pt-2
                      focus:pb-2">
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                  </div>
                <!--Submit-->
                <div class="flex items-center justify-center">
                    <button type="submit" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium 
                                                rounded-lg border border-transparent bg-teal-500 
                                                text-white hover:bg-teal-600 focus:outline-none 
                                                focus:bg-teal-600 disabled:opacity-50 
                                                disabled:pointer-events-none">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-layout>
