<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;

class RegistrationController extends AdminController
{
    public function index(): Factory|View|Application
    {
        return view('admin.registration.index');
    }
}
