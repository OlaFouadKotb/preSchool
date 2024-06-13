<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kid extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'Name',
        'Birthday',
        'Age',
        'class_id',
        'guardian_id',
    ];

    /**
     * The classes that the kid belongs to.
     */
    public function classes()
    {
        return $this->belongsToMany(Ciass::class, 'class_kid', 'kid_id', 'class_id');
    }
}
