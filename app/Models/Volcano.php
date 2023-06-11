<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Volcano extends Model
{
    use HasFactory;

    protected $table = "volcanos";
    protected $primaryKey = "id";
    protected $fillable = ["name","height","country","last_event"];
}
