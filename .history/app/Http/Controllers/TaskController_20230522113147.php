<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function showTask(string $name = '')
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
            ],
            'test' => [
                'team_name' => 'Test',
                'task' => ''
            ]
        ];

        if($name === '') {
            return 'Erreur: pas de tâche sélectionnée';
        }

        if(!isset($tasksList[$name])) {
            return 'Erreur: cette tâche n\'existe pas';
        }

        $task = $tasksList[$name];

        if(!$task['task']) {
            return 'Erreur: il n\'y a pas de tâche attribuée';
        }

        return view('task', [
            'task' => $task
        ]);
    }

    public function list(string $name = '')
    {
        

        return view('task', [
            'task' => $task
        ]);
    }
}
