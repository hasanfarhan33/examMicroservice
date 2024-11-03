<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $connection = 'exam_service_db'; 
    protected $table = 'exams'; 

    protected $fillable = [
        'startDate', 
        'endDate'
    ]; 

    public $timestamps = false; 
}
