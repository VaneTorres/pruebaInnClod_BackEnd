<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tip_tipo_doc extends Model
{
    use HasFactory;
    protected $table = 'tip_tipo_docs';
    public function doc_documento()
    {
        return $this->hasMany(doc_documento::class, 'tip_id');
    }
}
