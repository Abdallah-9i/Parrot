<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
 public function show(User $user)
{
    $tweets_count = $user->tweets()->count();
     $tweets = $user->tweets()->latest()->get();

    return view('profile.show', compact('user', 'tweets_count', 'tweets'));

}
public function me()
{
    $user = auth()->user();
    $tweets_count = $user->tweets()->count();
    $tweets = $user->tweets()->latest()->get();

    return view('profile.me', compact('user', 'tweets_count', 'tweets'));
}
}

