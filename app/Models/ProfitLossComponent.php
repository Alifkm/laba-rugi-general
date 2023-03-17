<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfitLossComponent extends Model
{
    // use HasFactory;

    protected $table ='profit_loss_components';

    public function transactionSources(){
        return $this->hasMany(TransactionSource::class);
    }

    protected $fillable =['profit_loss_component_name'];
}
