<?php
namespace App\Models;use Illuminate\Database\Eloquent\Model;use Illuminate\Database\Eloquent\SoftDeletes;class Debt extends Model{use BelongsToOrganization,SoftDeletes;protected $guarded=[];protected $casts=['issue_date'=>'date','due_date'=>'date'];public function items(){return $this->hasMany(DebtItem::class);}public function allocations(){return $this->hasMany(PaymentAllocation::class);}}
