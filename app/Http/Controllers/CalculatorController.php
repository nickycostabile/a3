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
	public function createCalc() {
		return view('calculator');

	}

    
    /**
	* POST
    * /calculator
    * Process of calculating bill / person
	*/
    public function calculate(Request $request) {

		# Validation
		$this->validate($request, [
			'billAmount' => 'required|min:1',
			'numPeople' => 'required|numeric|min:2',
		]);

		# If Form method is POST
		$method = $request->method();

		if ($request->isMethod('POST')) {

			$billAmount = floatval($request->input('billAmount', null));
	    	$numPeople = intval($request->input('numPeople', 2));


	    	$tipIncluded = $request->has('tipIncluded');

		    	if($tipIncluded == false) {
		    		$tipPercentage = floatval($request->input('tipPercentage', null));
					
					$billAmount = (1 + ($tipPercentage / 100)) * $billAmount;
				} # end if tipIncluded = false


			$personAmount = $billAmount / $numPeople;
			dump($personAmount);

			$round = $request->has('round');

				if($round == true) {
					$personAmount = round($personAmount, 0);
				}

		} # end if post


		return view('calculator')->with([
		        'personAmount' => $personAmount,
		    ]);
		

    }




} # end class controller 