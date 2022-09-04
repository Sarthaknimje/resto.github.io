<?php

        if(!empty($_POST['submit']));
        {
            $fn=$_POST['firstname'];
           // $ln=$_POST['lastname'];
            $on=$_POST['ordername'];
           $mn=$_POST['mobilenumber'];
           $em=$_POST['email'];
            $add=$_POST['adr'];
           // $msg=$_POST['massage'];
            

            require("pdf/fpdf.php");
            $detail=new FPDF();
            $detail->AddPage();
            $detail->SetFont("Arial","B",16);
            $detail->Cell(0,20,"Thank You Dear Customer For Odering From Us ",1,1,'C'); 
            $detail->Cell(0,15,"",0,1,'C');
            $detail->SetFont("Arial","",16);
            $detail->Cell(0,10,"Your Order details",0,1,'C'); 
            $detail->SetFont("Arial","",16);
            $detail->Cell(100,15,"Hello Mr/Miss  ",0,0,'R');
            $detail->SetFont("Arial","B",16);
            $detail->Cell(0,15,$fn,0,1,'  R');
            $detail->SetFont("Arial","",16);
            $detail->Cell(100,15,"Your Order : ",0,0,'R');
            $detail->SetFont("Arial","B",16);
            $detail->Cell(0,15,$on,0,1,'L');
            $detail->SetFont("Arial","",16);
            $detail->Cell(100,15,"Tracking Link Sent On Email  : ",0,0,'R');
            $detail->SetFont("Arial","I",16);
            $detail->Cell(0,15,$em,0,1,'L');

            $detail->SetFont("Arial","",16);
            $detail->Cell(100,15,"Your Order Will Deleiver At  : ",0,0,'R');
            $detail->SetFont("Arial","B",16);
            $detail->Cell(0,15,$add,0,1,'L');




            $detail->SetFont("Arial","",16);
            $detail->Cell(100,15,"Your Mobile Number  : ",0,0,'R');
            $detail->SetFont("Arial","B",16);
            $detail->Cell(0,15,$mn,0,1,'L');



            $detail->Cell(0,15,"",0,1,'C');
            $detail->SetFont("Arial","",16);
            $detail->Cell(0,15,"THANK YOU FOR VISIT !  ",0,0,'C');
            

            $detail->output();


             
           


        }
?>

            
            
            
            

            
           
 