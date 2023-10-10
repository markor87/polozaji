<div class="flex flex-row align-start">
    <div class="w-full">
        <!-- Table Display -->
        <table class="min-w-full mt-2 border-collapse border border-gray-300">
            <thead>
            <tr>
                <th class="border border-gray-300 px-4 py-2">Vrsta Organa</th>
                <th class="border border-gray-300 px-4 py-2">Polozaj</th>
                <th class="border border-gray-300 px-4 py-2">Broj</th>
                <th class="border border-gray-300 px-4 py-2">Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tableData as $data)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $data->vrsta_organa }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $data->polozaj }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $data->broj }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $data->status }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
</div>