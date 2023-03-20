<?php

namespace App\Models;

use App\Models\Transaction;
use App\Models\TransactionSource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransactionType extends Model
{
    // use HasFactory;
    protected $table ='transaction_types';

    public function transaction(){
        return $this->hasOne(Transaction::class);
    }

    // public function transactionSources(){
    //     return $this->hasOne(TransactionSource::class);
    // }

    protected $fillable =['transaction_type_name'];
}
