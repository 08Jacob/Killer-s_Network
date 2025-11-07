<x-layout>
    <h1> Currently Available Killers </h1>

    <h2>{{ $killer->name }}</h2>

    <div class="bg-gray-200 p-4 rounded">
    <p><strong>Skill Level:</strong> {{ $killer->skill }}</p>
    <p><strong>About me</strong></p>
    <p>{{ $killer->bio }}</p>
</div>

<div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
    <h3>Dojo Informatiion</h3>
    <p><strong>Dojo Name:</strong> {{ $killer->dojo->name }}</p>
    <p><strong>Location:</strong> {{ $killer->dojo->location }}</p>
    <p><strong>About the Dojo: </strong></p>
    <p>{{ $killer->dojo->description }}</p>
</div>

<form action="{{ route('killer.destroy', $killer->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete Killer</button>
</x-layout>
