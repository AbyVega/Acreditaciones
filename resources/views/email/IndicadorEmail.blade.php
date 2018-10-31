<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <title>MOSAICO Responsive Email Designer</title>
  
  <style type="text/css">
    body{ margin: 0; padding: 0; }
    img{ border: 0px; display: block; }

    .socialLinks{ font-size: 6px; }
    .socialLinks a{
      display: inline-block;
    }

    .long-text p{ margin: 1em 0px; }
    .long-text p:last-child{ margin-bottom: 0px; }
    .long-text p:first-child{ margin-top: 0px; }
  </style>
  <style type="text/css">
    /* yahoo, hotmail */
    .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{ line-height: 100%; }
    .yshortcuts a{ border-bottom: none !important; }
    .vb-outer{ min-width: 0 !important; }
    .RMsgBdy, .ExternalClass{
      width: 100%;
      background-color: #3f3f3f;
      background-color: #f2f2f2}

    /* outlook/office365 add buttons outside not-linked images and safari have 2px margin */
    [o365] button{ margin: 0 !important; }

    /* outlook */
    table{ mso-table-rspace: 0pt; mso-table-lspace: 0pt; }
    #outlook a{ padding: 0; }
    img{ outline: none; text-decoration: none; border: none; -ms-interpolation-mode: bicubic; }
    a img{ border: none; }

    @media screen and (max-width: 600px) {
      table.vb-container, table.vb-row{
        width: 95% !important;
      }

      .mobile-hide{ display: none !important; }
      .mobile-textcenter{ text-align: center !important; }

      .mobile-full{ 
        width: 100% !important;
        max-width: none !important;
      }
    }
    /* previously used also screen and (max-device-width: 600px) but Yahoo Mail doesn't support multiple queries */
  </style>
  <style type="text/css">
    
    #ko_footerBlock_2 .links-color a, #ko_footerBlock_2 .links-color a:link, #ko_footerBlock_2 .links-color a:visited, #ko_footerBlock_2 .links-color a:hover{
      color: #cccccc;
      color: #7030a0;
      text-decoration: underline
    }
    </style>
  
</head>
<div id="header">


</div>
<body style="margin: 0; padding: 0; background-color:#a6e1ec; color: #062c33;" vlink="#7030a0" text="#000000" bgcolor="#f2f2f2" alink="#7030a0"><center>

  <div class="text-center">
    <br>
<p> Se le informa la asignacion del indicador {{$guia[0]->indicador_id}} en el sistema SIGECE para que proceda con las instrucciones que se le brindan a continuacion.
</p><br><br>
  </div>
  <div class="container-fluid">
  <table class="table">
    <thead>

    <th style="width: 300px;text-align: left">Puntos de evaluación</th>
    <th>Descripción</th>


    </thead>
    <tbody>
      <tr>
         <td>Indicador</td>
        <td>{{$guia[0]->indicador_id}}</td>

      </tr>
      <tr>
         <td>Descripción</td>
         <td>{{$guia[0]->descPunto}}</td>
      </tr>
      <tr>
      <td>Instrumento</td>
      <td>{{$guia[0]->instrPunto}}</td>
      </tr>
      <tr>
      <td>Valoración</td>
      <td>{{$guia[0]->valorPunto}}</td>
      </tr>
      <tr>
      <td>Adicional</td>
      <td>{{$guia[0]->adiPunto}}</td>
      </tr>

    </tbody>
  </table>
  </div><br><br>


  
    <!-- footerBlock -->
    <table role="presentation" class="vb-outer" style="background-color: #f2f2f2;" id="ko_footerBlock_2" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#f2f2f2">
      <tbody><tr><td class="vb-outer" style="padding-left: 9px; padding-right: 9px; font-size: 0;" valign="top" align="center">
    <!--[if (gte mso 9)|(lte ie 8)]><table role="presentation" align="center" border="0" cellspacing="0" cellpadding="0" width="570"><tr><td align="center" valign="top"><![endif]--><!--
      --><div style="margin: 0 auto; max-width: 570px; -mru-width: 0px;"><table role="presentation" style="border-collapse: separate; width: 100%; mso-cellspacing: 0px; border-spacing: 0px; max-width: 570px; -mru-width: 0px;" class="vb-row" width="570" cellspacing="0" cellpadding="0" border="0">
        
      <tbody><tr>
      <td style="font-size: 0; padding: 0 9px;" valign="top" align="center"><div style="vertical-align: top; width: 100%; max-width: 552px; -mru-width: 0px;"><!--
        --><table role="presentation" class="vb-content" style="border-collapse: separate; width: 100%; mso-cellspacing: 9px; border-spacing: 9px;" width="552" cellspacing="9" cellpadding="0" border="0">
          
        <tbody><tr><td class="long-text links-color" style="font-weight: normal; color: #000000; font-size: 13px; font-family: Arial, Helvetica, sans-serif; text-align: center;" width="100%" valign="top" align="center"><p style="margin: 1em 0px; margin-bottom: 0px; margin-top: 0px;">CENTRO UNIVERSITARIO DE LOS VALLES<br>Carretera Guadalajara - Ameca Km. 45.5, C.P. 46600, Ameca, Jalisco, México.<br>Telefono: +52 (375) 7580 500 extensión. 9</p></td></tr>
        <tr><td style="font-weight: normal; color: #17365d; font-size: 13px; font-family: Arial, Helvetica, sans-serif; text-align: center;" width="100%" valign="top" align="center"><label>Click para entrar: </label><a href="http://148.202.89.11/acreditaciones" style="color: #17365d; text-decoration: underline;" target="_new">SIGECE</a></td></tr>
        <tr style="text-align: center;"><td class="links-color" style="text-align: center;" width="100%" valign="top" align="center"><!--[if (lte ie 8)]><div style="display: inline-block; width: 170px; -mru-width: 0px;"><![endif]--> </td></tr>
        </tbody></table></div></td>
    </tr>
    
      </tbody></table></div><!--
    --><!--[if (gte mso 9)|(lte ie 8)]></td></tr></table><![endif]-->
  </td></tr>
    </tbody></table>
    <!-- /footerBlock -->
    
</center></body></html>