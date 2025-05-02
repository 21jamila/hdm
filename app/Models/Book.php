<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'author',
        'borrowed_by',
        'due_date',
    ];

    public function borrower()
    {
        return $this->belongsTo(User::class, 'borrowed_by');
    }
}
