<?php
require_once './mpdf/vendor/autoload.php';
// require_once '../../php/PgSql.php';
// require_once '../../php/class/IncidenteController.php';

// if(!isset($_GET['id']) || strlen($_GET['id']) == 0){
// 	die("Identificador de incidencia no encontrado.");
// }
$m1='no';
$m2='no';
$m3='no';
$m4='no';
$m5='no';
$m6='no';
$vquien='';
if($_POST['dequien']=="1"){
	$vquien='Karen Leon';
}else if($_POST['dequien']=="2"){
	$vquien='Alberto Maguiña';
}else if($_POST['dequien']=="7"){
	$vquien='Jesus Vera';
}else if($_POST['dequien']=="5"){
	$vquien='IDRA - Capacitaciones';
}else if($_POST['dequien']=="8"){
	$vquien='Samantha Salazar';
}

$sipago='';
if($_POST['pagorealizado']=="1"){
$sipago='si';
}else{
	$sipago='no';
}

// if($_POST['m2']){
//     $m2=$_POST['m2'];
// }

$incidencia_id = "1";

$mpdf = new \Mpdf\Mpdf([
	'default_font_size' => 9,
	'default_font' => 'dejavusans',
	'mode' => 'c',
	'margin_left' => 16,
	'margin_right' => 13,
	'margin_top' => 25,
	'margin_bottom' => 20,
	'margin_header' => 10,
	'margin_footer' => 10
]);

$mpdf->mirrorMargins = 0;

//$mpdf->WriteHTML("asd");
$mpdf->SetHTMLHeader(pdf_header("1"));
$mpdf->AddPage();
$mpdf->SetHTMLFooter(pdf_footer());
$mpdf->WriteHTML(pdf_body($vquien,$sipago));
$mpdf->Output('./Reportes.pdf', 'F');
$mpdf->Output('./Reportes.pdf', 'D');
//$mpdf->Output();

function pdf_header($incidencia_id){
	return '<table width="100%" border="0" style="border-bottom: 1px solid #000000; vertical-align: bottom; font-family: serif; font-size: 9pt; color: #000088;">
		<tr>
			<td width="33%" style="vertical-align:middle;color:#000">
			Registro de envios - IDRA
			</td>
			<td width="33%" align="center">
				<img src="logo.png" width="200px" height="50px" />
			</td>
			<td width="33%" style="vertical-align:middle;text-align: right;color:#000;">
				
			</td>
		</tr>
	</table>';
}

function pdf_footer(){
	return '<table width="100%" border="0" style="font-size:7.5pt;">
		<tr>
			<td style="color: #686668">
			Calle los Oropendolas Mz a Lt 9 urb San Joaquin dpto 5
				<br> 966236570
			</td>
			<td align="right">
				Página <span style="font-size:9pt;">{PAGENO}</span>
			</td>
		</tr>
	</table>';
}


