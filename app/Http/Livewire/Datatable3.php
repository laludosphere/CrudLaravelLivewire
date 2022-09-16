<?php

namespace App\Http\Livewire;

use App\models\Book;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Datatable3 extends LivewireDatatable
{
    public $model = Book::class;

    public function columns()
    {
        return [
            NumberColumn::name('id')
                ->label('ID')
                ->linkTo('job', 6),
            Column::name('title')
                ->label('Titre')
                ->filterable('title')
                ->defaultSort('asc')
                ->group('group1')
                ->searchable()
                ->hideable()
                ->filterable(['Maxime ut quo eius.', '	Maiores officiis aperiam aut']),


            Column::name('user.name')
                ->label('Auteur'),
        ];
    }
}
