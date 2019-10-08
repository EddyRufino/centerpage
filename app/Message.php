<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = [];

    public function user()
    {
    	return $this->belonsTo(User::class);
    }

    public function isAdmin()
    {
        return $this->hasRoles(['admin']);
    }

  //   public function setAuthAttribute($user_id)
  //   {
		// $this->attributes['user_id'] = auth()->$user_id;
  //   }

    public function scopeAllowed($query) {

      if (auth()->user()->isAdmin())
      {
        return $query;
      }

		  return $query->where('user_id', auth()->id());

    }
}
