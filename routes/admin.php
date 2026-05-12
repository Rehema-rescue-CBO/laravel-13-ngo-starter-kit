<?php


use Illuminate\Support\Facades\Route;

/// Admin Routes
Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::livewire('categories', 'category.index')->name('admin.categories.index');
    Route::livewire('categories/create', 'category.create')->name('admin.categories.create');
    Route::livewire('categories/{category}', 'category.edit')->name('admin.categories.edit');
});
