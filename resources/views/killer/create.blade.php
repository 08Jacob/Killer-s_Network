<x-layout>
    <h2>Create page</h2>
    <form action="{{ route('killers.store') }}" method="POST">
        @csrf
        <h2>Create a New Killer</h2>

        <!--Killer Name -->
        <label for="name">Killer Name:</label>
        <input type="text"
                id="name"
                name="name"
                value="{{ old('name') }}"
                required
                >

                <!--Killer strength -->
        <label for="skill">Killer Skill (0-100):</label>
        <input type="number"
                id="skill"
                name="skill"
                value="{{ old('skill') }}"
                required>

                <!--Killer bio -->
        <label for="bio">Biography:</label>
        <textarea rows="5"
                id="bio"
                name="bio"
                required
                >{{ old('bio') }}
                </textarea>

                <!--select a dojo -->
        <label for="dojo_id">Dojo:</label>
        <select id="dojo_id" name="dojo_id" required>
                <option value=" " disabled selected>Select a dojo</option>
                @foreach ($dojos as $dojo)
                <option value="{{ $dojo->id }}" {{ $dojo->id == old('dojo_id') ? 'selected' : '' }}>
                    {{ $dojo->name }}
                </option>
                @endforeach
                </select>

                <button type="submit" class="btn mt-4">Create Killer</button>

            <!--Validation errors-->
        @if ($errors->any())
                <ul class="px-4 py-2 bg-red-100">
                        @foreach ($errors->all() as $error)
                        <li class="my-2 text-red-500">{{ $error }}</li>
                        @endforeach
                </ul>

        @endif

    </form>
</x-layout>
