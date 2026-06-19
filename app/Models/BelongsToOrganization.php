<?php
namespace App\Models;use Illuminate\Database\Eloquent\Builder;
trait BelongsToOrganization{protected static function bootBelongsToOrganization():void{static::addGlobalScope('organization',function(Builder $q){$u=auth()->user();if($u&&!$u->hasRole('Super Admin'))$q->where($q->getModel()->getTable().'.organization_id',$u->organization_id);});static::creating(function($m){if(!$m->organization_id&&auth()->check())$m->organization_id=auth()->user()->organization_id;});}}
