<?php

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/members', function() {
    return response()->json([
        'members' => Member::orderBy('lname')->orderBy('fname')->get()
    ], 200);
});

Route::get('/members/{member}', function(Member $member) {
    return response()->json($member, 200);
});

Route::put('/members/{member}', function(Member $member, Request $request) {
    $member->update($request->all());
    return response()->json([
        'message' => 'Updated successfully',
        'member'=> $member
    ], 202);
});
