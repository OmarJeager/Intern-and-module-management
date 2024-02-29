

<form method="POST" action="{{route('filiere.store')}}">
    @csrf

    <label for="name">Filiere Name:</label>
    <input type="text" id="name" name="name" required>
    <button type="submit">Add Filiere</button>
</form>
