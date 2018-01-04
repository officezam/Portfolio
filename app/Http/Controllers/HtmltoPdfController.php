<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;
use App\service;


class HtmltoPdfController extends Controller
{

	public function __construct()
	{
		$this->service = new service();
	}

	public function htmlToPdf($service_id){
		$portfolioDetail = $this->service->find($service_id);
		$portfolio       = $this->service->get();
//		return view('pdf.index' , compact('portfolioDetail','portfolio'));
//		$pdf = \PDF::setOption('header-html', base_path('views/pdf/header.html'));
//		$pdf = $pdf->setOption('footer-html', base_path('views/pdf/footer.html'));
		$pdf = \PDF::loadView('pdf.index', compact('portfolioDetail','portfolio'));
		return $pdf->stream('document.pdf');
	}


	public function template(){
//		return view('pdf.homepage' );

		$pdf = \PDF::loadView('pdf.index');
		return $pdf->stream('document.pdf');
		$pdf = \PDF::getDomPDF()->set_option('enable_html5_parser', true);
		$pdf = $pdf->loadView('pdf.index');
		return $pdf->download('invoice.pdf');




		$portfolioDetail = $this->service->find(7);
		$portfolio       = $this->service->get();
		$pdf = \PDF::loadView('portfolio_detail' , compact('portfolioDetail','portfolio'));
		return $pdf->download('portfolio_detail.pdf');
		return view('portfolio_detail' , compact('portfolioDetail','portfolio'));
		//return view('pdf.template.HTML5App&WebsiteProposalTemplate');
	}


}
