<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin',
                'full_name' => 'Alex Morgan',
                'role' => 'Administrator',
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Jamie Lee',
                'role' => 'Cashier',
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Taylor Kim',
                'role' => 'Cashier',
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Jordan Cruz',
                'role' => 'Manager',
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Casey Reyes',
                'role' => 'Staff',
            ],
        ];

        return view('users', ['users' => $users]);
    }
}