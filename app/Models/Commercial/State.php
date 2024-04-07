<?php

namespace App\Models\Commercial;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class State extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['id', 'name', 'uf'];
}
