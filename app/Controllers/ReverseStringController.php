<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ReverseStringController extends Controller
{
    public function index()
    {
        // Input string
        $inputString = "NEGIE1";
        
        // Pisahkan huruf dan angka
        preg_match('/([a-zA-Z]+)(\d+)/', $inputString, $matches);

        // Balikkan huruf
        $reversedString = strrev($matches[1]);

        // Gabungkan kembali huruf yang sudah dibalik dengan angka
        $resultString = $reversedString . $matches[2];

        // Tampilkan hasil
        echo $resultString; // Output: EIGEN1
    }
}