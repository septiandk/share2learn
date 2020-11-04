<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Fpdf;
use App\guru;
use Cmgmyr\Messenger\Models\Participant;
use Cmgmyr\Messenger\Models\Thread;
use DB;


class cetakPdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tampil');
    }

    public function cetakpdf(){


        $pdf = new Fpdf();
        $pdf::AddPage();
        $pdf::SetFont('Arial','B',18);
        $pdf::Cell(0,10,"Data Guru",0,"","C");
        $pdf::Ln();
        $pdf::Ln();
        $pdf::SetFont('Arial','B',12);
        $pdf::cell(35,8,"Participants id",1,"","L");
        $pdf::cell(25,8,"User id",1,"","C");
        $pdf::cell(25,8,"Nama",1,"","C");
        $pdf::cell(35,8,"email",1,"","C");
        $pdf::cell(35,8,"keterangan",1,"","C");
        $pdf::cell(25,8,"Level",1,"","C");
        $pdf::Ln();
        $pdf::SetFont("Arial","",12);
        $dataprint = DB::select('SELECT p.id, p.user_id, u.name,u.email, u.keterangan, u.level FROM participants p INNER JOIN users u ON p.user_id=u.id INNER JOIN threads t ON p.thread_id=t.id where p.id=u.id');
        foreach($dataprint as $print){
            $pdf::Cell(5,7,$print->id,1,"","C");
            $pdf::Cell(25,7,$print->user_id,1,"","C");
            $pdf::Cell(25,7,$print->name,1,"","L");
			$pdf::Cell(35,7,$print->email,1,"","L");
            $pdf::Cell(35,7,$print->keterangan,1,"","C");
            $pdf::Cell(25,7,$print->level,1,"","C");

            $pdf::Ln();
        }

        $pdf::Output();
        exit;
    }

   
}
