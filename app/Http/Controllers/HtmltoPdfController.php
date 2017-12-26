<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;
use App\Portfolio;

class HtmltoPdfController extends Controller
{

	public function __construct()
	{
		$this->portfolio = new Portfolio();
		//$this->pdf = new PDF();
	}

	public function htmlToPdf(){

		$pdf = \PDF::loadHTML('pdf.homepage');
		return $pdf->download('invoice.pdf');



		$pdf = \PDF::loadView('pdf.homepage');
		return $pdf->download('invoice.pdf');
//		return view('pdf.homepage');
	}


	public function template(){
//		return view('pdf.homepage' );
		$pdf = \PDF::loadView('pdf.homepage')->output();
		exit;
		return $pdf->output();
		$portfolioDetail = $this->portfolio->find(4);
		$portfolio       = $this->portfolio->get();
		$pdf = \PDF::loadView('portfolio_detail' , compact('portfolioDetail','portfolio'));
		return $pdf->download('portfolio_detail.pdf');
		return view('portfolio_detail' , compact('portfolioDetail','portfolio'));
		//return view('pdf.template.HTML5App&WebsiteProposalTemplate');
	}

}
