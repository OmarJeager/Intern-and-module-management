<form method="POST" action="{{route('Module.store')}}">
    @csrf

    <label for="name">Module Name:</label>
    <input type="text" id="name" name="name" required>
    <button type="submit">Add Module</button>
</form>
