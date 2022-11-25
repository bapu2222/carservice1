<html>

<head>
    <title></title>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'/>
    <style type='text/css'>
        @media screen {
            @font-face {
                font-family: lato;
                font-style: normal;
                font-weight: 400;
                src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
            }

            @font-face {
                font-family: lato;
                font-style: normal;
                font-weight: 700;
                src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format('woff');
            }

            @font-face {
                font-family: lato;
                font-style: italic;
                font-weight: 400;
                src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format('woff');
            }

            @font-face {
                font-family: lato;
                font-style: italic;
                font-weight: 700;
                src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
            }
        }

        /* CLIENT-SPECIFIC STYLES */
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

        /* ANDROID CENTER FIX */
        div[style*='margin: 16px 0;'] {
            margin: 0 !important;
        }
    </style>
</head>

<body style='background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;'>
<!-- HIDDEN PREHEADER TEXT -->
<div style='display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: lato, Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;'>
    We're thrilled to have you here! Get ready to dive into your new account.
</div>
<table border='0' cellpadding='0' cellspacing='0' width='100%'>
    <!-- LOGO -->
    <tr>
        <td bgcolor='#FFA73B' align='center'>
            <table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
                <tr>
                    <td align='center' valign='top' style='padding: 40px 10px 40px 10px;'></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor='#FFA73B' align='center' style='padding: 0px 10px 0px 10px;'>
            <table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
                <tr>
                    <td bgcolor='#ffffff' align='center' valign='top'
                        style='padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: Lato, Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;'>
                        <h1 style='font-size: 48px; font-weight: 400; margin: 0;'>Welcome!</h1> <img
                                src=' https://img.icons8.com/clouds/100/000000/handshake.png' width='125' height='120'
                                style='display: block; border: 0px;'/>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor='#f4f4f4' align='center' style='padding: 0px 10px 0px 10px;'>
            <table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
                <tr>
                    <td bgcolor="#ffffff" align="left"
                        style="padding: 20px 30px 0px 30px;color: #666666;font-family: lato, Helvetica, Arial, sans-serif;font-size: 18px;font-weight: 400;line-height: 25px;">
                        <p style="margin: 0;"><strong>Hi {{$appointment->user->name}} ,</strong></p>
                    </td>
                </tr>
                <tr>
                    <td bgcolor='#ffffff' align='left'
                        style='padding: 15px 30px 17px 30px; color: #666666; font-family: lato, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
                        <p style='margin: 0;'>your appointment is
                            {{$appointment->appointment_date}} Date and appointment slot
                            is {{$appointment->appointment_time}}.</p>
                    </td>
                </tr>
                <tr>
                    <td bgcolor='#ffffff' align='left'
                        style='padding: 20px 30px 40px 30px; color: #666666; font-family: lato, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
                        <p style='margin: 0;'>Car is Upto date service so your car Deliver in 1 Hour any other
                            Requirement to call Helpline number other vise visit in your store.</p>
                    </td>
                </tr>
                <tr>
                    <td bgcolor='#ffffff' align='left'
                        style='padding: 0px 30px 0px 30px; color: #666666; font-family: lato, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
                        <p style='margin: 0;'>Your Car Details :</p>
                        <hr>
                    </td>
                </tr> <!-- COPY -->
                <tr>
                    <td bgcolor='#ffffff' align='left'>
                        <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                            <tbody>
                            <tr>
                                <td bgcolor='#ffffff' align='center' style='padding: 5px 13px 10px 22px;'>
                                    <strong>Car Name :</strong>
                                </td>
                                <td bgcolor='#ffffff' align='center'
                                    style='padding: 5px 13px 10px 22px;'>{{$appointment->brands->name}}</td>
                            </tr>
                            <tr>
                                <td bgcolor='#ffffff' align='center' style='padding: 5px 13px 10px 22px;'>
                                    <strong>Car Model :</strong>
                                </td>
                                <td bgcolor='#ffffff' align='center'
                                    style='padding: 5px 13px 10px 22px;'>{{$appointment->models->name}}</td>
                            </tr>




