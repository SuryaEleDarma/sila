<?php
class PDF extends FPDF
{
	//Page header
	function Header()
	{       
                $this->setFont('Arial','',10);
                $this->setFillColor(255,255,255);
                $this->cell(35,6,"Bukti Transaksi Sila",0,0,'L',1); 
                $this->setFillColor(255,255,255);
                $this->cell(100,6,"Printed date : " . date('d/m/Y'),0,1,'R',1); 
                // $this->Image(base_url().'assets/image/admin.jpg', 10, 25,'20','20','jpeg');
                
                $this->Ln(12);
                $this->setFont('Arial','',14);
                $this->setFillColor(255,255,255);
                $this->cell(45,6,'',0,0,'C',0); 
                $this->cell(100,6,'Bukti Transaksi Sila',0,1,'L',1); 
                // $this->cell(25,6,'',0,0,'C',0); 
                // $this->cell(100,6,"Periode : ".date('M Y'),0,1,'L',1); 
                // $this->cell(25,6,'',0,0,'C',0); 
                // $this->cell(100,6,'Lokasi : Semarang, Jawa Tengah',0,1,'L',1); 
                
                
                $this->Ln(5);
                $this->setFont('Arial','',10);
                $this->setFillColor(230,230,200);
                // $this->cell(10,6,'No.',1,0,'C',1);
                // // $this->cell(105,6,'Nama Lengkap',1,0,'C',1);
                // $this->cell(30,6,'Alamat',1,0,'C',1);
                // $this->cell(50,6,'No Hp',1,1,'C',1);

                
	}
 
