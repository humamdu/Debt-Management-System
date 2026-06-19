<?php
namespace App\Models;use Illuminate\Database\Eloquent\Model;use Illuminate\Database\Eloquent\SoftDeletes;class Payment extends Model{use BelongsToOrganization,SoftDeletes;protected $guarded=[];protected $casts=['payment_date'=>'date'];public function allocations(){return $this->hasMany(PaymentAllocation::class);}}
