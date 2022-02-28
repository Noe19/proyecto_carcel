<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    
    public function toArray($request)
    {

        
        // https://laravel.com/docs/8.x/eloquent-resources#writing-resources
        return [
            'name' => $this->getFullName(),
            'role' => $this->role->name,
            'email' => $this->email,
            'nickname' => $this->username,
            'birthdate' => $this->birthdate,
            'personal_phone' => $this->personal_phone,
            'home_phone' => $this->home_phone,
            'address' => $this->address,
        ];




    }



}