<?php
App::import('Vendor', 'xtcpdf');
set_time_limit(3000);
$pdf = new XTCPDF('P', PDF_UNIT, 'A4', true, 'UTF-8', false);
// create new PDF document untuk cetak custom print
$pdf = new XTCPDF('P', 'mm', PDF_PAGE_FORMAT, true, 'UTF-8', false);
// add a page
$nama_laporan = 'Laporan Nilai';

$AppConfig=array('COMPANY'=>'Gaivo Systemworks','PHONE'=>'081310974914','FAX'=>'','APPNAME'=>'Aplikasi Sekolah','ADDRESS'=>'GR Raflesia E11/10 Citra Raya, Tangerang','EMAIL'=>'mizno.kruge@gmail.com','WEBSITE'=>'');
//---------------------------------------------------------- config start ---------------------------------------------------------------------------
$pdf->namaorg = $AppConfig['COMPANY'];
$pdf->telp = $AppConfig['PHONE'];
$pdf->fax = $AppConfig['FAX'];
$pdf->nama_aplikasi = $AppConfig['APPNAME'];
$pdf->alamat = $AppConfig['ADDRESS'];
$pdf->email = $AppConfig['EMAIL'];
$pdf->website = $AppConfig['WEBSITE'];
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Mizno Kruge');
$pdf->SetTitle($AppConfig['APPNAME'] . ':Print');
$pdf->SetSubject($AppConfig['APPNAME']);
//$pdf->SetKeywords('TCPDF, PDF, example, test, guide');
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
$pdf->SetMargins(1, 1, 1);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(0);
//$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->SetAutoPageBreak(TRUE, 0);
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 6);
//---------------------------------------------------------- config end ---------------------------------------------------------------------------

$cw = array(70,100,100,300,100); //in mm
$cw_top = array(30, 100); //in mm
    $html = '';
    $html.='<table cellpadding="5" cellspacing="0" border="0" width="100%">';
    $html.='<tr>';
    $html.='<td colspan="3" align="center" style="margin-top:3px; margin-bottom:5px;"><h1>' . $nama_laporan . '</h1></td>';
    $html.='</tr>';
    $html.='</table>';
    $html.='<hr>';
    $html.='<table border="0" cellpadding="5" cellspacing="0" width="100%">';
    $html.='<thead>
            	<tr>
                	<th width="' . $cw[0] . '"><strong>NIS</strong></th>
                	<th width="' . $cw[1] . '" align="left"><strong>Nama</strong></th>
                	<th width="' . $cw[2] . '" align="left"><strong>Semester</strong></th>
				    <th width="' . $cw[3] . '" align="left"><strong>Mata Pelajaran</strong></th>
                    <th width="' . $cw[4] . '" align="left"><strong>Nilai</strong></th>
                </tr>
                </thead>';
    foreach ($data as $sod) {
        $html.='<tr>
        <td width="' . $cw[0] . '">' . $sod['Vnilai']['nis'] . ' </td>
        <td width="' . $cw[1] . '" align = "left">' . $sod['Vnilai']['nama_siswa'] . '</td>
        <td width="' . $cw[2] . '" align = "left">' . $sod['Vnilai']['kode_semester'] . '</td>
	    <td width="' . $cw[3] . '" align = "left">' . $sod['Vnilai']['nama_mata_pelajaran'] . '('.$sod['Vnilai']['kode'].')</td>			
        <td width="' . $cw[4] . '" align = "left">' . $sod['Vnilai']['nilai'] . '</td>
        </tr>';
    }
    $html.='</table>';
    $html.='<hr/>';
    $html.='<p style = "text-align:center">Guru Wali Kelas</p>';
	$html.='<br/><br/><br/>';
	$html.='<p style = "text-align:center">___________________</p>';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->lastPage();
$pdf->Output($nama_laporan . '.pdf', 'I');
