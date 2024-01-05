<?php

namespace App\Controllers;

class login extends BaseController
{
    public function index(): string
    {
        return view('produk/login');
    }

    public function loginAdmin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // // Replace this with a secure method to retrieve user credentials from a database
        // $storedUsername = 'admin';
        // $storedPasswordHash = password_hash('admin', PASSWORD_DEFAULT);

        // if ($username == $storedUsername && password_verify($password, $storedPasswordHash)) {
        //     // Correct username and password
        //     session()->set('admin', true);
        //     return view('produk/estimasip');
        // } else {
        //     // Incorrect username or password
        //     $data = ['error' => 'Username atau password yang anda masukkan salah'];
        //     return view('produk/login', $data);
        // }

        if ($username == 'admin') {
            if ($password == 'admin') {
                session()->set('admin', 'true');
                return view('produk/estimasip');
            } else {
                $data = ['error' => 'Password yang anda masukkan salah'];
                return view('produk/login', $data);
            }
        } else {
            $data = ['error' => 'username yang anda masukkan salah'];
            return view('produk/login', $data);
        }
    }
}
