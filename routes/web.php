<?php

use App\Http\Controllers\DscheduleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FacilitateController;
use App\Http\Controllers\FounderController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\KeywordController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SpeakersController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TspeakerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[FrontendController::class,'index'])->name('index.frontend');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('dashboard/speakers',[SpeakersController::class,'index'])->name('index.speakers');
    Route::get('dashboard/speakers/create',[SpeakersController::class,'create'])->name('create.speakers');
    Route::post('dashboard/speakers/store',[SpeakersController::class,'store'])->name('store.speakers');
    Route::post('dashboard/speakers/destory/{id}',[SpeakersController::class,'destory'])->name('destory.speakers');
    Route::get('dashboard/speakers/edit/{id}',[SpeakersController::class,'edit'])->name('edit.speakers');
    Route::post('dashboard/speakers/update/{id}',[SpeakersController::class,'update'])->name('update.speakers');


    Route::get('dashboard/tspeakers',[TspeakerController::class,'index'])->name('index.tspeakers');
    Route::get('dashboard/tspeakers/create',[TspeakerController::class,'create'])->name('create.tspeakers');
    Route::post('dashboard/tspeakers/store',[TspeakerController::class,'store'])->name('store.tspeakers');
    Route::post('dashboard/tspeakers/destory/{id}',[TspeakerController::class,'destory'])->name('destory.tspeakers');
    Route::get('dashboard/tspeakers/edit/{id}',[TspeakerController::class,'edit'])->name('edit.tspeakers');
    Route::post('dashboard/tspeakers/update/{id}',[TspeakerController::class,'update'])->name('update.tspeakers');


    Route::get('dashboard/founders',[FounderController::class,'index'])->name('index.founders');
    Route::get('dashboard/founders/create',[FounderController::class,'create'])->name('create.founders');
    Route::post('dashboard/founders/store',[FounderController::class,'store'])->name('store.founders');
    Route::post('dashboard/founders/destory/{id}',[FounderController::class,'destory'])->name('destory.founders');
    Route::get('dashboard/founders/edit/{id}',[FounderController::class,'edit'])->name('edit.founders');
    Route::post('dashboard/founders/update/{id}',[FounderController::class,'update'])->name('update.founders');

    Route::get('dashboard/heros',[HeroController::class,'index'])->name('index.heros');
    Route::get('dashboard/heros/create',[HeroController::class,'create'])->name('create.heros');
    Route::post('dashboard/heros/store',[HeroController::class,'store'])->name('store.heros');
    Route::post('dashboard/heros/destory/{id}',[HeroController::class,'destory'])->name('destory.heros');
    Route::get('dashboard/heros/edit/{id}',[HeroController::class,'edit'])->name('edit.heros');
    Route::post('dashboard/heros/update/{id}',[HeroController::class,'update'])->name('update.heros');

    Route::get('dashboard/keywords',[KeywordController::class,'index'])->name('index.keywords');
    Route::get('dashboard/keywords/create',[KeywordController::class,'create'])->name('create.keywords');
    Route::post('dashboard/keywords/store',[KeywordController::class,'store'])->name('store.keywords');
    Route::post('dashboard/keywords/destory/{id}',[KeywordController::class,'destory'])->name('destory.keywords');
    Route::get('dashboard/keywords/edit/{id}',[KeywordController::class,'edit'])->name('edit.keywords');
    Route::post('dashboard/keywords/update/{id}',[KeywordController::class,'update'])->name('update.keywords');


    Route::get('dashboard/events',[EventController::class,'index'])->name('index.events');
    Route::get('dashboard/events/create',[EventController::class,'create'])->name('create.events');
    Route::post('dashboard/events/store',[EventController::class,'store'])->name('store.events');
    Route::post('dashboard/events/destory/{id}',[EventController::class,'destory'])->name('destory.events');
    Route::get('dashboard/events/edit/{id}',[EventController::class,'edit'])->name('edit.events');
    Route::post('dashboard/events/update/{id}',[EventController::class,'update'])->name('update.events');



    Route::get('dashboard/dschedules',[DscheduleController::class,'index'])->name('index.dschedules');
    Route::get('dashboard/dschedules/create',[DscheduleController::class,'create'])->name('create.dschedules');
    Route::post('dashboard/dschedules/store',[DscheduleController::class,'store'])->name('store.dschedules');
    Route::post('dashboard/dschedules/destory/{id}',[DscheduleController::class,'destory'])->name('destory.dschedules');
    Route::get('dashboard/dschedules/edit/{id}',[DscheduleController::class,'edit'])->name('edit.dschedules');
    Route::post('dashboard/dschedules/update/{id}',[DscheduleController::class,'update'])->name('update.dschedules');

    Route::get('dashboard/schedules',[ScheduleController::class,'index'])->name('index.schedules');
    Route::get('dashboard/schedules/create',[ScheduleController::class,'create'])->name('create.schedules');
    Route::post('dashboard/schedules/store',[ScheduleController::class,'store'])->name('store.schedules');
    Route::post('dashboard/schedules/destory/{id}',[ScheduleController::class,'destory'])->name('destory.schedules');
    Route::get('dashboard/schedules/edit/{id}',[ScheduleController::class,'edit'])->name('edit.schedules');
    Route::post('dashboard/schedules/update/{id}',[ScheduleController::class,'update'])->name('update.schedules');
    Route::get('dashboard/schedules/export/', [ScheduleController::class, 'export'])->name('export.schedules');

    //tickets
    Route::get('dashboard/tickets',[TicketController::class,'index'])->name('index.tickets');
    Route::get('dashboard/tickets/create',[TicketController::class,'create'])->name('create.tickets');
    Route::post('dashboard/tickets/store',[TicketController::class,'store'])->name('store.tickets');
    Route::post('dashboard/tickets/destory/{id}',[TicketController::class,'destory'])->name('destory.tickets');
    Route::get('dashboard/tickets/edit/{id}',[TicketController::class,'edit'])->name('edit.tickets');
    Route::post('dashboard/tickets/update/{id}',[TicketController::class,'update'])->name('update.tickets');


    //ftickets

    Route::get('dashboard/ftickets',[FacilitateController::class,'index'])->name('index.ftickets');
    Route::get('dashboard/ftickets/create',[FacilitateController::class,'create'])->name('create.ftickets');
    Route::post('dashboard/ftickets/store',[FacilitateController::class,'store'])->name('store.ftickets');
    Route::post('dashboard/ftickets/destory/{id}',[FacilitateController::class,'destory'])->name('destory.ftickets');
    Route::get('dashboard/ftickets/edit/{id}',[FacilitateController::class,'edit'])->name('edit.ftickets');
    Route::post('dashboard/ftickets/update/{id}',[TicketController::class,'update'])->name('update.ftickets');
});
