<?php
$cuemail = isset($_POST['cuemail']) ? $_POST['cuemail'] : '';
$cuname = isset($_POST['cuname']) ? $_POST['cuname'] : '';
$country_input = isset($_POST['country_input']) ? $_POST['country_input'] : '';
$cuphone = isset($_POST['cuphone']) ? $_POST['cuphone'] : '';
$phone = $country_input . '-' . $cuphone;
$service_select = isset($_POST['service_select']) ? $_POST['service_select'] : '';
$cuquery = isset($_POST['cuquery']) ? $_POST['cuquery'] : '';
$to = '';

// $to = 'info@codenexsolutions.com';
$to = 'raheescodenex@gmail.com';

// Passing `true` enables exceptions
try {

    $message = '<div style="text-align: center; background:rgba(204, 204, 204, 0.25); padding:15px">
</div>';

    $message .= "<table cellSpacing='0' cellPadding='0'  width='100%' border='0' >" .
        " <TR>
                      <TD align='Center' height='35' style='FONT-WEIGHT: bold; FONT-SIZE: 9pt; COLOR: #ffffff; FONT-FAMILY: Verdana; BACKGROUND-COLOR:#0090b9'>Quick Enquiry</TD>
                    </TR>" .
        "<TR><TD align='left'>" .
        "<table width='100%' border='0' cellPadding='1' cellSpacing='0'>" .
        "
                    <TR bgcolor='#e6e6e6'><TD width='49%' height='25' align='right' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Name &nbsp;</TD><TD width='30' height='25' align='cente' valign='middle' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD>
                    <TD width='49%' height='25' align='left' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $cuname . "</TD>
                    </TR>" .

        "<TR bgcolor='#f1f1f1'><TD align='right' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Email</TD><TD  height='25' align='cente' valign='middle' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $cuemail . "</TD></TR>" .
        "<TR bgcolor='#e6e6e6'>
             <TD align='right' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Mobile Number &nbsp;</TD><TD  height='25' align='cente' valign='middle' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>+" . $phone . "</TD></TR>" .
        "<TR bgcolor='#e6e6e6'>
             <TD align='right' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Services &nbsp;</TD><TD  height='25' align='cente' valign='middle' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $service_select . "</TD></TR>" .
        "<TR bgcolor='#e6e6e6'>
             <TD align='right' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Query &nbsp;</TD><TD  height='25' align='cente' valign='middle' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $cuquery . "</TD></TR>" .

        "</table>
                    " .
        "</TD></TR>
                    
                    " .
        " <TR>
                      <TD align='Center' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 9pt; COLOR: #ffffff; FONT-FAMILY: Verdana; BACKGROUND-COLOR:#0090b9'>  Thank You </TD>
                    </TR>" .
        "</table>";

    $from = $cuemail;
    $to = $to;
    $subject = 'Customer Enquiry';

    $headers .= "From: " . $from . "\r\n";

    // $headers .= "MWACC: \r\n";

    $headers .= "MIME-Version: 1.0\r\n";

    $headers .= "X-Priority: 3\r\n";

    $headers .= "X-Mailer: PHP" . phpversion() . "\r\n";

    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";



    mail($to, $subject, $message, $headers);



    $thak_yout_message = '<div style="text-align: center; background:rgba(204, 204, 204, 0.25); padding:15px">
</div>';

    $thak_yout_message .= "<table cellSpacing='0' cellPadding='0'  width='100%' border='0' >" .
        " <TR>
                      <TD align='Center' height='35' style='FONT-WEIGHT: bold; FONT-SIZE: 9pt; COLOR: #ffffff; FONT-FAMILY: Verdana; BACKGROUND-COLOR:#0090b9'>Thank you for your interest in our Brand. We very much look forward to meeting with you.</TD>
                    </TR>" .
        "<TR><TD align='left'>" .
        "<table width='100%' border='0' cellPadding='1' cellSpacing='0'>" .
        "
                    <TR bgcolor='#e6e6e6'><TD width='49%' height='25' align='right' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Name &nbsp;</TD><TD width='30' height='25' align='cente' valign='middle' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD>
                    <TD width='49%' height='25' align='left' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $cuname . "</TD>
                    </TR>" .

        "<TR bgcolor='#f1f1f1'><TD align='right' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Email</TD><TD  height='25' align='cente' valign='middle' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $cuemail . "</TD></TR>" .
        "<TR bgcolor='#e6e6e6'>
             <TD align='right' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Mobile Number &nbsp;</TD><TD  height='25' align='cente' valign='middle' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>+" . $phone . "</TD></TR>" .
        "<TR bgcolor='#e6e6e6'>
             <TD align='right' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Services &nbsp;</TD><TD  height='25' align='cente' valign='middle' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $service_select . "</TD></TR>" .
        "<TR bgcolor='#e6e6e6'>
             <TD align='right' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>Query &nbsp;</TD><TD  height='25' align='cente' valign='middle' style='FONT-WEIGHT: bold; COLOR: #000000'>:&nbsp;</TD><TD align='left' height='25' style='FONT-WEIGHT: normal; FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana'>" . $cuquery . "</TD></TR>" .

        "</table>
                    " .
        "</TD></TR>
                    
                    " .
        " <TR>
                      <TD align='Center' height='25' style='FONT-WEIGHT: bold; FONT-SIZE: 9pt; COLOR: #ffffff; FONT-FAMILY: Verdana; BACKGROUND-COLOR:#0090b9'>  Thank You </TD>
                    </TR>" .
        "</table>";


    $headers .= "From: " . $to . "\r\n";

    // $headers .= "MWACC: \r\n";

    $headers .= "MIME-Version: 1.0\r\n";

    $headers .= "X-Priority: 3\r\n";

    $headers .= "X-Mailer: PHP" . phpversion() . "\r\n";

    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";



    $to = $cuemail;
    $subject = 'Email Confirmation';

    mail($to, $subject, $thak_yout_message, $headers);

    echo '1';

    // $host = $_SERVER['HTTP_HOST'];
    // $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    // $extra = 'thank-you.html';
    // $redirect = "http://$host$uri/$extra";
    // header("Location: $redirect");
    // exit;

} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $e->getMessage();
}
