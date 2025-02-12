<?php

use salesfokuz\gamification\Models\Game;

Route::get('/games', function () {
    return Game::all();
});

Route::get('/games/{id}', function ($id) {
    return Game::find($id);
});

Route::post('/games', function (Illuminate\Http\Request $request) {
    $game = Game::create($request->all());
    return response()->json($game);
});
