<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doc_documento extends Model
{
    use HasFactory;
    protected $table = 'doc_documentos';
    protected $fillable = [
        "doc_nombre",
        "tip_id",
        "pro_id",
        "doc_contenido",
    ];
    public function tip_tipo_doc()
    {
        return $this->belongsTo(tip_tipo_doc::class, 'tip_id');
    }
    public function pro_proceso()
    {
        return $this->belongsTo(pro_proceso::class, 'pro_id');
    }
}
