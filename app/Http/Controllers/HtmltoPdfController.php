<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Barryvdh\DomPDF\PDF;
use App\Portfolio;
//use Code2prog\Larathena\LarathenaPdf;
use niklasravnsborg\LaravelPdf\Pdf;
//use Mpdf\Pdf;
use Mpdf;


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

		$pdf = new Mpdf();
		$pdf = $pdf->loadView('pdf.homepage');
//		$pdf->SetProtection(['copy', 'print'], '', 'pass');
		return $pdf->stream('document.pdf');

		$larathena = new LarathenaPdf();
		return $larathena->loadView( 'pdf.homepage' )
		          ->setOutputFilename( 'test_pdf.pdf' )->stream();
		$out = $larathena->save();
		return $out;
		$out = $larathena->save();


		$pdf = \PDF::loadHtml('<h1>amir</h1>');
		return $pdf->stream();
		return $pdf->download('amir.pdf');
		$portfolioDetail = $this->portfolio->find(4);
		$portfolio       = $this->portfolio->get();
		$pdf = \PDF::loadView('portfolio_detail' , compact('portfolioDetail','portfolio'));
		return $pdf->download('portfolio_detail.pdf');
		return view('portfolio_detail' , compact('portfolioDetail','portfolio'));
		//return view('pdf.template.HTML5App&WebsiteProposalTemplate');
	}

	public function htmldompdf(){
		$conv = new \Anam\PhantomMagick\Converter();
		$conv->source('http://google.com')
		     ->toPng()
		     ->save('/your/destination/path/google.png');
	}

}
