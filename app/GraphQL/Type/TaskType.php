<?php

namespace App\GraphQL\Type;

use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;
use GraphQL\Type\Definition\Type;

class TaskType extends BaseType
{
    protected $attributes = [
        'name' => 'Task',
        'description' => 'A task',
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of a task',
            ],
            'title' => [
                'type' => Type::string(),
                'description' => 'The title of a task',
            ],
            'is_completed' => [
                'type' => Type::boolean(),
                'description' => 'The status of a task',
            ],
        ];
    }
}
