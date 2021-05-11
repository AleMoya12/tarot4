<?php

    $to = "melinaanahi97@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $number = $_POST['telefono'];
    $cmessage = $_POST['message'];

    $headers = "From: $name";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "Consulta desde (Sitio WEB).";

    $logo = 'img/rsz_561.png';
    $link = 'www.pautasdeamor.com';

	$body = "<!DOCTYPE html><html lang='es'><head><meta charset='UTF-8'><title>Mail dede Web</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border: none;' colspan='2'>";
	$body .= "<a href='{$link}'><img src='{$logo}' alt='logo'></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Nombre:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	$body .= "<td style='border:none;'><strong>Teléfono:</strong> {$number}</td>";
	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>Motivo:</strong> {$subject}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:2px;'>{$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers, );
	header("Location:index.html");

?>