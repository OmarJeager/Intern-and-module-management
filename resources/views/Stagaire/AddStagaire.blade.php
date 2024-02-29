

<form method="POST" action="{{route('stagaire.store')}}">
    @csrf

    <label for="name">Stagaire Name:</label>
    <input type="text" id="name" name="name" required>
    <select name='filiere'>
        @foreach ($filiere as $filiere)
            <option value='{{$filiere->id}}'>{{$filiere->Name}}</option>
        @endforeach
    </select>
    <button type="submit">Add Filiere</button>
</form>
