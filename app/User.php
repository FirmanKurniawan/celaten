<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Katejabatan;

class User extends Authenticatable
{

    public function katejabatan()
    {
        return $this->belongsTo(Katejabatan::class, 'jabatan_id');
    }

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $guarded = [];
    
    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function isMaster()
    {
        if($this->role == 1) return true;
        return false;
    }
    public function isKepsek()
    {
        if($this->role == 2) return true;
        return false;
    }
    public function isGuru()
    {
        if($this->role == 3) return true;
        return false;
    }
    public function isKaryawan()
    {
        if($this->role == 4) return true;
        return false;
    }
}
