<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <style type="text/css">
            body,
            table,
            td,
            a {
                -webkit-text-size-adjust: 100%;
                -ms-text-size-adjust: 100%;
            }
            table,
            td {
                mso-table-lspace: 0pt;
                mso-table-rspace: 0pt;
            }
            img {
                -ms-interpolation-mode: bicubic;
            }

            /* RESET STYLES */
            img {
                border: 0;
                height: auto;
                line-height: 100%;
                outline: none;
                text-decoration: none;
            }
            table {
                border-collapse: collapse !important;
            }
            body {
                height: 100% !important;
                margin: 0 !important;
                padding: 0 !important;
                width: 100% !important;
            }

            /* iOS BLUE LINKS */
            a[x-apple-data-detectors] {
                color: inherit !important;
                text-decoration: none !important;
                font-size: inherit !important;
                font-family: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
            }

            /* MOBILE STYLES */
            @media screen and (max-width: 600px) {
                h1 {
                    font-size: 32px !important;
                    line-height: 32px !important;
                }
            }
            div[style*="margin: 16px 0;"] {
                margin: 0 !important;
            }
        </style>

        <style type="text/css"></style>
    </head>
    <body style="background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;">
        <!-- HIDDEN PREHEADER TEXT -->
        <div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
            Reset your password
        </div>

        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-top: 50px;margin-bottom: 50px;">
            <tr>
                <td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                        <tr>
                            <td
                                bgcolor="#ffffff"
                                align="center"
                                valign="top"
                                style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;"
                            >
                                <h1 style="font-size: 28px; font-weight: 400; margin: 0; letter-spacing: 0px;">Reset your password</h1>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <!-- COPY BLOCK -->
            <tr>
                <td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                        <!-- COPY -->
                        <tr>
                            <td bgcolor="#ffffff" align="left" style="text-align: center; padding: 0px 50px 10px 50px; color: #666666; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
                                <p style="margin: 0;">You can reset password from bellow link:</p>
                            </td>
                        </tr>
                        <!-- BULLETPROOF BUTTON -->
                        <tr>
                            <td bgcolor="#ffffff" align="left">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td bgcolor="#ffffff" align="center" style="padding: 20px 30px 60px 30px;">
                                            <table border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td align="center" style="border-radius: 3px;" bgcolor="#4A35EA">
                                                        <a
                                                            href="{{ route('admin.resetPassword', $token) }}"
                                                            target="_blank"
                                                            style="
                                                                font-size: 20px;
                                                                font-family: Helvetica, Arial, sans-serif;
                                                                color: #ffffff;
                                                                text-decoration: none;
                                                                color: #ffffff;
                                                                text-decoration: none;
                                                                padding: 15px 25px;
                                                                border-radius: 2px;
                                                                border: 1px solid #4a35ea;
                                                                display: inline-block;
                                                            "
                                                        >
                                                            Reset Password
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="#ffffff" align="center"
                                style="padding: 0px 30px 40px 30px; border-radius: 0px 0px 4px 4px; color: #666666; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
                                <p style="margin: 0;">
                                    Regards,<br />
                                    Akhil Enterprise
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>
