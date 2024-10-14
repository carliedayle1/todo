<div class="overflow-x-auto mt-4">
    <table class="min-w-full border-collapse border border-gray-200">
        <thead>
            <tr class="bg-gray-100">
                <th class="border border-gray-300 px-4 py-2 text-left">ID</th>
                <th class="border border-gray-300 px-4 py-2 text-left">Title</th>
                <th class="border border-gray-300 px-4 py-2 text-left">Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($todos as $todo)
                <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">{{ $todo->id }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $todo->title }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $todo->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>