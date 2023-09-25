<div>
    <table class="min-w-full mt-2 border-collapse border border-gray-300">
        <thead>
        <tr>
            <th class="border border-gray-300 px-4 py-2">Просечно време трајања конкурса у току</th>
            <!-- Add other columns as needed -->
        </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
            <tr>
                <td class="border border-gray-300 px-4 py-2">{{ $item->prosecno_vreme_trajanja }}
                </td>
                <!-- Add other columns as needed -->
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
