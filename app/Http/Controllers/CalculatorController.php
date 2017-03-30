<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller {

# app/Http/Controllers/CalculatorController.php

	/**
	* GET
	* /calculator
	* Display the form to calculate
	*/
	public function createCalc(Request $request) {
		return view('calculator');

	}

    
    /**
	* GET
    * /calculator
    * Process of calculating bill / person
	*/
    public function calculate(Request $request) {

	   	# If Form is Submitted via GET
	    $method = $request->method();

		if ($request->isMethod('get')) {

	    	$billAmount = floatval($request->input('billAmount', null));
	    	$numPeople = intval($request->input('numPeople', null));


	    	$tipIncluded = $request->has('tipIncluded');
	    	

		    	if($tipIncluded == false) {
		    		$tipPercentage = floatval($request->input('tipPercentage', null));
					
					$billAmount = (1 + ($tipPercentage / 100)) * $billAmount;
				} # end if tipIncluded = false



		/*
			# Validation
			$this->validate($request, [
				'billAmount' => 'required|min:1',
				'numPeople' => 'required|numeric|min:2'
			]);

			if($errors) {
				$personAmount = [];
			}
			else {
				$personAmount = $billAmount / $numPeople;		
			}
		*/
		

		
			$personAmount = $billAmount / $numPeople;
			
			$round = $request->has('round');

				if($round == true) {
					$personAmount = round($personAmount, 0);
				}

		} # end if get


    	return view('calculator')->with([
			'personAmount' => $personAmount
			]);
    }



} # end class controller 