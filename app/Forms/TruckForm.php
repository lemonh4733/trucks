<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use App\Brand;

class TruckForm extends Form
{

    public function buildForm()
    {
        $thisYear = now()->year;
        $brands = Brand::all();
        $options = [];
        foreach ($brands as $brand) {
            $options[$brand->id] = $brand->brand_name;
        }
        $this
            ->add('brand_id', 'select', [
                'choices' => $options,
                'rules' => 'required',
                'label' => 'Markė'
            ])
            ->add('years', 'number', [
                'rules' => 'required|numeric|min:1900|max:'.$thisYear.'',
                'label' => 'Gamybos metai'
            ])
            ->add('owner', 'text', [
                'rules' => 'required',
                'label' => 'Savininko vardas pavardė'
            ])
            ->add('numb_of_owners', 'number', [
                'rules' => 'max:100',
                'label' => 'Savininkų skaičius'
            ])
            ->add('comment', 'textarea', [
                'rules' => 'max:225',
                'label' => 'Komentarai'
            ])
            ->add('submit', 'submit', [
                'label' => 'Pateikti'
            ]);
    }
}
