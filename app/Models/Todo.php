<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create($validated)
 * @method static findOrFail(string $id)
 */
class Todo extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'completed'
    ];
}
