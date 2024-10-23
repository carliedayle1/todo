<x-layout>
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <h1 class="text-2xl font-semibold mb-4">Create Todo</h1>
        <div class="container p-4">
            <div class="max-w-sm space-y-3 mx-auto">
                <!-- Floating Input -->
                <div class="relative">
                  <input type="text" name="title" id="hs-floating-input-email" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600
                  focus:pt-6
                  focus:pb-2
                  [&:not(:placeholder-shown)]:pt-6
                  [&:not(:placeholder-shown)]:pb-2
                  autofill:pt-6
                  autofill:pb-2" placeholder="you@email.com">
                  <label for="hs-floating-input-email" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                    peer-focus:scale-90
                    peer-focus:translate-x-0.5
                    peer-focus:-translate-y-1.5
                    peer-focus:text-gray-500 dark:peer-focus:text-neutral-500
                    peer-[:not(:placeholder-shown)]:scale-90
                    peer-[:not(:placeholder-shown)]:translate-x-0.5
                    peer-[:not(:placeholder-shown)]:-translate-y-1.5
                    peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-500 dark:text-neutral-500">Title</label>
                </div>
                <!-- End Floating Input -->
                <!-- Floating Textarea -->
                <div class="relative">
                    <textarea id="hs-floating-textarea" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600
                    focus:pt-6
                    focus:pb-2
                    [&:not(:placeholder-shown)]:pt-6
                    [&:not(:placeholder-shown)]:pb-2
                    autofill:pt-6
                    autofill:pb-2" placeholder="This is a textarea placeholder"></textarea>
                    <label for="hs-floating-textarea" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                    peer-focus:text-xs
                    peer-focus:-translate-y-1.5
                    peer-focus:text-gray-500 dark:peer-focus:text-neutral-500
                    peer-[:not(:placeholder-shown)]:text-xs
                    peer-[:not(:placeholder-shown)]:-translate-y-1.5
                    peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-500 dark:text-neutral-500">Description</label>
                </div>
                <!-- End Floating Textarea -->
                <div class=" gap-x-6">
                    <p class="text-lg pb-2">Completed?</p>
                    <div class="grid sm:grid-cols-2 gap-2">
                        <label for="hs-radio-in-form" class="flex p-3 w-full bg-white border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                          <input type="radio" name="hs-radio-in-form" class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-radio-in-form" checked="">
                          <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Yes</span>
                        </label>
                      
                        <label for="hs-radio-checked-in-form" class="flex p-3 w-full bg-white border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                          <input type="radio" name="hs-radio-in-form" class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-radio-checked-in-form" >
                          <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">No</span>
                        </label>
                      </div>
                </div>
                <div class="flex items-center justify-center">
                    <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-teal-500 text-white hover:bg-teal-600 focus:outline-none focus:bg-teal-600 disabled:opacity-50 disabled:pointer-events-none">
                        Submit
                      </button>
        <h1 class="text-2xl font-semibold mb-4">Display Todo</h1>
 
        <div class="mt-6">
          <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
              <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                  <table class="min-w-full divide-y divide-gray-200 rounded- lg">
                    <thead>
                      <tr>
                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">ID</th>
                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Title</th>
                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Description</th>
                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Completed</th>
                        <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Action</th>
                      </tr>
                     </thead>
                    </tbody>
                    @foreach ($todos as $todo)
                    <tr class="odd:bg-white even:bg-gray-100">
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-700">{{ $todo->id}}</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-700">{{ $todo->title}}</td>
                      <td class="px-6 py-4 whitespace-normal text-sm text-gray-800 dark:text-neutral-700 break-words">{{ $todo->description}}</td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-700">{{ $todo->completed ? "Yes" : "No"}}</td>
                     <td class="px-6 py-4 text-end text-sm font-medium flex gap-x-4">
                      <a href="/todo/{{$todo->id}}" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-green-500 dark:hover:text-green-400 dark:focus:text-blue-400">Edit</a>
                       <form action="/todo/{{$todo->id}}" method="POST">   
                        @csrf
                        @method("DELETE")                  
                         <button type="submit" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Delete</button>
                       </form>  
                      </td>
                    </tr>
                    @endforeach
                  </table>
                </div>
              </div>
        </div>
            </div>
          </div>
         </div>
    </div>
</x-layout>