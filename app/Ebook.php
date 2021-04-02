<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
    protected $fillable = [
        'year', 'category_id', 'name','description','link','status'
    ];
}
