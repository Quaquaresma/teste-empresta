<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Instituicao extends Model
{
    protected $table = 'instituicoes';
    public string $chave;
    public string $valor;

    public function taxasInstituicao(): HasMany {
        return $this->hasMany(TaxaInstituicao::class);
    }

    protected $fillable = ['chave', 'valor'];
    protected $visible = ['chave', 'valor'];

}
