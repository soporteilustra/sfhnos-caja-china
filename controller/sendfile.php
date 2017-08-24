<?php

function sendFile($array)
{

  $email_subject = "Respuesta de obligatoriedad  | #loquemasdisfruto";

    $email_message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
  <head>
    <!-- NAME: SELL PRODUCTS -->
    <!--[if gte mso 15]>
    <xml>
      <o:OfficeDocumentSettings>
        <o:AllowPNG />
        <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>#loquemasdisfruto</title>
    
  <style type="text/css">
		p{
			margin:10px 0;
			padding:0;
		}
		table{
			border-collapse:collapse;
		}
		h1,h2,h3,h4,h5,h6{
			display:block;
			margin:0;
			padding:0;
		}
		img,a img{
			border:0;
			height:auto;
			outline:none;
			text-decoration:none;
		}
		body,#bodyTable,#bodyCell{
			height:100%;
			margin:0;
			padding:0;
			width:100%;
		}
		.mcnPreviewText{
			display:none !important;
		}
		#outlook a{
			padding:0;
		}
		img{
			-ms-interpolation-mode:bicubic;
		}
		table{
			mso-table-lspace:0;
			mso-table-rspace:0;
		}
		.ReadMsgBody{
			width:100%;
		}
		.ExternalClass{
			width:100%;
		}
		p,a,li,td,blockquote{
			mso-line-height-rule:exactly;
		}
		a[href^=tel],a[href^=sms]{
			color:inherit;
			cursor:default;
			text-decoration:none;
		}
		p,a,li,td,body,table,blockquote{
			-ms-text-size-adjust:100%;
			-webkit-text-size-adjust:100%;
		}
		.ExternalClass,.ExternalClass p,.ExternalClass td,.ExternalClass div,.ExternalClass span,.ExternalClass font{
			line-height:100%;
		}
		a[x-apple-data-detectors]{
			color:inherit !important;
			text-decoration:none !important;
			font-size:inherit !important;
			font-family:inherit !important;
			font-weight:inherit !important;
			line-height:inherit !important;
		}
		.templateContainer{
			max-width:600px !important;
		}
		a.mcnButton{
			display:block;
		}
		.mcnImage{
			vertical-align:bottom;
		}
		.mcnTextContent{
			word-break:break-word;
		}
		.mcnTextContent img{
			height:auto !important;
		}
		.mcnDividerBlock{
			table-layout:fixed !important;
		}
	/*
	@tab Page
	@section Heading 1
	@style heading 1
	*/
		h1{
			/*@editable*/color:#222222;
			/*@editable*/font-family:Arial;
			/*@editable*/font-size:40px;
			/*@editable*/font-style:normal;
			/*@editable*/font-weight:bold;
			/*@editable*/line-height:150%;
			/*@editable*/letter-spacing:normal;
			/*@editable*/text-align:center;
		}
	/*
	@tab Page
	@section Heading 2
	@style heading 2
	*/
		h2{
			/*@editable*/color:#222222;
			/*@editable*/font-family:Arial;
			/*@editable*/font-size:34px;
			/*@editable*/font-style:normal;
			/*@editable*/font-weight:bold;
			/*@editable*/line-height:150%;
			/*@editable*/letter-spacing:normal;
			/*@editable*/text-align:left;
		}
	/*
	@tab Page
	@section Heading 3
	@style heading 3
	*/
		h3{
			/*@editable*/color:#444444;
			/*@editable*/font-family:Arial;
			/*@editable*/font-size:22px;
			/*@editable*/font-style:normal;
			/*@editable*/font-weight:bold;
			/*@editable*/line-height:150%;
			/*@editable*/letter-spacing:normal;
			/*@editable*/text-align:left;
		}
	/*
	@tab Page
	@section Heading 4
	@style heading 4
	*/
		h4{
			/*@editable*/color:#999999;
			/*@editable*/font-family:Arial;
			/*@editable*/font-size:20px;
			/*@editable*/font-style:italic;
			/*@editable*/font-weight:normal;
			/*@editable*/line-height:125%;
			/*@editable*/letter-spacing:normal;
			/*@editable*/text-align:left;
		}
	/*
	@tab Header
	@section Header Container Style
	*/
		#templateHeader{
			/*@editable*/background-color:#ffffff;
			/*@editable*/background-image:none;
			/*@editable*/background-repeat:no-repeat;
			/*@editable*/background-position:center;
			/*@editable*/background-size:cover;
			/*@editable*/border-top:0;
			/*@editable*/border-bottom:0;
			/*@editable*/padding-top:11px;
			/*@editable*/padding-bottom:11px;
		}
	/*
	@tab Header
	@section Header Interior Style
	*/
		.headerContainer{
			/*@editable*/background-color:#ffffff;
			/*@editable*/background-image:none;
			/*@editable*/background-repeat:no-repeat;
			/*@editable*/background-position:center;
			/*@editable*/background-size:cover;
			/*@editable*/border-top:0;
			/*@editable*/border-bottom:0;
			/*@editable*/padding-top:0;
			/*@editable*/padding-bottom:0;
		}
	/*
	@tab Header
	@section Header Text
	*/
		.headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
			/*@editable*/color:#808080;
			/*@editable*/font-family:Arial;
			/*@editable*/font-size:16px;
			/*@editable*/line-height:150%;
			/*@editable*/text-align:left;
		}
	/*
	@tab Header
	@section Header Link
	*/
		.headerContainer .mcnTextContent a,.headerContainer .mcnTextContent p a{
			/*@editable*/color:#00ADD8;
			/*@editable*/font-weight:normal;
			/*@editable*/text-decoration:underline;
		}
	/*
	@tab Body
	@section Body Container Style
	*/
		#templateBody{
			/*@editable*/background-color:#003459;
			/*@editable*/background-image:none;
			/*@editable*/background-repeat:no-repeat;
			/*@editable*/background-position:center;
			/*@editable*/background-size:cover;
			/*@editable*/border-top:0;
			/*@editable*/border-bottom:0;
			/*@editable*/padding-top:19px;
			/*@editable*/padding-bottom:19px;
		}
	/*
	@tab Body
	@section Body Interior Style
	*/
		.bodyContainer{
			/*@editable*/background-color:#ffffff;
			/*@editable*/background-image:none;
			/*@editable*/background-repeat:no-repeat;
			/*@editable*/background-position:center;
			/*@editable*/background-size:cover;
			/*@editable*/border-top:0;
			/*@editable*/border-bottom:0;
			/*@editable*/padding-top:0;
			/*@editable*/padding-bottom:0;
		}
	/*
	@tab Body
	@section Body Text
	*/
		.bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
			/*@editable*/color:#808080;
			/*@editable*/font-family:Arial;
			/*@editable*/font-size:16px;
			/*@editable*/line-height:150%;
			/*@editable*/text-align:left;
		}
	/*
	@tab Body
	@section Body Link
	*/
		.bodyContainer .mcnTextContent a,.bodyContainer .mcnTextContent p a{
			/*@editable*/color:#00ADD8;
			/*@editable*/font-weight:normal;
			/*@editable*/text-decoration:underline;
		}
	/*
	@tab Footer
	@section Footer Style
	*/
		#templateFooter{
			/*@editable*/background-color:#003459;
			/*@editable*/background-image:none;
			/*@editable*/background-repeat:no-repeat;
			/*@editable*/background-position:center;
			/*@editable*/background-size:cover;
			/*@editable*/border-top:0;
			/*@editable*/border-bottom:0;
			/*@editable*/padding-top:0;
			/*@editable*/padding-bottom:0;
		}
	/*
	@tab Footer
	@section Footer Interior Style
	*/
		.footerContainer{
			/*@editable*/background-color:#transparent;
			/*@editable*/background-image:none;
			/*@editable*/background-repeat:no-repeat;
			/*@editable*/background-position:center;
			/*@editable*/background-size:cover;
			/*@editable*/border-top:0;
			/*@editable*/border-bottom:0;
			/*@editable*/padding-top:0;
			/*@editable*/padding-bottom:0;
		}
	/*
	@tab Footer
	@section Footer Text
	*/
		.footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
			/*@editable*/color:#FFFFFF;
			/*@editable*/font-family:Arial;
			/*@editable*/font-size:12px;
			/*@editable*/line-height:150%;
			/*@editable*/text-align:center;
		}
	/*
	@tab Footer
	@section Footer Link
	*/
		.footerContainer .mcnTextContent a,.footerContainer .mcnTextContent p a{
			/*@editable*/color:#FFFFFF;
			/*@editable*/font-weight:normal;
			/*@editable*/text-decoration:underline;
		}
	@media only screen and (min-width:768px){
		.templateContainer{
			width:600px !important;
		}

}	@media only screen and (max-width: 480px){
		body,table,td,p,a,li,blockquote{
			-webkit-text-size-adjust:none !important;
		}

}	@media only screen and (max-width: 480px){
		body{
			width:100% !important;
			min-width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImage{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnCartContainer,.mcnCaptionTopContent,.mcnRecContentContainer,.mcnCaptionBottomContent,.mcnTextContentContainer,.mcnBoxedTextContentContainer,.mcnImageGroupContentContainer,.mcnCaptionLeftTextContentContainer,.mcnCaptionRightTextContentContainer,.mcnCaptionLeftImageContentContainer,.mcnCaptionRightImageContentContainer,.mcnImageCardLeftTextContentContainer,.mcnImageCardRightTextContentContainer{
			max-width:100% !important;
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnBoxedTextContentContainer{
			min-width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageGroupContent{
			padding:9px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnCaptionLeftContentOuter .mcnTextContent,.mcnCaptionRightContentOuter .mcnTextContent{
			padding-top:9px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageCardTopImageContent,.mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent{
			padding-top:18px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageCardBottomImageContent{
			padding-bottom:9px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageGroupBlockInner{
			padding-top:0 !important;
			padding-bottom:0 !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageGroupBlockOuter{
			padding-top:9px !important;
			padding-bottom:9px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnTextContent,.mcnBoxedTextContentColumn{
			padding-right:18px !important;
			padding-left:18px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageCardLeftImageContent,.mcnImageCardRightImageContent{
			padding-right:18px !important;
			padding-bottom:0 !important;
			padding-left:18px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcpreview-image-uploader{
			display:none !important;
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section Heading 1
	@tip Make the first-level headings larger in size for better readability on small screens.
	*/
		h1{
			/*@editable*/font-size:30px !important;
			/*@editable*/line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section Heading 2
	@tip Make the second-level headings larger in size for better readability on small screens.
	*/
		h2{
			/*@editable*/font-size:26px !important;
			/*@editable*/line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section Heading 3
	@tip Make the third-level headings larger in size for better readability on small screens.
	*/
		h3{
			/*@editable*/font-size:20px !important;
			/*@editable*/line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section Heading 4
	@tip Make the fourth-level headings larger in size for better readability on small screens.
	*/
		h4{
			/*@editable*/font-size:18px !important;
			/*@editable*/line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section Boxed Text
	@tip Make the boxed text larger in size for better readability on small screens. We recommend a font size of at least 16px.
	*/
		.mcnBoxedTextContentContainer .mcnTextContent,.mcnBoxedTextContentContainer .mcnTextContent p{
			/*@editable*/font-size:14px !important;
			/*@editable*/line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section Header Text
	@tip Make the header text larger in size for better readability on small screens.
	*/
		.headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
			/*@editable*/font-size:16px !important;
			/*@editable*/line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section Body Text
	@tip Make the body text larger in size for better readability on small screens. We recommend a font size of at least 16px.
	*/
		.bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
			/*@editable*/font-size:16px !important;
			/*@editable*/line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){
	/*
	@tab Mobile Styles
	@section Footer Text
	@tip Make the footer content text larger in size for better readability on small screens.
	*/
		.footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
			/*@editable*/font-size:14px !important;
			/*@editable*/line-height:150% !important;
		}

}</style></head>
  <body>
    <!--*|IF:MC_PREVIEW_TEXT|*-->
    <!--[if !gte mso 9]><!--><span class="mcnPreviewText" style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;">*|MC_PREVIEW_TEXT|*</span>
    <!--<![endif]-->
    <!--*|END:IF|*-->
    <center>
      <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" id="bodyTable" style="height:100%;">
        <tr>
          <td align="center" valign="top" id="bodyCell">
            <!-- BEGIN TEMPLATE // -->
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
              <tr>
                <td align="center" valign="top" id="templateHeader">
                  <!--[if gte mso 9]>
                  <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
                    <tr>
                      <td align="center" valign="top" width="600" style="width:600px;">
                        <![endif]-->
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                    <tr>
                      <td valign="top" class="headerContainer">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">
                          <tbody class="mcnImageBlockOuter">
                            <tr>
                              <td valign="top" style="padding:0px;" class="mcnImageBlockInner">
                                <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">
                                  <tbody>
                                    <tr>
                                      <td class="mcnImageContent" valign="top" style="padding-right:0px;padding-left:0px;padding-top:0;padding-bottom:0;text-align:center;">
                                        
                                        
                                        <img alt="" src="https://gallery.mailchimp.com/7d96523fc59e9c2e898d16682/images/2dc8b848-858b-44cc-8149-1e8d761adbfd.png" width="300" style="max-width:600px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </table>
                  <!--[if gte mso 9]>
                </td>
              </tr>
            </table>
            <![endif]-->
                </td>
              </tr>
              <tr>
                <td align="center" valign="top" id="templateBody">
                  <!--[if gte mso 9]>
                  <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
                    <tr>
                      <td align="center" valign="top" width="600" style="width:600px;">
                        <![endif]-->
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                    <tr>
                      <td valign="top" class="bodyContainer">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
                          <tbody class="mcnTextBlockOuter">
                            <tr>
                              <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
                                <!--[if mso]>
                                <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
                                  <tr>
                                    <![endif]-->
                                
                                <!--[if mso]>
                                <td valign="top" width="600" style="width:600px;">
                                  <![endif]-->
                                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%;min-width:100%;" width="100%" class="mcnTextContentContainer">
                                  <tbody>
                                    <tr>
                                      <td valign="top" class="mcnTextContent" style="padding-top:0;padding-right:18px;padding-bottom:9px;padding-left:18px;">
                                        
                                        <h3>
                                          <font color="#003459" face="open sans, helvetica neue, helvetica, arial, sans-serif"><strong>Hola, '.$array["data"]["name"].'.</strong>
                                        </font>
                                      </h3>
                                      <p><span style="color:#333333">Te saludamos muy cordialmente a nombre de la empresa TCI S.A. Hemos consultado la lista de anexos con los RUCs obligados y este es el resultado:</span>
                                      <br>
                                      <br><span style="color:#4eb648">Tu empresa '.$array["data"]["enterprise"].', con RUC '.$array["data"]["ruc"].' '.$array["state"]["estado"].' a emitir comprobantes electrónicos '.$array["state"]["mes"].'</span>
                                      <br>
                                      <br><span style="color:#003459"><strong>¿Tu empresa no está en esta lista? ¡Quédate con nosotros que aún hay más! Revisa la obligatoriedad de emitir comprobantes electrónicos en el 2018 según las características de la empresa:</strong></span> <a href="https://efacturacion.pe/designan-mas-de-80mil-nuevos-emisores-y-amplian-los-plazos-para-la-vigencia-de-obligaciones-al-2018/">clic aquí</a>
                                    </p>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                            <!--[if mso]>
                          </td>
                          <![endif]-->
                            <!--[if mso]>
                          </tr>
                        </table>
                        <![endif]-->
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">
                      <tbody class="mcnImageBlockOuter">
                        <tr>
                          <td valign="top" style="padding:9px;" class="mcnImageBlockInner">
                            <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">
                              <tbody>
                                <tr>
                                  <td class="mcnImageContent" valign="top" style="padding-right:9px;padding-left:9px;padding-top:0;padding-bottom:0;text-align:center;">
                                    
                                    
                                    <img alt="" src="https://gallery.mailchimp.com/7d96523fc59e9c2e898d16682/images/eae39947-54c4-4929-adf9-351d8dd43bd3.png" width="564" style="max-width:1766px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageGroupBlock">
                      <tbody class="mcnImageGroupBlockOuter">
                        <tr>
                          <td valign="top" style="padding:9px;" class="mcnImageGroupBlockInner">
                            
                            <table align="left" width="273" border="0" cellpadding="0" cellspacing="0" class="mcnImageGroupContentContainer">
                              <tbody>
                                <tr>
                                  <td class="mcnImageGroupContent" valign="top" style="padding-left:9px;padding-top:0;padding-bottom:0;">
                                    
                                    
                                    <a href="http://www.tci.net.pe/network/clientes/"><img alt="" src="https://gallery.mailchimp.com/7d96523fc59e9c2e898d16682/images/296d1de1-2c00-4afc-bae2-b8fced904ab5.png" width="264" style="max-width:883px; padding-bottom: 0;" class="mcnImage"></a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                            <table align="right" width="273" border="0" cellpadding="0" cellspacing="0" class="mcnImageGroupContentContainer">
                              <tbody>
                                <tr>
                                  <td class="mcnImageGroupContent" valign="top" style="padding-right:9px;padding-top:0;padding-bottom:0;">
                                    
                                    
                                    <a href="http://www.tci.net.pe/partners/"><img alt="" src="https://gallery.mailchimp.com/7d96523fc59e9c2e898d16682/images/d4fec4a0-4981-4f2e-a68f-db073d3066b4.png" width="264" style="max-width:883px; padding-bottom: 0;" class="mcnImage"></a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">
                      <tbody class="mcnImageBlockOuter">
                        <tr>
                          <td valign="top" style="padding:9px;" class="mcnImageBlockInner">
                            <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">
                              <tbody>
                                <tr>
                                  <td class="mcnImageContent" valign="top" style="padding-right:9px;padding-left:9px;padding-top:0;padding-bottom:0;text-align:center;">
                                    
                                    
                                    <img alt="" src="https://gallery.mailchimp.com/7d96523fc59e9c2e898d16682/images/a7a0fa7e-6c58-49e3-810c-d91ccccdb242.png" width="564" style="max-width:1766px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </table>
              <!--[if gte mso 9]>
            </td>
          </tr>
        </table>
        <![endif]-->
            </td>
          </tr>
          <tr>
            <td align="center" valign="top" id="templateFooter">
              <!--[if gte mso 9]>
              <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
                <tr>
                  <td align="center" valign="top" width="600" style="width:600px;">
                    <![endif]-->
              <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                <tr>
                  <td valign="top" class="footerContainer">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
                      <tbody class="mcnDividerBlockOuter">
                        <tr>
                          <td class="mcnDividerBlockInner" style="min-width:100%;padding:18px;">
                            <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;border-top:2px solid #FFFFFF;">
                              <tbody>
                                <tr>
                                  <td>
                                    <span></span>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                            <!--
                            <td class="mcnDividerBlockInner" style="padding:18px;">
                              <hr class="mcnDividerContent" style="border-bottom-width:0;border-left-width:0;border-right-width:0;margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;" />
                              -->
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </table>
              <!--[if gte mso 9]>
            </td>
          </tr>
        </table>
        <![endif]-->
            </td>
          </tr>
        </table>
        <!-- // END TEMPLATE -->
      </td>
    </tr>
  </table>
</center>
</body>
</html>';


  //$email_message .= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">';
  //$email_message .= "<html xmlns='http://www.w3.org/1999/xhtml'>";
  //$email_message .= "<head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
  //$email_message .= "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
  //$email_message .= "<style media='screen'>.header td{text-align:left;padding:1em 2em}.header td ";
  //$email_message .= "h1,.header td h4{margin:0;Margin:0}.img-content{padding:0;margin:0;Margin:0;position:relative}.img-content ";
  //$email_message .= "img{width:100%;height:auto}.img-content h1{position:absolute;top:0;right:20px;display:inline-block;background:#fff;padding:.3em}";
  //$email_message .= "table.container{background:#000;width:840px;margin:0 auto;Margin:0 auto;text-align:inherit;font-family:monospace,sans-serif}";
  //$email_message .= "tr{text-align:center;background:#fff}td img{margin:auto}table{border-spacing:0;border-collapse:collapse}";
  //$email_message .= "td{padding:.2em;width:70px}body{background:#e0e0e0;padding:0;margin:0}</style></head>";
  //$email_message .= "<body><table class='container'><tr class='header'><td class='' colspan='12'><h1>Hola ".$array['data']['name']."! ".$array['data']['enterprise']." - ".$array['data']['ruc']." - ".$array['state']['estado']."- ".$array['state']['mes']."</h1>";
  //$email_message .= "<h4 class='text-new'>¡Gracias por escribirnos!  Te hemos enviado un archivo con la información de nuestras soluciones.</h4></td></tr>";
  //$email_message .= "<img src='http://ilustraconsultores.com/cupones/cuponbenjamin.jpg' alt=''></td></tr></table></body></html>";
  // Ahora se envía el e-mail usando la función mail() de PHP
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=utf-8\r\n";
  //dirección del remitente
  $headers .= "From: eFacturacion | TCI  < efacturacion@tci.net.pe >\r\n";
  //Enviamos el mensaje a tu_dirección_email

  mail($array['data']['email'],$email_subject,$email_message,$headers);

}

?>
