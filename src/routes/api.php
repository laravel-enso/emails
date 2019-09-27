<?php
Route::middleware(['web', 'auth', 'core'])
    ->group(function () {
        Route::namespace('LaravelEnso\Emails\app\Http\Controllers\Emails')
            ->prefix('api/emails')->as('emails.')
            ->group(function () {
                Route::post('send', 'Send')->name('send');
                Route::post('', 'Store')->name('store');
                Route::get('create', 'Create')->name('create');
                Route::get('{email}/show', 'Show')->name('show');
                Route::delete('{email}', 'Destroy')->name('destroy');
                Route::get('initTable', 'InitTable')->name('initTable');
                Route::get('tableData', 'TableData')->name('tableData');
            });
    });
