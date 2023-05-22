<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function showTask(string $team = '')
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
                'team_name' => 'Technical',
                'task' => 'customer support'
            ]
        ];

        if($team === '') {
            return 'Erreur: pas d\'équipe sélectionnée';
        }

        if(!isset($tasksList[$team])) {
            return 'Erreur: cette équipe n\existe pas';
        }

        $task = $tasksList[$team];

        if(!$task['task']) {
            return 'Erreur: il n\y a pas de tâche attribuée';
        }

        return view('task', [

        ]);
    }
}
