<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User; // используем юзер

class UserController extends Controller
{
    /**
     * Показать профиль конкретного пользователя.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return 'show '.$id;
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }
}