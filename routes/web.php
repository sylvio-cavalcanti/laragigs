<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// All listings 
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all() // all() is an eloquent function
    ]);
});

// Single listing
/* WITHOUT using Route model binding:  */
// Route::get('/listings/{id}', function($id) {
//     $listing =  Listing::find($id);
//     if ($listing) {
//         return view('listing', [
//             'listing' => $listing
//         ]);
//     } else {
//         abort('404');
//     }
// });

/* USING Route model binding:  */
/* 
    -> '/{listing}' in the url should match the variable name in 'function(Listing $listing)'
    -> There is no need to use find() or do the if($listing) check to show the view or an abort
        laravel takes care of that for use already using route model binding.
*/
Route::get('/listings/{listing}', function(Listing $listing) {
    return view('listing', [
        'listing' => $listing
    ]);
});











Route::get('/hello', function () {
    return response('<h1>hello world!</h1>', 200) // Returning HTML and response code
        ->header('Content-Type', 'text/plain') // header: this defines that the response is plain text instead of html
        ->header('foo', 'bar'); // Returns a custom varibale and its value
});

Route::get('/posts/{id}', function ($id) { // Wildcard: gets anything that is set after the /
    return response('Post ' . $id); // Prints the value from the url cought by the wildcard
})->where('id', '[0-9]+'); // Using regex to define what is allowed to be entered in the wildcard

Route::get('/search', function (Request $request) {
    /*
        use Illuminate\Http\Request;
        example: http://127.0.0.1:8000/search?name=sylvio&city=recife
    */
    // dd($request); // We can access the values of the search in (request object) the in query->parameter 
    /* Access theses values directly */
    return $request->name . ' ' . $request->city;
});
