<x-layout>
    <h1> Currently Available Killers </h1>
<ul>
    @foreach ($killer as $killers)
    <li>
        <x-card href="{{ route('killer.show', $killers->id) }}" :highlight="$killers['skill'] > 70">
            <div>
                <h3>{{ $killers->name }}</h3>
                <p>{{ $killers->dojo->name }}</p>
            </div>
        </x-card>
    </li>
@endforeach
</ul>

{{ $killer->links() }}

</x-layout>
