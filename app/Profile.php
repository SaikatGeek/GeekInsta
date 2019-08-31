<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $guarded = [];

    public function user(){

    	return $this->belongsTo(User::class);
    }

    public function profileImage(){

    	$imagePath = ($this->image) ? $this->image : 'profile/jPEDYRjCxN5e7162nt4RJrXGaO8lOFvfeKtlkaBs.jpeg';

    	return  '/storage/' . $imagePath; 
    }

    public function followers(){

    	return $this->belongsToMany(User::class);
    }

}
