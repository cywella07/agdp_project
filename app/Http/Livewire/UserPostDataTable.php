<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Illuminate\Support\Facades\Validator;
use App\Models\UserPost;

class UserPostDataTable extends LivewireDatatable
{
    
    protected $listeners = ['storeData' => 'store', 'updateData' => 'update', 'deleteData' => 'delete'];
    public $model = UserPost::class;
    protected $debug = true;
    
    public function builder()
    {
        return UserPost::query()->where('user_id', '=', Auth::user()->id);
    }

    public function columns()
    {
        return [
            Column::name('title')->label('Title'),
            Column::name('description')->label('Description'),
            Column::callback(['id'], function ($id) {
            
                $link = url('/posts');
                $buttons = [
                    'edit' => Auth::user()->hasPermissionTo('can.edit.userposts'),
                    'view' => Auth::user()->hasPermissionTo('can.view.userposts'),
                    'delete' => Auth::user()->hasPermissionTo('can.delete.userposts'),
                ];
            
                $data = UserPost::find($id);
                return view('pages.components.data_table.user-type-actions', compact('id', 'buttons', 'link','data'));
            })->unsortable()->label('Action'),
        ];
    }
   

}
