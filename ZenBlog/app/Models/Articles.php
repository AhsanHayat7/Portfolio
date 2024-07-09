<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Articles extends Model
{
    use HasFactory;
    protected $table = "articles";
    protected $primaryKey = "id";

}
