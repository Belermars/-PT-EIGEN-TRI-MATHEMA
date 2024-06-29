<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class MatrixController extends BaseController
{
    public function index()
    {
      // Matrix data
      $matrix = [
        [1, 2, 0],
        [4, 5, 6],
        [7, 8, 9]
    ];

    // Calculate first diagonal sum
    $diagonal1 = $matrix[0][0] + $matrix[1][1] + $matrix[2][2];

    // Calculate second diagonal sum
    $diagonal2 = $matrix[0][2] + $matrix[1][1] + $matrix[2][0];

    // Calculate the result
    $result = $diagonal1 - $diagonal2;

    // Pass data to view
    $data = [
        'matrix' => $matrix,
        'diagonal1' => $diagonal1,
        'diagonal2' => $diagonal2,
        'result' => $result
    ];

    // Load view
    return view('matrix_view', $data);
    }
}
