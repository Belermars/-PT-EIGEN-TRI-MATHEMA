<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class WordCount extends BaseController
{
    public function index()
    {
        // Data INPUT dan QUERY
        $input = ['xc', 'dz', 'bbb', 'dz'];
        $query = ['bbb', 'ac', 'dz'];

        // Menghitung kemunculan kata dalam QUERY pada INPUT
        $output = [];
        foreach ($query as $word) {
            $count = 0;
            foreach ($input as $inputWord) {
                if ($word === $inputWord) {
                    $count++;
                }
            }
            $output[] = $count;
        }

        // Menampilkan output sebagai JSON
        return json_encode($output);
    }
}
