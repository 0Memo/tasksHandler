<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function showTask(Request  $request, string $team)
    {
        $tasksList = [
            'admin' =>
                [
                    'team' => 'Admin',
                    'task' => 'invoicing'
                ],
            'technical' =>
                [
                    'team' => 'Technical',
                    'task' => 'customer support'
                ],
            'Dev' =>
                [
                    'team' => 'Dev',
                    'task' => 'web update and creation'
                ]
        ];

        return view('')
    }
}
