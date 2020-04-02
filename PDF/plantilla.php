<?php
    require 'fpdf/fpdf.php';
    
    class PDF extends FPDF
    {


        function Header()
        {
            $this->Image('images/logo.jpg', 15, 5, 30 );
            $this->SetFont('Arial','B',18);
            $this->Cell(200,10, 'Servicio Tecnico Computacional',0,1,'C');
            $this->Cell(30);
            
            $this->Cell(120,50, ' Entrega de Computadora',0,0,'C');
            $this->Ln(30);
        }
        
        function Footer()
        {
            $this->SetY(-15);
            $this->SetFont('Arial','I', 8);
            $this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
        }       
    }
?>