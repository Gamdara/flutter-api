<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangResource extends Model
{
    protected $fillable = ['nama','deskripsi','stok'];
}
