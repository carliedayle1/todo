<x-layout>
  <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <h1 class="text-2xl font-semibold mb-4">Create Todo</h1>
    <form action="/todo/store" method="POST">
      @csrf
      <div class="max-w-sm space-y-5">
        <!-- Floating Input -->
        <div class="relative mb-5">
          <input type="text" name="title" id="hs-floating-input-email" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600
            focus:pt-6
            focus:pb-2
            [:not(:placeholder-shown)]:pt-6
            :not(:placeholder-shown)]:pb-2
            autofill:pt-6
            autofill:pb-2" placeholder="Title here"
            value="{{ old('title') }}"
            >
          <label for="hs-floating-input-email"
            class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
            peer-focus:scale-90
            peer-focus:translate-x-0.5
            peer-focus:-translate-y-1.5
            peer-focus:text-gray-500 dark:peer-focus:text-neutral-500
            peer-[:not(:placeholder-shown)]:scale-90
            peer-[:not(:placeholder-shown)]:translate-x-0.5
            peer-[:not(:placeholder-shown)]:-translate-y-1.5
            peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-500 dark:text-neutral-500">Title</label>
        
            @error('title')
      <p class="text-red-500 text-sm">
          {{ $message }}
      </p>
      @enderror
        
          </div>
      </div>
      <div class="max-w-sm space-y-5">
        <!-- Floating Textarea -->
        <div class="relative">
          <textarea id="hs-floating-textarea" name="description" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600
    focus:pt-6
    focus:pb-2
    [:not(:placeholder-shown)]:pt-6
    [:not(:placeholder-shown)]:pb-2
    autofill:pt-6
    autofill:pb-2" placeholder="This is a textarea placeholder">{{ old('description') }}</textarea>
          <label for="hs-floating-textarea"
            class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
      peer-focus:text-xs
      peer-focus:-translate-y-1.5
      peer-focus:text-gray-500 dark:peer-focus:text-neutral-500
      peer-[:not(:placeholder-shown)]:text-xs
      peer-[:not(:placeholder-shown)]:-translate-y-1.5
      peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-500 dark:text-neutral-500">Description</label>
      @error('title')
      <p class="text-red-500 text-sm">
          {{ $message }}
      </p>
      @enderror
        </div>

        <!-- Floating Select -->
<div class="relative">
  <select name="completed" class="peer p-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600
  focus:pt-6
  focus:pb-2
  [&:not(:placeholder-shown)]:pt-6
  [&:not(:placeholder-shown)]:pb-2
  autofill:pt-6
  autofill:pb-2">
    <option>Yes</option>
    <option>No</option>
  </select>
  <label class="absolute top-0 start-0 p-4 h-full truncate pointer-events-none transition ease-in-out duration-100 border border-transparent dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
    peer-focus:text-xs
    peer-focus:-translate-y-1.5
    peer-focus:text-gray-500 dark:peer-focus:text-neutral-500
    peer-[:not(:placeholder-shown)]:text-xs
    peer-[:not(:placeholder-shown)]:-translate-y-1.5
    peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-500 dark:text-neutral-500">Completed</label>
</div>
<!-- End Floating Select -->
</div>
        <!-- 
        <br>
        <p class="text-sm"> Completed? </p>
        <br>
        <div class="grid sm:grid-cols-2 gap-2">
          <label for="hs-radio-in-form"
            class="flex p-3 w-full bg-white border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
            <input type="radio" name="completed"
              class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
              id="hs-radio-in-form">
            <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Yes</span>
          </label>
          <label for="hs-radio-checked-in-form"
            class="flex p-3 w-full bg-white border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
            <input type="radio" name="completed"
              class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
              id="hs-radio-checked-in-form" checked="">
            <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">No</span>
          </label>
        </div> --> 

        <!-- 
        <br> 
        <button type="submit"
          class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-teal-500 text-white hover:bg-teal-600 focus:outline-none focus:bg-teal-600 disabled:opacity-50 disabled:pointer-events-none">
          Submit
        </button> -->

        <button type="submit" class="mt-[20px] py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-teal-500 text-white hover:bg-teal-600 focus:outline-none focus:bg-teal-600 disabled:opacity-50 disabled:pointer-events-none">
  Submit
</button>
      </div>
  </div>
</x-layout>