function pdf_body($vquien,$sipago){	
	// $instance = new IncidenteController();
	// $fs_incidente = $instance->informe_incidente((object) ['incidente_id' => $incidencia_id]);	
	
	$style  = '<style>		
		.table {			
			border-collapse: collapse;
			border:0px solid black;
		    border-radius: 25px;
		}
		.table td {
			padding-left: 10px;
			padding-right: 10px;
			min-height: 10px;
			line-height: 2;
			border-radius: 25px;
		}
		.text-center {
			text-align: center;
		}
		.text-right {
			text-align: right;
		}
		.text-justify {
			text-align: justify;
		}
	</style>';
	
	$html  = $style;
	
	$table = '';
	
	$table.= '';
	
	$table.= '<table class="table"  width="100%">
	<tr bgcolor="#555555">
            <td colspan="3" border="1"><strong><font color="#fff">Datos de envio</font></strong></td>
        </tr>
		<tr>
		<td><b>Nombre y apellidos</b></td>
		<td><b>RUC/DNI</b></td>
		<td><b>Telefono Celular</b></td>
		</tr>
		<tr>
		<td>'.$_POST['nombre'].'</td>
		<td>'.$_POST['ruc'].'</td>
		<td>'.$_POST['telefono'].'</td>
		</tr>
		<tr>
		<td colspan="3"><b>Direccion</b></td>

		</tr>
		<tr>
		<td colspan="3">'.$_POST['domicilio'].'</td>
	
		</tr>
        <tr>
		
		<tr>
		<td><b>Distrito</b></td>
		<td><b>Provincia</b></td>
		<td><b>Departamento</b></td>
		</tr>
		<tr>
		<td>'.$_POST['distrito'].'</td>
		<td>'.$_POST['provincia'].'</td>
		<td>'.$_POST['departamento'].'</td>
		</tr>
	<br>
    <tr><td colspan="3"><hr></td>	</tr>
	<br>
        <tr bgcolor="#555555">
            <td colspan="3" border="1"><strong><font color="#fff">Detalles de envio</font></strong></td>
        </tr>
	<tr>
		<td><b>Nombre y apellidos</b></td>
		<td><b>RUC/DNI</b></td>
		<td><b>Telefono Celular</b></td>
		</tr>
		<tr>
		<td>'.$_POST['nombrer'].'</td>
		<td>'.$_POST['rucr'].'</td>
		<td>'.$_POST['telefonor'].'</td>
		</tr>
		<tr>
		<td ><b>Direccion</b></td>
		<td ><b>Correo</b></td>

		</tr>
		<tr>
		<td >'.$_POST['domicilior'].'</td>
		<td >'.$_POST['correo'].'</td>
		</tr>
        <tr>
		
		<tr>
		<td><b>Distrito</b></td>
		<td><b>Provincia</b></td>
		<td><b>Departamento</b></td>
		</tr>
		<tr>
		<td>'.$_POST['distritor'].'</td>
		<td>'.$_POST['provinciar'].'</td>
		<td>'.$_POST['departamentor'].'</td>
		</tr>
	    <tr>
	    <td colspan="2"><b>Referencia</b></td>
		<td><b>Generado por:</b></td>
	    </tr>
	    <tr>
	    <td colspan="2">'.$_POST['referenciar'].'</td>
	    <td>'.$vquien.'</td>
	    </tr>

		<tr>
		<td><b>Realizaron el pago</b></td>
		<td><b>Fecha de registro</b></td>
		<td><b>Monto del pago</b></td>
		</tr>
		
		<tr>
		<td>'.$sipago.'</td>
		<td>'.$_POST['fechapago'].'</td>
		<td>'.$_POST['montopagado'].'</td>
		</tr>
	

		<tr>
		<td><b>Detalle y/o observaciones</b></td>
		</tr>
		<tr>
		<td>'.$_POST['observaciones'].'</td>
		
		</tr>


		<br>
    <tr><td colspan="3"><hr></td>	</tr>
	<br>
	
	</table>';
	$html.= $table;
	
	//echo '<body>' . $html . '</body>';die;
	return '<body>' . $html . '</body>';
}

class Email {
	
	//nombre
	var $nombre;
	//email del emisor
	var $mail;
	//email del receptor
	var $mailr;
	var $asunto;
	//mensaje
	var $msn;
	//archivo adjunto
	var $adjunto;
	//enviar el mensaje
	private $sender;
	//url para redireccionar
	private $url;

	//función constructora
	public function __construct(){
		//cada uno de ellos es el parámetro que enviamos desde el formulario
		// $this->nombre = $n;
		// $this->mail = $m;
		// $this->mailr = $mr;
		// $this->asunto = $a;
		// $this->msn = $ms;
		// $this->adjunto = $ad;
	}

	//método enviar con los parámetros del formulario
	public function enviar($n,$m,$mr,$a,$ms,$adx){
		$message="";
		
		//si existe post
		if(isset($_POST)){

			$headers = "From: noreply@gmail.com";
			$semi_Rand = md5(time()); 
			$mime_boundary = "==Multipart_Boundary_x{$semi_Rand}x"; 
			$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
	  
			$message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n"; 
			$message .= "--{$mime_boundary}\n";
	  
			foreach ($adx as $file) {
	  
			  //$filename = end(explode("/",$file));  
			  $data = file_get_contents($file);
	  
			  $data = chunk_split(base64_encode($data));
	  
			  $message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$file\"\n" .
				"Content-Disposition: attachment;\n" . " filename=\"$file\"\n" .
				"Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
			  $message .= "--{$mime_boundary}\n";
			}
			$this->url = 'formulario.php';
			  @mail($mr, $a, $message, $headers); 
			  header('Location:'.$this->url.'');
		}
		else{
			//redireccionamos a la misma url conforme NO se ha enviado correctamente con la variable no
			header('Location:'.$this->url.'?s=no');
		}
	}
}

//llamamos a la clase
$obj = new Email();
//ejecutamos el método enviar con los parámetros que recibimos del formulario
//$obj->enviar($_POST['nombre'], "noreply@gmail.com", "arcangelhotel@hotmail.com", "Declaracion Jurada - Wilkmayu", "Envio mi declaración jurada - covid 19", "Reportes.pdf");
$obj->enviar("", "noreply@gmail.com", "idrainstituto@gmail.com", "Registro de envios", "Registro de envios", array("Reportes.pdf"));
