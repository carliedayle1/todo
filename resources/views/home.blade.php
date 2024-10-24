<x-layout>
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <h1 class="text-2xl font-semibold mb-4">Create Todo</h1>
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
              <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="border rounded-lg divide-y divide-gray-200 dark:border-gray-700 dark:divide-gray-700">
                  <div class="py-3 px-4">
                    <div class="relative max-w-xs">
                      <label class="sr-only">Search</label>
                      <input type="text" name="hs-table-with-pagination-search" id="hs-table-with-pagination-search" class="py-2 px-3 ps-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Search for items">
                      <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
                        <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                      </div>
                    </div>
                  </div>
                  <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                      <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                          <th scope="col" class="py-3 px-4 pe-0">
                            <div class="flex items-center h-5">
                              <input id="hs-table-pagination-checkbox-all" type="checkbox" class="border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                              <label for="hs-table-pagination-checkbox-all" class="sr-only">Checkbox</label>
                            </div>
                          </th>
                          <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Name</th>
                          <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Age</th>
                          <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Address</th>
                          <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                        </tr>
                      </thead>
                      <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        <tr>
                          <td class="py-3 ps-4">
                            <div class="flex items-center h-5">
                              <input id="hs-table-pagination-checkbox-1" type="checkbox" class="border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                              <label for="hs-table-pagination-checkbox-1" class="sr-only">Checkbox</label>
                            </div>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">John Brown</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">45</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">New York No. 1 Lake Park</td>
                          <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                            <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Delete</button>
                          </td>
                        </tr>
          
                        <tr>
                          <td class="py-3 ps-4">
                            <div class="flex items-center h-5">
                              <input id="hs-table-pagination-checkbox-2" type="checkbox" class="border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                              <label for="hs-table-pagination-checkbox-2" class="sr-only">Checkbox</label>
                            </div>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Jim Green</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">27</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">London No. 1 Lake Park</td>
                          <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                            <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Delete</button>
                          </td>
                        </tr>
          
                        <tr>
                          <td class="py-3 ps-4">
                            <div class="flex items-center h-5">
                              <input id="hs-table-pagination-checkbox-3" type="checkbox" class="border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                              <label for="hs-table-pagination-checkbox-3" class="sr-only">Checkbox</label>
                            </div>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Joe Black</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">31</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Sidney No. 1 Lake Park</td>
                          <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                            <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Delete</button>
                          </td>
                        </tr>
          
                        <tr>
                          <td class="py-3 ps-4">
                            <div class="flex items-center h-5">
                              <input id="hs-table-pagination-checkbox-4" type="checkbox" class="border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                              <label for="hs-table-pagination-checkbox-4" class="sr-only">Checkbox</label>
                            </div>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Edward King</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">16</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">LA No. 1 Lake Park</td>
                          <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                            <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Delete</button>
                          </td>
                        </tr>
          
                        <tr>
                          <td class="py-3 ps-4">
                            <div class="flex items-center h-5">
                              <input id="hs-table-pagination-checkbox-5" type="checkbox" class="border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                              <label for="hs-table-pagination-checkbox-5" class="sr-only">Checkbox</label>
                            </div>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Jim Red</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">45</td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Melbourne No. 1 Lake Park</td>
                          <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                            <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Delete</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="py-1 px-4">
                    <nav class="flex items-center space-x-1">
                      <button type="button" class="p-2.5 inline-flex items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                        <span aria-hidden="true">«</span>
                        <span class="sr-only">Previous</span>
                      </button>
                      <button type="button" class="min-w-[40px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10" aria-current="page">1</button>
                      <button type="button" class="min-w-[40px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10">2</button>
                      <button type="button" class="min-w-[40px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10">3</button>
                      <button type="button" class="p-2.5 inline-flex items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                        <span class="sr-only">Next</span>
                        <span aria-hidden="true">»</span>
                      </button>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</x-layout>