<?php

namespace App\Http\Controllers;

use App\Truck;
use App\Rules\TwoWordsRule;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Forms\TruckForm;

class TruckController extends Controller
{
    public function create(FormBuilder $formBuilder) {
        $title = 'Pridėti naują sunkvežimį';
        //Sukuria formą
        $form = $formBuilder->create(TruckForm::class, [
            'method' => 'POST',
            'url' => route('truck.store')
        ]);
        return view('trucks.add-truck', compact('form', 'title'));
    }
    public function store(FormBuilder $formBuilder, Request $request)
    {
        //Vardą ir pavardę turi sudaryt 2 žodžiai
        $this->validate($request, ['owner' => new TwoWordsRule]);
        //tikrina ar forma užpildyta gerai
        $form = $formBuilder->create(TruckForm::class);
        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }
        //Sukuria naują įrašą
        Truck::create($request->only(['brand_id', 'years', 'owner', 'numb_of_owners', 'comment']));
        return redirect('/')->with('success', 'Sunkvežimis sėkmingai pridėtas');

    }
    public function updateView(Truck $truck, FormBuilder $formBuilder) {
        $title = 'Redaguoti sunkvežimį';
        $form = $formBuilder->create(TruckForm::class, [
            'method' => 'POST',
            'url' => 'trucks/update/'.$truck->id,
        ]);
        return view('trucks.add-truck', compact('form', 'title'));
    }
    public function update(Truck $truck, FormBuilder $formBuilder, Request $request)
    {
        //Vardą ir pavardę turi sudaryt 2 žodžiai
        $this->validate($request, ['owner' => new TwoWordsRule]);
        //tikrina ar forma užpildyta gerai
        $form = $formBuilder->create(TruckForm::class);
        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }
        //Atnaujina įrašą
        Truck::where('id',$truck->id)->update($request->only(['brand_id', 'years', 'owner', 'numb_of_owners', 'comment']));
        return redirect('/')->with('success', 'Sunkvežimis sėkmingai atnaujintas');

    }

    public function destroy(Truck $truck) {
        $truck->delete();
        return redirect('/')->with('danger', 'Sunkvežimis ištrintas');
    }
}
