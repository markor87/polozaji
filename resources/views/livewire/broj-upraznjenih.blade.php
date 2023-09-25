<div>
    <table class="min-w-full mt-2 border-collapse border border-gray-300">
        <thead>
        <tr>
            <th class="border border-gray-300 px-4 py-2">Број упражњених</th>
            <th class="border border-gray-300 px-4 py-2">Проценат упражњених</th>
            <!-- Add other columns as needed -->
        </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
            <tr>
                <td class="border border-gray-300 px-4 py-2">{{ $item->broj_upraznjenih }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $item->procenat_upraznjenih }}</td>
                <!-- Add other columns as needed -->
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
