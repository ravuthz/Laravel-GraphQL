<?php

namespace App\GraphQL\Query;

use App\Task;
use Folklore\GraphQL\Support\Query;
use GraphQL;
use GraphQL\Type\Definition\Type;

class TasksQuery extends Query
{
    protected $attributes = [
        'name' => 'tasks',
    ];

    public function type()
    {
        return Type::listOf(GraphQL::type('Task'));
    }

    public function resolve($root, $args)
    {
        return Task::all();
    }
}
