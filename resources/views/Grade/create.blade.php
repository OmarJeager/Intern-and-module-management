
<form method="POST" action="{{route('grade.store')}}">
    @csrf

    <label for="stagiaire_id">Stagiaire:</label>
    <select id="stagiaire_id" name="stagiaire_id" required>
        @foreach ($stagiaires as $stagiaire)
            <option value="{{ $stagiaire->id }}">{{ $stagiaire->Name }}</option>
        @endforeach
    </select>

    <label for="module_id">Module:</label>
    <select id="module_id" name="module_id" required>
        @foreach ($modules as $module)
            <option value="{{ $module->id }}">{{ $module->Name }}</option>
        @endforeach
    </select>

    <label for="grade">Grade:</label>
    <input type="number" id="grade" name="grade" value="" min="0" max="20" step="any" required>

    <button type="submit">Add Grade</button>
</form>
