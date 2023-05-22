<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function showTask()
    {
        $tasksList = [
            [
                'team' => 'Admin',
                'task' => 'invoicing'
            ],
            [
                'team' => 'Technical',
                'task' => 'customer support'
            ],
        ];
    }
}
