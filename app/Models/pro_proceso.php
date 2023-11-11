<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pro_proceso extends Model
{
    use HasFactory;
    protected $table = 'pro_procesos';
    public function doc_documento()
    {
        return $this->hasMany(doc_documento::class, 'pro_id');
    }
}
