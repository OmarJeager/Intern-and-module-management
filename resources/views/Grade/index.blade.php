
<h1>List des NOTE</h1>
<table border="1">
    <thead>
        <tr>
            <th>Stagiaire Name</th>
            <th>Module</th>
            <th>Grade</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($stagiaires as $stagiaire)
            @foreach ($stagiaire->modules as $module)
                <tr>
                    <td>{{ $stagiaire->Name }}</td>
                    <td>{{ $module->Name }}</td>
                    <td>{{ $module->pivot->grade }}</td>
                </tr>
            @endforeach
        @endforeach
    </tbody>
</table>
