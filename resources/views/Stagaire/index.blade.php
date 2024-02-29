<h1>List des Stagiere</h1>
<table border="1">
    <thead>
        <tr>
            <th>Stagiaire Name</th>
            <th>Filiere</th>
            <th>Modules</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($stagiaires as $stagiaire)
            <tr>
                <td>{{ $stagiaire->Name }}</td>
                <td>{{ $stagiaire->filiere->Name }}</td>
                <td>
                    <ul>
                        @foreach ($stagiaire->modules as $module)
                            <li>{{ $module->Name }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
