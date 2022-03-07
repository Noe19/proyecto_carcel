<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use App\Models\Role;
use App\Models\User;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'login_field' => ['required', 'string'],
            'password' => ['required', 'string'],
        ];

    }

    public function authenticate()
    {
        $this->ensureIsNotRateLimited();

        $id_prisioner = Role::where('name','prisoner')->first()->id;
        $username_email= $this->input('login_field');

       // dd($id_prisioner);

        $this->ensureIsNotRateLimited();
        $user_roleId_email = User::where('email',$this->input('login_field'))->first();
        $user_roleId_username = User::where('username',$this->input('login_field'))->first();
        if($user_roleId_email){
            $user_roleId=$user_roleId_email -> role_id;
        }
        else{
            $user_roleId=$user_roleId_username -> role_id;
        }
        if($user_roleId===$id_prisioner){
            $username_email='xxxx';
         }


        $email_exist = Auth::attempt(['email' => $username_email, 'password' => $this->input('password')], $this->boolean('remember'));


        $username_exist = Auth::attempt(['username' => $username_email, 'password' => $this->input('password')], $this->boolean('remember'));


        if (!$email_exist && !$username_exist)

        {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());
    }


    public function ensureIsNotRateLimited()
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 2)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }


    public function throttleKey()
    {
        return Str::lower($this->input('email')).'|'.$this->ip();
    }
}