<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // Query Scopes
    public function scopeIncomplete ($query) {
      return $query->where('completed',0); //App\Task::incomplete()->get();

    }
}
