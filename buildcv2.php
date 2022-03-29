


<?php
$some = $_REQUEST['data'];

$some2 ="<head><style>

.cover{padding: 11px;}
.cvBody{border:1px solid black; min-height: 100%;max-height:100%; background:black}
.cv-head{background:#212121;width: 30%;padding: 4px;float:left}
.photo{background:#BCBCBC;height: 222px}
.cv-content{;background:#321A3C;padding:11px 11px 11px 11px;float:right}
.center{text-align: center;}
#cvname{font-size:12pt}
.circle{border-radius: 50%}

.flex{display: inline-flex;}
.about-tab{background:#3C474D;}
.about-head{ color: white ;font-size: 13pt;;margin: 5px 0;font-size: 16pt;text-align: center;padding:11px;background:blue;width:222px;position: relative;z-index: 1;font-family: Arial Rounded MT;}
.about-details{color: white;padding:4px; font-family: calibri light;font-size:8pt;}
.about-details li{font-size: 8pt;margin: 5px}
.body-item{}
.body-head{font-size: 17pt;text-align: center;color: white;font-family: Arial Rounded MT;font-variant:small-caps;}
.body-details{padding:0 0 0 22px; }
.detail-item,.info-item{margin-top: 3px}
.info-item{text-align:center}
.detail-item-head{font-size: 8pt;font-family: calibri light;font-weight: bold}
.detail-item-body{font-size:8pt}
.info-item-head{width: 144px;font-size: 10pt;float: left;}
.info-item-body{width: 200px;font-size: 10pt;float: right;}
.detail-item-text{font-size: 10pt;}
.detail-item{color: #CB9A5A;text-align:center}

</style></head>";
// $out="<html>
// <head>
// <title>yu</title></head>
// <body>
//     <p>hello</p>
// </body>
// </html>";
$some3 = $some2.$some;
include('converter/mpdf.php');
// $mpdf=new mpdf('c','A4','','',32,25,27,25,16,13);
$mpdf->SetDisplayMode('fullpage');
$mpdf->list_indent_first_level = 0; 
$mpdf->WriteHTML($out);
echo  $mpdf->Output('oj2.pdf');   
 ?>