<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class LongestWord extends Controller
{
    public function index()
    {
        return view('longest_word_form');
    }

    public function findLongest()
    {
        // Ambil kalimat dari input POST
        $sentence = $this->request->getPost('sentence');

        // Panggil fungsi untuk mencari kata terpanjang
        $longestWord = $this->getLongestWord($sentence);

        // Kirimkan hasilnya kembali ke view
        return view('longest_word_result', ['longestWord' => $longestWord]);
    }

    private function getLongestWord($sentence)
    {
        // Pecah kalimat menjadi kata-kata
        $words = explode(' ', $sentence);

        // Temukan kata terpanjang
        $longestWord = '';
        foreach ($words as $word) {
            if (strlen($word) > strlen($longestWord)) {
                $longestWord = $word;
            }
        }

        return $longestWord;
    }
}
