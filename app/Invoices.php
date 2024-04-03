<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoices extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'invoice_number',
        'invoice_Date',
        'due_date',
        'product',
        'section_id',
        'Amount_Collection',
        'Amount_Commission',
        'Discount',
        'Value_Vat',
        'Rate_Vat',
        'Total',
        'Status',
        'value_status',
        'note',
        'Payment_Date',
    ];
    protected $dates = ['deleted_at'];

 public function section()
   {
   return $this->belongsTo('App\sections');
   }
}
