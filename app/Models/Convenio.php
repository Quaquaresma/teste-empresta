<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Convenio extends Model
{
    protected $table = 'convenios';

    public string $chave;
    public string $valor;

    public function taxasInstituicao(): HasMany {
        return $this->hasMany(TaxaInstituicao::class);
    }

    protected $fillable = ['chave', 'valor'];
    protected $visible = ['chave', 'valor'];
}
