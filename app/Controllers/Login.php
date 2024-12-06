<?php

namespace App\Controllers;
use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login'); // Load the login view
    }

    public function auth()
{
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');
    $model = new UserModel();

    // Check if user is there already
    $user = $model->where('username', $username)->first();
    if ($user && $user['password'] === $password) {
        // Set session for logged-in user
        session()->set('loggedIn', true);
        return redirect()->to('/dashboard');
    }

    // Redirect back with an error if login failz
    return redirect()->back()->with('error', 'Invalid username or password');
}

}
