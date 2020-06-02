<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class FilterForm extends Form
{
    public function buildForm()
    {
        $thisYear = now()->year;
        $this
            ->add('model', 'checkbox', [
                'label' => 'Rikiuoti pagal modelį',
                'rules' => 'min:0|max:1',
            ])
            ->add('more_than', 'number', [
                'label' => 'Metai nuo',
                'rules' => 'max:'.$thisYear,
            ] )
            ->add('less_than', 'number', [
                'label' => 'Metai iki',
                'rules' => 'max:'.$thisYear,
            ])
            ->add('owner', 'text', [
                'label' => 'Savininko vardas'
            ])
            ->add('numb_of_owners', 'number', [
                'label' => 'Savininkų skaičius',
                'rules' => 'max:100',
            ])
            ->add('submit', 'submit', [
                'label' => 'Filtruoti'
            ]);
    }
}
