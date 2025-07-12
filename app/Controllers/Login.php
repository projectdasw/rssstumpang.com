<?php
    namespace App\Controllers;

    class Login extends BaseController
    {
        public function index()
        {
            $data = [
                'title' => 'Login - Rumah Sakit Sumber Sentosa Tumpang Malang'
            ];
            return view('login/index', $data);

            // Cache Setup
            $this->cachePage($n);
        }
    }
?>