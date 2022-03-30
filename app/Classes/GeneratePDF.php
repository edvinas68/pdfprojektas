<?php
	 
     namespace App\Classes;
      
     use mikehaertl\pdftk\Pdf;
      
      
     class GeneratePDF {
      
      
         public function generate($data)
         {
             $filename = '(pdf_)' . rand(2000 , 1200000) . '.pdf';
      
             $pdf = new Pdf('./test.pdf');
             
             $pdf->fillForm($data)
             //->flatten()
             ->needAppearances()
             ->saveAs('./completed/' . $filename);
      
             return $filename;
         }
         
      
      
     }