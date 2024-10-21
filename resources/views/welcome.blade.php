
<x-layout>
    <x-slot:heading>
        Welcome
    </x-slot>
    <!-- activity 5 -->

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Completed
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($todos as $Todo)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $Todo->id }}
                </th>
                <td class="px-6 py-4">
                    {{ $Todo->name }}
                </td>
                <td class="px-6 py-4">
                    {{ $Todo->description }}
                </td>
                <td class="px-6 py-4">
                    {{ $Todo->completed ? 'Yes' : 'No' }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</x-layout>
