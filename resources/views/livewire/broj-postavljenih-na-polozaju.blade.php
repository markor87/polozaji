<div>
    <table class="min-w-full mt-2 border-collapse border border-gray-300">
        <thead>
        <tr>
            <th class="border border-gray-300 px-4 py-2">Број постављених на положају</th>
            <th class="border border-gray-300 px-4 py-2">Проценат постављених на положају</th>
            <!-- Add other columns as needed -->
        </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
            <tr>
                <td class="border border-gray-300 px-4 py-2">{{ $item->broj_postavljenih }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $item->procenat_postavljenih }}</td>
                <!-- Add other columns as needed -->
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
