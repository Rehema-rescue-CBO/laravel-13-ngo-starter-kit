<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Additional frontend routes can be added here grouped
Route::prefix('r')->group( function () {
    // Example route
     Route::get('/about-rehema-rescue-cbo', [HomeController::class, 'about'])->name('about');
     Route::get('/contact-rehema-rescue-cbo', [HomeController::class, 'contact'])->name('contact');
     //beneficiaries
     Route::get('beneficiaries-rehema-rescue-cbo', [HomeController::class, 'beneficiaries'])->name('beneficiaries');
    // Route::get('events-rehema-rescue-cbo  ', [HomeController::class, 'events'])->name('events');
     Route::get('donation-rehema-rescue-cbo', [HomeController::class, 'donation'])->name('donation');
     Route::get('volunteer-rehema-rescue-cbo', [HomeController::class, 'volunteer'])->name('volunteer');
     //FAQs
     Route::get('faqs-rehema-rescue-cbo', [HomeController::class, 'faqs'])->name('faqs');
     //partners
     Route::get('partners-rehema-rescue-cbo', [HomeController::class,'partners'])->name('partners');
     //programs
     Route::get('programs-rehema-rescue-cbo', [HomeController::class, 'programs'])->name('programs');
     Route::get('programs-rehema-rescue-cbo/{program:slug}', [HomeController::class, 'showProgram'])->name('programs.show');
     //privacy
     Route::get('privacy-policy-rehema-rescue-cbo', [HomeController::class, 'privacy'])->name('privacy');
     //partner
     Route::get('partner-rehema-rescue-cbo', [HomeController::class, 'partner'])->name('partner');
     //transparency
     Route::get('transparency-rehema-rescue-cbo', [HomeController::class, 'transparency'])->name('transparency');
     //events and stories
     Route::get('events-and-stories-rehema-rescue-cbo', [HomeController::class, 'eventsAndStories'])->name('events'); 
     //get involved
     Route::get('get-involved-rehema-rescue-cbo', [HomeController::class, 'getInvolved'])->name('getinvolved'); 
     //donate now
     Route::get('donate-rehema-rescue-cbo', [HomeController::class, 'donate'])->name('donate');
     //post for contact form
     Route::post('contact', [HomeController::class, 'sendemail'])->name('contact.email');
     //recommendations
     Route::get('recommendations-rehema-rescue-cbo', [HomeController::class, 'recommendations'])->name('recommendations');
     //publications
     Route::get('publications-rehema-rescue-cbo', [HomeController::class, 'publications'])->name('publications');
     //blogs
        Route::get('blogs-rehema-rescue-cbo', [HomeController::class, 'blogs'])->name('blogs');
        Route::get('blogs-rehema-rescue-cbo/{blog:slug}', [HomeController::class, 'showBlog'])->name('blogs.show');
        //testimonials
        Route::get('testimonials-rehema-rescue-cbo/{testimonial:slug}', [HomeController::class, 'showTestimonial'])->name('testmonials.show');
});
