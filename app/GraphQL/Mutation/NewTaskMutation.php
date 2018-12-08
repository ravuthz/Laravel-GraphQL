<?php

namespace App\GraphQL\Mutation;

use App\Task;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;
use GraphQL\Type\Definition\Type;

class NewTaskMutation extends Mutation
{
    protected $attributes = [
        'name' => 'newTask',
    ];

    public function type()
    {
        return GraphQL::type('Task');
    }

    public function args()
    {
        return [
            'title' => [
                'name' => 'title',
                'type' => Type::nonNull(Type::string()),
                'rules' => ['required'],
            ],
        ];
    }

    public function resolve($root, $args)
    {
        $task = new Task();

        $task->title = $args['title'];
        $task->save();

        return Task::find($task->id);
    }
}
