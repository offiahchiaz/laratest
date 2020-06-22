<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Profile;
use Illuminate\Support\Facades\DB;

class ProfilesController extends Controller
{
    public function user_preference(User $user)
    {
       $preference = $user->profile->preference;
        //dd($preference);

        //$profiles = Profile::where('user_id', '!=', $user->id)->get(['id', 'tribe', 'residence']);
        //dd($profiles);

        //$recommedndedUsers = $profiles::search($preference)->get();

        //dd($recommedndedUsers); 

        $res = Profile::search('Ex sunt natus vel nihil totam. Ut velit nulla sunt temporibus ut rem.')->get();
        dd($res);
        // Post::search("Some title or body content or even the author's full name")
        // ->with('author')
        // ->paginate();
    }

    public function findfriends(User $user){

        //$users = User::le ::where('id', '!=', $user->id)->get();

        //$users = DB::table('users')->left


        $users = DB::table('users')
            ->leftJoin('profiles', 'users.id', '=', 'profiles.user_id')
            ->where('users.id', '!=', $user->id)
            ->get();

        dd($users);

        //return $users;

    }

    public function sendRequest(User $user){

        //dd($user->id);


        return $user->addFriend($user->id);
        //dd($id);
    }
}