	function Content($data)
	{
            // $ya = 46;
            // $rw = 6;
            // $no = 1;
                foreach ($data as $key) {

                        $this->setFont('Arial','',10);
                        $this->setFillColor(230,230,200);
                        $this->cell(40,6,'Nama Lengkap',1,0,'C',1);
                        $this->setFont('Arial','',10);
                        $this->setFillColor(255,255,255);	
                        $this->cell(90,6,$key->Nama,1,1,'L',1);

                        $this->setFont('Arial','',10);
                        $this->setFillColor(230,230,200);
                        $this->cell(40,6,'Alamat',1,0,'C',1);
                        $this->setFont('Arial','',10);
                        $this->setFillColor(255,255,255);   
                        $this->cell(90,6,$key->Alamat,1,1,'L',1);

                        $this->setFont('Arial','',10);
                        $this->setFillColor(230,230,200);
                        $this->cell(40,6,'No Telp',1,0,'C',1);
                        $this->setFont('Arial','',10);
                        $this->setFillColor(255,255,255);   
                        $this->cell(90,6,$key->NoTelp,1,1,'L',1);

                        $this->setFont('Arial','',10);
                        $this->setFillColor(230,230,200);
                        $this->cell(40,6,'Jenis Transaksi',1,0,'C',1);
                        $this->setFont('Arial','',10);
                        $this->setFillColor(255,255,255);   
                        $this->cell(90,6,$key->JenisTarif,1,1,'L',1);

                        $this->setFont('Arial','',10);
                        $this->setFillColor(230,230,200);
                        $this->cell(40,6,'Kode Kunci',1,0,'C',1);
                        $this->setFont('Arial','',10);
                        $this->setFillColor(255,255,255);   
                        $this->cell(90,6,$key->IdKodeKunci,1,1,'L',1);

                        $this->setFont('Arial','',10);
                        $this->setFillColor(230,230,200);
                        $this->cell(40,6,'Berat',1,0,'C',1);
                        $this->setFont('Arial','',10);
                        $this->setFillColor(255,255,255);   
                        $this->cell(90,6,$key->Berat.' Kg',1,1,'L',1);

                        $this->setFont('Arial','',10);
                        $this->setFillColor(230,230,200);
                        $this->cell(40,6,'Harga',1,0,'C',1);
                        $this->setFont('Arial','',10);
                        $this->setFillColor(255,255,255);   
                        $this->cell(90,6,'Rp '.$key->Berat * $key->Tarif,1,1,'L',1);

                        $this->setFont('Arial','',10);
                        $this->setFillColor(230,230,200);
                        $this->cell(40,6,'No Telp',1,0,'C',1);
                        $this->setFont('Arial','',10);
                        $this->setFillColor(255,255,255);   
                        $this->cell(90,6,$key->NoTelp,1,1,'L',1);

                        $this->setFont('Arial','',10);
                        $this->setFillColor(230,230,200);
                        $this->cell(40,6,'Baju Kaos',1,0,'C',1);
                        $this->setFont('Arial','',10);
                        $this->setFillColor(255,255,255);   
                        $this->cell(90,6,$key->BajuKaos.' buah',1,1,'L',1);

                        $this->setFont('Arial','',10);
                        $this->setFillColor(230,230,200);
                        $this->cell(40,6,'Celana',1,0,'C',1);
                        $this->setFont('Arial','',10);
                        $this->setFillColor(255,255,255);   
                        $this->cell(90,6,$key->Celana.' buah',1,1,'L',1);

                        $this->setFont('Arial','',10);
                        $this->setFillColor(230,230,200);
                        $this->cell(40,6,'Kemeja',1,0,'C',1);
                        $this->setFont('Arial','',10);
                        $this->setFillColor(255,255,255);   
                        $this->cell(90,6,$key->Kemeja.' buah',1,1,'L',1);

                        $this->setFont('Arial','',10);
                        $this->setFillColor(230,230,200);
                        $this->cell(40,6,'Handuk',1,0,'C',1);
                        $this->setFont('Arial','',10);
                        $this->setFillColor(255,255,255);   
                        $this->cell(90,6,$key->Handuk.' buah',1,1,'L',1);

                        $this->setFont('Arial','',10);
                        $this->setFillColor(230,230,200);
                        $this->cell(40,6,'Pakaian Dalam',1,0,'C',1);
                        $this->setFont('Arial','',10);
                        $this->setFillColor(255,255,255);   
                        $this->cell(90,6,$key->PakaianDalam.' buah',1,1,'L',1);

                        $this->setFont('Arial','',10);
                        $this->setFillColor(230,230,200);
                        $this->cell(40,6,'Kaos Kaki',1,0,'C',1);
                        $this->setFont('Arial','',10);
                        $this->setFillColor(255,255,255);   
                        $this->cell(90,6,$key->KaosKaki.' pasang',1,1,'L',1);
                        
                        // $ya = $ya + $rw;
                        // $no++;

                        $this->Ln(12);
                        $this->setFont('Arial','',12);
                        $this->setFillColor(255,255,255);
                        $this->cell(10,6,'',0,0,'C',0); 
                        $this->cell(40,6,'Pegawai',0,0,'C',1);     

                        $this->setFont('Arial','',12);
                        $this->setFillColor(255,255,255);
                        $this->cell(30,6,'',0,0,'C',0); 
                        $this->cell(40,6,'Penerima',0,1,'C',1); 

                        $this->Ln(25);
                        $this->setFont('Arial','',12);
                        $this->setFillColor(255,255,255);
                        $this->cell(10,6,'',0,0,'C',0); 
                        $this->cell(40,6,'..............................',0,0,'C',1);

                        $this->setFont('Arial','',12);
                        $this->setFillColor(255,255,255);
                        $this->cell(30,6,'',0,0,'C',0); 
                        $this->cell(40,6,'..............................',0,1,'C',1); 
                }
                        
 
	}
	function Footer()
	{
		//atur posisi 1.5 cm dari bawah
		$this->SetY(-15);
		//buat garis horizontal
		$this->Line(10,$this->GetY(),140,$this->GetY());
		//Arial italic 9
		$this->SetFont('Arial','I',9);
                $this->Cell(0,10,'copyright sila.com ' . date('Y'),0,0,'L');
		// //nomor halaman
		// $this->Cell(0,10,'Halaman '.$this->PageNo().' dari {nb}',0,0,'R');
	}
}
 
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('P','A5');
$pdf->Content($data);
$pdf->Output();