{{--                            <table>--}}
{{--                                <thead>--}}
{{--                                <th>--}}
{{--                                    <tr>--}}
{{--                                        Service--}}
{{--                                    </tr>--}}
{{--                                    <tr>Price</tr>--}}
{{--                                </th>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}

{{--                                @foreach($name as $key => $value)--}}
{{--                                    <tr>--}}
{{--                                        <td bgcolor='#ffffff' align='center' style='padding: 5px 13px 10px 22px;'>--}}
{{--                                            <strong>Service </strong>--}}
{{--                                        </td>--}}
{{--                                        <td bgcolor='#ffffff' align='center'--}}
{{--                                            style='padding: 5px 13px 10px 22px;'>{{$value}}</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td bgcolor='#ffffff' align='center' style='padding: 5px 13px 10px 22px;'>--}}
{{--                                            <strong>Price </strong>--}}
{{--                                        </td>--}}
{{--                                        <td bgcolor='#ffffff' align='center'--}}
{{--                                            style='padding: 5px 13px 10px 22px;'>{{$price[$key]}}</td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                                </tbody>--}}
{{--                            </table>--}}

                            </tbody>

                        </table>
                    </td>
                </tr> <!-- COPY -->

                <tr>
                    <td bgcolor='#ffffff' align='center'>

                        <table width='70%' border='0' cellspacing='0' cellpadding='0'>

                            <thead>
                            <tr>
                                <th>Qty</th>
                                <th>Serial #</th>
                                <th>Service</th>
                                <th>Subtotal</th>
                            </tr>
                            </thead>
                            <tr>
                            @foreach($name as $key => $value)
                                <tr>
                                    {{--                                        <td bgcolor='#ffffff' align='center' style='padding: 5px 13px 10px 22px;'>--}}
                                    {{--                                            <strong>Service </strong>--}}
                                    {{--                                        </td>--}}
                                    {{--                                        <td bgcolor='#ffffff' align='center'--}}
                                    {{--                                            style='padding: 5px 13px 10px 22px;'>{{$value}}</td>--}}

                                    <td>{{$key}}</td>
                                    <td>#{{rand(10000,500000)}}MCS</td>
                                    <td>{{$value}}</td>
                                    <td>₹ {{$price[$key]}}</td>
                                </tr>

                                @endforeach
                            <tr>
                                <td colspan="3">Total</td>
                                <td>₹ {{$total}}</td>
                            </tr>
                                </tbody>
                        </table>
                    </td>
                </tr>




                <tr>
                    <td bgcolor='#ffffff' align='left'
                        style='padding: 20px 30px 20px 30px; color: #666666; font-family: lato, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
                        <p style='margin: 0;'><a href='#' target='_blank' style='color: #FFA73B;'>http://carservice.test/</a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td bgcolor='#ffffff' align='left'
                        style='padding: 0px 30px 20px 30px; color: #666666; font-family: lato, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
                        <p style='margin: 0;'>If you have any questions,or fill the wrong detail You just reply to this
                            email—we're always happy to
                            help out.</p>
                    </td>
                </tr>
                <tr>
                    <td bgcolor='#ffffff' align='left'
                        style='padding: 0px 30px 40px 30px; border-radius: 0px 0px 4px 4px; color: #666666; font-family: lato, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
                        <p style='margin: 0;'>Cheers,<br>Car-Service Team</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor='#f4f4f4' align='center' style='padding: 30px 10px 0px 10px;'>
            <table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
                <tr>
                    <td bgcolor='#FFECD1' align='center'
                        style='padding: 30px 30px 30px 30px; border-radius: 4px 4px 4px 4px; color: #666666; font-family: lato, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
                        <h2 style='font-size: 20px; font-weight: 400; color: #111111; margin: 0;'>Need more help?</h2>
                        <p style='margin: 0;'><a
                                    href='https://api.whatsapp.com/send?phone=15551234567&text=Send20%a20%quote?lang=en'
                                    target='_blank' style='color: #FFA73B;'>We&rsquo;re here to
                                help you out</a></p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor='#f4f4f4' align='center' style='padding: 0px 10px 0px 10px;'>
            <table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
                <tr>
                    <td bgcolor='#f4f4f4' align='left'
                        style='padding: 0px 30px 30px 30px; color: #666666; font-family: lato, Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 18px;'>
                        <br>
                        <p style='margin: 0;'>If these emails get annoying, please feel free to <a href='#'
                                                                                                   target='_blank'
                                                                                                   style='color: #111111; font-weight: 700;'>unsubscribe</a>.
                        </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>

</html>
