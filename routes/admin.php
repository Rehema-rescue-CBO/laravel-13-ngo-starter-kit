<?php


use Illuminate\Support\Facades\Route;

/// Admin Routes categories
Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::livewire('categories', 'category.index')->name('admin.categories.index');
    Route::livewire('categories/create', 'category.create')->name('admin.categories.create');
    Route::livewire('categories/{category}', 'category.edit')->name('admin.categories.edit');
});
/// Admin Routes blog
Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::livewire('blog', 'blog.index')->name('admin.blogs.index');
    Route::livewire('blog/create', 'blog.create')->name('admin.blogs.create');
    Route::livewire('blog/{blog}', 'blog.edit')->name('admin.blogs.edit');
});

/// Admin Routes partners
Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::livewire('partners', 'partners.index')->name('admin.partners.index');
    Route::livewire('partners/create', 'partners.create')->name('admin.partners.create');
    Route::livewire('partners/{partner}', 'partners.edit')->name('admin.partners.edit');
});
/// Admin Routes programs
Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::livewire('programs', 'programs.index')->name('admin.programs.index');
    Route::livewire('programs/create', 'programs.create')->name('admin.programs.create');
    Route::livewire('programs/{program}', 'programs.edit')->name('admin.programs.edit');
});
