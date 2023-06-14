<?php

namespace Tests;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Passport\Passport;

trait InteractsWithUsers
{
    public function setUpUser(array $attributes = [])
    {
        $this->logout();

//        $this->user = User::factory()->create($attributes);

        $this->user = User::find(2);
//dd($this->user);
        $this->login();

        return $this;
    }

    public function login()
    {
        Passport::actingAs($this->user);
//        auth()->login($this->user, true);
    }

    public function logout()
    {
        $this->user = null;
    }
}
