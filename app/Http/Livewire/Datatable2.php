<?php

namespace App\Http\Livewire;

use App\Models\User;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable,
    Column,
    NumberColumn,
    DateColumn,
    Action;


class Datatable2 extends LivewireDatatable
{
    public $model = User::class;
    public $complex = true;
}
