<?php

use Illuminate\Support\Facades\Route;

[
    $controllers,
    $prefix,
    $as,
    $middleware,
] = Base::getRouteConfigFromRepo(repo: \Callmeaf\SocialBot\App\Repo\Contracts\SocialBotRepoInterface::class);

Route::apiResource($prefix, $controllers['social_bot'])->middleware($middleware);
// Route::prefix($prefix)->as($as)->middleware($middleware)->controller($controllers['social_bot'])->group(function () {
    // Route::get('trashed/list', 'trashed');
    // Route::prefix('{social_bot}')->group(function () {
        // Route::patch('/status', 'statusUpdate');
        // Route::patch('/type', 'typeUpdate');
        // Route::patch('/restore', 'restore');
        // Route::delete('/force', 'forceDestroy');
    // });
// });
