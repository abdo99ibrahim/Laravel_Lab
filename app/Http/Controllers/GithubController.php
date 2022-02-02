<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GithubController extends Controller
{

# 1- redirect and open github link
    public function redirect()
    {
        return Socialite::driver('github')->redirect();
    }
    public function callback()
    {
        $githubUser = Socialite::driver('github')->user();
        $user = User::where('github_id', $githubUser->id)->first();
        if ($user) {
            $user->update([
            'github_token' => $githubUser->token,
            'github_refresh_token' => $githubUser->refreshToken,
        ]);
        } else {

            $user = User::create([
            'name' => $githubUser->name,
            'email' => $githubUser->email,
            'password' => encrypt('gitpwd059'),
            'github_id' => $githubUser->id,
            'github_token' => $githubUser->token,
            'github_refresh_token' => $githubUser->refreshToken,
        ]);
            }

            Auth::login($user);

            return redirect()->route('posts.index');
        }
    }

