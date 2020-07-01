<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-Type" content="text/html; charset=utf-8" />
        <!--[if !mso]><!-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!--<![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <style type="text/css">
            .ReadMsgBody { width: 100%; background-color: #FFFFFF; }
            .ExternalClass { width: 100%; background-color: #FFFFFF; }
            .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }
            html { width: 100%; }
            body { -webkit-text-size-adjust: none; -ms-text-size-adjust: none; margin: 0; padding: 0; }
            table { border-spacing: 0; table-layout: fixed; margin: 0 auto; }
            table table table { table-layout: auto; }
            .yshortcuts a { border-bottom: none !important; }
            img:hover { opacity: 0.9 !important; }
            a { color: #6EC8C7; text-decoration: none; }
            .textbutton a { font-family: 'open sans', arial, sans-serif !important;}
            .btn-link a { color:#FFFFFF !important;}
            @media only screen and (max-width: 480px) {
            body { width: auto !important; }
            *[class="table-inner"] { width: 90% !important; text-align: center !important; }
            *[class="table-full"] { width: 100% !important; text-align: center !important; }
            /* image */
            img[class="img1"] { width: 100% !important; height: auto !important; }}
        </style>
    </head>
    <body>
        <!--logo-->
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#eceff3">
            <tr>
                <td align="center">
                    <table border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="520" align="center">
                                <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0" class="table-inner">
                                    <tr>
                                        <td height="40"></td>
                                    </tr>
                                    <!--Header Logo-->
                                    <tr>
                                        <td align="center" style="line-height: 0px;">
                                            <img style="display:block; line-height:0px; font-size:0px; border:0px;width: 45%;" src="{{env('APP_URL')}}//landing/assets/images/logos/connekty.png" alt="Connekty" />
                                        </td>
                                    </tr>
                                    <!--end slogan-->
                                    <tr>
                                        <td height="15"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <!--end logo-->
        <!--content-->
        @yield('content')
        <!-- end content-->
        <!--content-->
        <table align="center" bgcolor="#eceff3" width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td align="center">
                    <table align="center" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="520" align="center">
                                <table bgcolor="#FFFFFF" class="table-inner" width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td align="center">
                                            <!-- button -->
                                            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td width="50" valign="bottom">
                                                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                            <tr>
                                                                <td height="20"></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td width="50" valign="bottom">
                                                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                            <tr>
                                                                <td height="20"></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!-- end button -->
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <!--end content-->
        <!--footer-->
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#eceff3">
            <tr>
                <td align="center">
                    <table align="center" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="520" align="center">
                                <table align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td align="center" class="preference-link" style="font-family: 'Open sans', Arial, sans-serif; color:#7f8c8d; font-size:11px; line-height: 28px;font-style: italic;">
                                            © {{ date('Y') }}, {{env('APP_NAME')}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            <table border="0" align="center" cellpadding="0" cellspacing="0">
                                                <!--social-->
                                                <tr>
                                                    <td align="center" style="line-height: 0px;">
                                                        <a href="https://www.facebook.com/" target="_blank">
                                                            <img style="display:block; line-height:0px; font-size:0px; border:0px;" src="{{env('APP_URL')}}/app/assets/images/fb.png" alt="Facebook Connekty" />
                                                        </a>
                                                    </td>
                                                    <td width="15"></td>
                                                    <td align="center" style="line-height: 0px;">
                                                        <a href="https://www.youtube.com" target="_blank">
                                                            <img style="display:block; line-height:0px; font-size:0px; border:0px;" src="{{env('APP_URL')}}/app/assets/images/yt.png" alt="Youtube Connekty" />
                                                        </a>
                                                    </td>
                                                </tr>
                                                <!--end social-->
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="55"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <!--end footer-->
    </body>
</html>
