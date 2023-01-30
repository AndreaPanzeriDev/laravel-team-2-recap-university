<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table = 'exams';
    protected $fillable = [
        'date',
        'hour',
        'location',
        'address',
        'courses_id'
    ];

    public function course(){
        return $this->belongsTo('App\Models\Course', 'courses_id');

    }
}
