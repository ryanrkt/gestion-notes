<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function index()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/dashboard');
        }

        return view('auth/login', [
            'title' => 'Connexion',
        ]);
    }

    public function login()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/dashboard');
        }

        $email = trim((string) $this->request->getPost('email'));
        $email = rtrim($email, ",; \t\n\r\0\x0B");
        $password = trim((string) $this->request->getPost('password'));

        if ($email === '' || $password === '') {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Veuillez renseigner votre e-mail et votre mot de passe.');
        }

        $userModel = new UserModel();
        $user = $userModel->authenticate($email, $password);

        if (!$user) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Identifiants incorrects.');
        }

        session()->set([
            'isLoggedIn' => true,
            'userId' => (int) $user['id'],
            'email' => (string) $user['email'],
        ]);

        return redirect()->to('/dashboard')->with('success', 'Connexion réussie.');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/auth/login')->with('success', 'Vous êtes déconnecté.');
    }
}
