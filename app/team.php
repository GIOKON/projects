<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
  protected $fillable = [
      'team_name', 'desc',
  ];

  protected $casts=[
    'org_select'=>'array'
  ];

  protected $table='teams';

  public function users(){
    return $this->belongsToMany(User::class,'team_user','teams_id', 'users_id');
  }
}
