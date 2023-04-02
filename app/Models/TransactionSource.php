<?php

namespace App\Models;

use App\Models\Transaction;
use App\Models\TransactionType;
use App\Models\ProfitLossComponent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransactionSource extends Model
{
    // use HasFactory;
    protected $table ='transaction_sources';

    public function transaction(){
        return $this->hasMany(Transaction::class);
    }

    // public function transactionTypes(){
    //     return $this->belongsTo(TransactionType::class, 'transaction_type_id');
    // }

    public function profitLossComponent(){
        return $this->belongsTo(ProfitLossComponent::class, 'profit_loss_component_id');
    }

    // protected $fillable =['transaction_source_name', 'transaction_type_id', 'profit_loss_component_id'];
    protected $fillable =['transaction_source_name', 'profit_loss_component_id'];
}
