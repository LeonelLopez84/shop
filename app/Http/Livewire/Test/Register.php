<?php

namespace App\Http\Livewire\Test;

use Livewire\Component;
use App\Models\User;

class Register extends Component
{
    public $name='';
    public $email='';
    public $password='';
    public $password_confirmation='';

    public function register()
    {

                $data =  $this->validate([
                    'name' => 'required|min:5',
                    'email' => 'required|email|unique:users,email',
                    'password'=>'required|min:6|confirmed'
                ]);

                try {

                User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password'])
                ]);

                redirect ('/admin/users');
            }catch (\Exception $e){
                dd([$e->getMessage(),$e->getTrace()]);
            }
    }

    public function render()
    {
        return view('livewire.test.register')->layout('layouts.admin');
    }
}
