<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Truck;
use App\Brand;
use App\Forms\FilterForm;
use App\Services\FilterService;

class HomeController extends Controller
{
    public function index(FormBuilder $formBuilder) {
        $title = 'Pagrindinis';
        $form = $formBuilder->create(FilterForm::class, [
            'method' => 'GET',
            'url' => '/filter'
        ]);
        $trucks = Truck::all();
        $errorMessage = "Sunkvežimių nėra!";
        return view('trucks.home', compact('title', 'form', 'trucks', 'errorMessage'));
    }

    //Home page sunkvežimių filtravimas
    public function filter(FormBuilder $formBuilder, Request $request, Truck $truck, FilterService $filterService)
    {
        $title = 'Pagrindinis';
        //tikrina ar forma užpildyta gerai
        $form = $formBuilder->create(FilterForm::class);
        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }
        //Paima sunkvežimius ir jų modelius
        $truck = Truck::query()
                ->select('*', 'trucks.id as id')
                ->join('brands', 'trucks.brand_id', 'brands.id');
        //Filtravimo service
        $filterService->filter($truck, $request);
        //Gražina filtruotą obj
        $trucks = $truck->paginate(10);
        $errorMessage = "Nėra sunkvežimių atitinkančių jūsų paiešką!";

        return view('trucks.home', compact('title', 'form', 'trucks', 'errorMessage'));
    }
}
