<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;

class RegistrationController extends AdminController
{
    public function index(): Factory|View|Application
    {
        $data = [
            'modalTitle' => 'Modal Title',
            'modalContent' => '<p>Lorem ipsum dolor sit amet,<a href="#"> consectetur adipiscing elit</a>. Sed nec posuere sapien. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut tincidunt placerat nulla vel iaculis. Aliquam ornare urna arcu, a ultricies dui congue vehicula. Donec sit amet massa a felis consectetur facilisis a ac dolor. Nam sit amet scelerisque odio. Nulla justo metus, maximus non mauris sed, congue porta sem.</p>'
        ];

        return view('admin.registration.index', $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'reEnteredPassword' => 'required|same:password|min:8',
        ]);

        User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ]);
    }
}
