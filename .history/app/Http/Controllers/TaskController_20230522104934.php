<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function showTask(Request  $request, string $team)
    {
        $tasksList = [
            'Admin' =
            [
                'team' => 'Admin',
                'task' => 'invoicing'
            ],
            [
                'team' => 'Technical',
                'task' => 'customer support'
            ],
            [
                'team' => 'Dev',
                'task' => 'web update and creation'
            ]
        ];

        return view('')
    }
}
