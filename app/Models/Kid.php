<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Kid extends Model
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



    public function courses()
    {
        return $this->belongsToMany(Ciass::class);
    }

}
