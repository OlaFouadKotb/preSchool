<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ciass extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'ClassName',
        'TeacherName',
        'Title', 
        'TeacherImage',
        'Price', 
        'Age', 
        'Time', 
        'Capacity',
];


    /**
     * The children that belong to the class_prechool.
     */
    public function children()
    {

        return $this->belongsToMany(Kid::class);
    }
}

