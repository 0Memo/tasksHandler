<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function showTask(string $name = '')
    {
        $tasksList = [
            'admin' => [
                'team' => 'Admin',
                'task' => 'invoicing'
            ],
            'technical' => [
                'team' => 'Technical',
                'task' => 'customer support'
            ],
            'dev' => [
                'team' => 'Dev',
                'task' => 'web update and creation'
            ],
            'test' => [
                'team' => 'Test',
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

    public function list()
    {
        $tasksList = [
            'admin' => [
                'team' => 'Admin',
                'task' => 'invoicing'
            ],
            'technical' => [
                'team' => 'Technical',
                'task' => 'customer support'
            ],
            'dev' => [
                'team' => 'Dev',
                'task' => 'web update and creation'
            ],
            'test' => [
                'team' => 'Test',
                'task' => ''
            ]
        ];
        
        return view('tasksList', [
            'tasks' => $tasksList
        ]);
    }

    public function form()
    {
        return view()
    }
}
