<?php
use Illuminate\Support\Facades\Route;
use App\Modules\Feedback\Controllers\FeedbackController;

Route::group(['prefix'=> 'api/','middleware' => ['api']], function() {
    Route::group(['namespace' => 'App\Modules\Feedback\Controllers', 'prefix' => 'feedback'], function () {
        Route::post('/', [FeedbackController::class, 'saveFeedback'])->name('saveFeedback');
    });
});
