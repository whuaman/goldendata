<?php

$destino= "willdebuena@gmail.com,socratestry@outlook.com";
$nome= $_POST["nome"];
$email= $_POST["email"];
$telefone= $_POST["telefone"];
$empresa= $_POST["empresa"];
$mensagem= $_POST["mensagem"];
$conteudo = "
  <style type='text/css'>
  body {
  margin:0px;
  font-family:sans-serif;
  font-size:18px;
  color: #666666;
  }
  </style>
    <html>
        <table cellspacing='0' cellpadding='0' height='auto' width='100%' bgcolor='#eeeeee' align='center' border='0' style='padding:15px; margin:0;'>
<tr>
<td align='center' style='padding:5px;'>
 <table bgcolor='#eeeeee' align='center' width='100%' cellspacing='0' cellpadding='0' style='max-width:500px;'>
  <tr>
    <td align='center'> <img alt='Lopes'  src='http://whuaman.esy.es/goldendata/img/logo_email.png' style='display:block; width:200px; height:61px; margin:0 auto;'></td>
  </tr>
  </table>
  </td>
 </tr>
  <tr>
<td align='center'>
    <table bgcolor='#FFFFFF' align='center'  cellspacing='0' cellpadding='0' width='100%' style='border:1px #cdcdcd solid; max-width:500px; padding:10px; border-radius:3px;'>
  <tr>
    <td style='font-family: sans-serif; font-size:16px; padding:10px 0 10px 15px; line-height:25px; color:#333; text-align:left; word-break: keep-all';'><strong>Nome: </strong>$nome</td>
  </tr>
  
  <tr>
    <td style='font-family: sans-serif; font-size:16px; line-height:25px; padding:10px 0 10px 15px; color:#333; text-align:left;'><strong>Email:</strong>$email</td>
  </tr>
  <tr>
    <td style='font-family: sans-serif; font-size:16px; line-height:25px; padding:10px 0 10px 15px; color:#333; text-align:left;'><strong>Telefone:</strong>$telefone</td>
  </tr>
   <tr>
    <td style='font-family: sans-serif; font-size:16px; line-height:25px; padding:10px 0 10px 15px; color:#333; text-align:left;'><strong>Nome da Empresa:</strong>$empresa</td>
  </tr>
 <tr>
    <td style='font-family: sans-serif; font-size:16px; line-height:25px; padding:10px 0 10px 15px; color:#333; text-align:left;'><strong>Mensagem:</strong>$mensagem</td>
  </tr>
  <tr>
    <td  style='font-family: sans-serif; font-size:16px; line-height:25px; color:#333;padding:10px 0 10px 15px; text-align:left;'><a href='http://whuaman.esy.es/goldendata/index.html' target='_blank' style='background:#e35726; padding:15px 20px; color:#ffffff; border-radius:5px; text-decoration:none;'>Ir para o site</a></td>'
  </tr>
  
   <tr>
    <td style='font-family: sans-serif; font-size:16px; line-height:25px;padding:10px 0 10px 15px; color:#333; text-align:left;'>Atenciosamente,<br>Equipe GoldenData.</td>
  </tr>
            </table> 
    </td>
  </tr>

 <tr bgcolor='#eeeeee'>
    <td bgcolor='#eeeeee' align='center' height='40' style='font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:10px; color:#333'>
      <span style='font-family:Arial, Helvetica, sans-serif; font-size:11px; color:#333;'>© 2018 Copyright - Todos os direitos reservados - GoldenData - Brasil - São Paulo/SP </span><br></td>
  </tr>
</table>
    </html>
  ";

$header = "Content-Type: text/html; charset= utf-8\n";
$header .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'From: Golden Data';

mail($destino, "Contato do Site ok", $conteudo, $header);
header("Location:obrigado.html");
?>

