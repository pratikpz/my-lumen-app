<?php

// app/Models/Task.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // Define the table name if it's different from the default (e.g., tasks)
    protected $table = 'tasks2';

    // Define the fillable attributes (columns that can be mass-assigned)
    protected $fillable = ['title', 'description', 'status'];

    // Optionally, you can define any hidden attributes that shouldn't be included in JSON responses
    // protected $hidden = ['created_at', 'updated_at'];

    // You can also define any other relationships or custom methods here
}
