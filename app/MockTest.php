<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MockTest extends Model
{
    protected $fillable = [
        'status', 'exam_id', 'date', 'start_time', 'end_time',
    ];
}
