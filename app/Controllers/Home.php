<?php
    namespace App\Controllers;

    class Home extends BaseController
    {
        public function index()
        {
            $data = [
                'title' => 'Rumah Sakit Sumber Sentosa Tumpang Malang'
            ];
            return view('landing_pages', $data);

            // Cache Setup
            $this->cachePage($n);
        }
    }
?>
