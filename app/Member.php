<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Member extends Model
{
    protected $table = 'members';
    protected $fillable = ['id', 'username', 'mail', 'password', 'sex', 'levels_id'];
    public $timestamps = false;

   public function level(){
       return $this->belongsTo('App\Level');
   }

   public function validateMember(){
       $id = DB::table('members')
            ->where('mail', 'LIKE', $this->mail)
            ->get();
       if(count($id) != 0){
          return false;
       }
       return true;
   }
}
