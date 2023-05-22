<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function showTask(Request  $request, string $team_name)
    {
        $tasksList = [
            'admin' => [
                'team_name' => 'Admin',
                'task' => 'invoicing'
            ],
            'technical' => [
                'team_name' => 'Technical',
                'task' => 'customer support'
            ],
            'dev' => [
                'team_name' => 'Dev',
                'task' => 'web update and creation'
            ]
        ];

        return view('task', );
    }
}
