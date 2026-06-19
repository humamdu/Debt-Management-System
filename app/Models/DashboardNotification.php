<?php
namespace App\Models;use Illuminate\Database\Eloquent\Model;class DashboardNotification extends Model{use BelongsToOrganization;protected $guarded=[];protected $casts=['is_read'=>'bool'];}
