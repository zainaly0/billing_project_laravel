<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\GstBillController;

#index page
Route::get('/', [AppController::class, 'dashboard']);

#party routes
Route::get('/add-party', [PartyController::class, 'addParty'])->name('addparty');
Route::post('/create-add-party', [PartyController::class, 'createParty'])->name('create-party');
Route::get('manage-parties', [PartyController::class, 'index'])->name('manage-parties');
Route::get('/edit-party/{id}', [PartyController::class, 'editParty'])->name('edit-party');
Route::put('/update-party/{id}', [PartyController::class, 'updateParty'])->name('update-party');
Route::delete('/delete-party/{party}', [PartyController::class, 'deleteParty'])->name('delete-party');

#GST bill routes
Route::get('add-gst-bill', [GstBillController::class, 'addGstBill'])->name('add-gst-bill');
Route::get('manage-gst-bill', [GstBillController::class, 'index'])->name('manage-gst-bill');
Route::get('print-gst-bill', [GstBillController::class, 'print'])->name('print-gst-bill');














































/**
sir mere experience aur skill ke according ap jo salary de rhe hn vo more than sufficent hai but sir mai bangalore k expence k according mai sure nahi hu isme expence chal bhi payenge ya nahi isliy sir agr kch aur pssible hai to ap kr dijiye vese mai tayyar hu aane k liy


sir salary kam nahi hai mai is bat se comfort bhi hu aur sure bhi bhu lakin relocate krunga to mujhay vha ka idea nahi hai lakin itna to pta he hai bangalore expensive city hai 
yha to mera apna ghr ahi lakin vha km se km 10-12 hazar mai pg milte hn to sir 14hazar mai mere liy vha survive krna thoda muskil ho jayega 
to sir thodi si possibilities hai to kr dijiye vese mai tayyar hu aane k liy 


thik hai sir
aur sir relocation ka bonus to denge na ap?
kyoki sir relocation mai 6-7 hazar lg jayenge to itna mai effort kr prna mere liy muskil ho jayega to sir apko mujhay thoda support krna pdega .

 */
