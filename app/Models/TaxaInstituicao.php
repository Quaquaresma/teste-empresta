<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TaxaInstituicao extends Model
{
    protected $table = 'taxa_instituicoes';

    public int $parcelas;
    public float $taxaJuros;
    public float $coeficiente;

    public function instituicao(): BelongsTo {
        return $this->belongsTo(Instituicao::class, 'instituicao_id');
    }

    public function convenio(): BelongsTo {
        return $this->belongsTo(Convenio::class, 'convenio_id');
    }

    protected $fillable = ['parcelas', 'taxaJuros', 'coeficiente', 'instituicao_id', 'convenio_id'];
    protected $visible = ['parcelas', 'taxaJuros', 'coeficiente'];
}
