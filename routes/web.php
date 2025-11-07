<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KillersController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/killer', [KillersController::class, 'index'])->name('killer.index');

Route::get('/killer/create', [KillersController::class, 'create'])->name('killer.create');

Route::get('/killer/{killers}', [KillersController::class, 'show'])->name('killer.show');

Route::get('/killer/contact', [KillersController::class, 'contact'])->name('killer.contact');

Route::post('/killers', [KillersController::class, 'store'])->name('killers.store');

Route::delete('/killer/{killers}', [KillersController::class, 'destroy'])->name('killer.destroy');

/*Route::get('/ninjas', [NinjaController::class, 'index'])->name('ninjas.index');
Route::get('/ninjas/{id}', [NinjaController::class, 'show'])->name('ninjas.show');
Route::get('/ninjas/create', [NinjaController::class, 'create'])->name('ninjas.create');
Route::post('/ninjas', [NinjaController::class, 'store'])->name('ninjas.store');
Route::get('/ninjas/{id}/edit', [NinjaController::class, 'edit'])->name('ninjas.edit');
Route::put('/ninjas/{id}', [NinjaController::class, 'update'])->name('ninjas.update');
*/



/* Index.blade.php

@if($greeting == "hello")
    <p>Hi from inside of the if Statement</p>
    @endif


@foreach ($killer as $killers)
        <li>
            <p>Killer Name: {{ $killers['name'] }}, Skill: {{ $killers['skill'] }}</p>
        <a href="/killer/{{ $killers['id'] }}">View Details</a>
        <x-card href="/killer/{{ $killers['id'] }}" :highlight="$killers['skill'] > 70">
            <h3>{{ $killers['name'] }}</h3>
        </x-card>
        </li>
@endforeach

<h2>Welcome to the Killer Network Home Page!</h2>
    <p>This is the index page for the Killer Network section.</p>

    <ul>
        <li>Killer 1: John Doe</li>
        <li>Killer 2: Jane Smith</li>
        <li>Killer 3: Mike Johnson</li>
        <li>Killer 4: Emily Davis</li>
        <li>Killer 5: Chris Brown</li>
    </ul>

 <li>
            <p>Killer Name: {{ $killers['name'] }}, Skill: {{ $killers['skill'] }}</p>
        <a href="/killer/{{ $killers['id'] }}">View Details</a>

@if (count($killers) === 1)
    I have one record!
@elseif (count($killers) > 1)
    I have multiple records!
@else
   <p> I don't have any records! </p>
@endif

*/
