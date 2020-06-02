<?php

namespace App\Services;

use Illuminate\Http\Request;

class FilterService {
    function filter($filter, $request) {
        if($request->has('owner')) 
            $filter->where('owner','LIKE','%'.$request->input('owner').'%');
        if(intval($request->input('more_than')) != 0) 
            $filter->where('years','>=',intval($request->input('more_than')));
        if(intval($request->input('less_than')) != 0) 
            $filter->where('years','<=',intval($request->input('less_than')));
        if(intval($request->input('numb_of_owners')) != 0) 
            $filter->where('numb_of_owners','=',intval($request->input('numb_of_owners')));
        if($request->has('model')) 
            $filter->orderBy('brands.brand_name');
    }
}