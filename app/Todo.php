<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [ # Only for $todo = Todo::create($request->all());
      'title',
    ];
}
