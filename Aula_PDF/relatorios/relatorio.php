
<?php


    require "../fpdf/fpdf.php";

    $pdf = new FPDF("L", "pt", "A4");

    $pdf->AddPage();
    $pdf->Image("../img/relatorio.png", 620,420, -300);
    $pdf->Ln(20);

    //$descricao =  $linha["descricao"];
    //$quantidade =  $linha["quantidade"];
    //$valor =   $linha["valor"];
    //$status =   $linha["status"];
    //$img =   $linha["img"];

    $pdf->SetFont("Arial", "", 18);
    $pdf->SetY(100);
    $pdf->SetMargins(20,20,20,20);
    $texto0 = utf8_decode("Nome da Pessoa Foda:");
    $pdf->MultiCell(0,0,$texto0,10,"C",false);
    $pdf->Ln(20);

    $pdf->Line(110,150,700,150);

    $texto = utf8_decode("Texto foda");

    $pdf->SetFont("Arial", "B", 13);
    $pdf->SetY(210);
    $pdf->SetMargins(20,20,20,20);

    $texto2 = utf8_decode("Texto foda dois, fhefsugfsueifgesfugsefusfusfuisfgseuifgeufisgefuisgfuisefgsuiefgseuifgseufisefguseufg");


    $texto3 = utf8_decode("Assinatura foda:");

    $pdf->MultiCell(0,10,$texto,0,"C",false);
    $pdf->Ln(20);
    $pdf->MultiCell(0,17,$texto2,0,"C",false);
    $pdf->Ln(90);
    $pdf->MultiCell(0,17,$texto3,0,"C",false);

    $pdf->Line(110,410,700,410);

    $pdf->AddPage();
    $pdf->Image("../img/amazonlogo.png", 0, 0, $pdf->GetPageWidth(), $pdf->GetPageHeight());
    $pdf->Ln(20);


    $pdf->SetFont("Arial", "B", 78);
    $pdf->SetY(210);
    $pdf->SetMargins(20,20,20,20);

    $texto = utf8_decode("Texto do verço foda");


    $pdf->MultiCell(0,17,$texto,0,"C",false);

    $pdf->Output("I", "geraRelatorio.php", true);

    

?>, 