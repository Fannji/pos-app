<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Ana Santos',
                'email' => 'ana@example.com',
                'phone' => '09171234567',
            ],
            [
                'full_name' => 'Marco Reyes',
                'email' => 'marco@example.com',
                'phone' => '09181234567',
            ],
            [
                'full_name' => 'Lea Cruz',
                'email' => 'lea@example.com',
                'phone' => '09191234567',
            ],
            [
                'full_name' => 'Noah Garcia',
                'email' => 'noah@example.com',
                'phone' => '09201234567',
            ],
            [
                'full_name' => 'Mia Flores',
                'email' => 'mia@example.com',
                'phone' => '09211234567',
            ],
        ];

        return view('customers', ['customers' => $customers]);
    }
}