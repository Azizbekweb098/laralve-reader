<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReaderTwo extends Model
{
    use HasFactory;

    protected $table = 'readerstwo';

   protected $fillable = ['name', 'surname', 'age'];

   protected $primaryKey = 'hohlagan_id';

   protected $keyType = 'string';
}
