<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithSorting;

class Table extends Component
{
    use WithPagination;
    use WithSorting;

    public $search='';
    public $perPage=5;

    protected $queryString=['search'=>['except'=>''],
                            'perPage'=>['except'=>'5']
                            ];


    public function render()
    {
        $users = User::where('name','LIKE',"%{$this->search}%")
                    ->orWhere('email','LIKE',"%{$this->search}%")
                    ->orderBy($this->sortBy,$this->sortDirection)
                    ->paginate($this->perPage);

        return view('livewire.users.table',['users'=>$users])->layout('layouts.admin');
    }

    public function search()
    {
        $this->resetPage();
    }

    public function clear()
    {
        $this->search='';
        $this->perPage='5';
    }

}
