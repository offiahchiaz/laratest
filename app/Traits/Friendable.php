<?php

namespace App\Traits;

use App\Friendship;
use App\User;

trait Friendable {

    public function addFriend($id) {

        $friendship = Friendship::create([
            'requester' => $id,
            'user_requested' => 7,
        ]);

        if ($friendship)
        {
            return $friendship;
        }

        return 'failed to send request';

    }
}