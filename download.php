<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script> -->
<?php
// $file = "allcv/1645218986-13.html";
$file = $_POST["pdf_file"];
// $file = "bb.html";
$file = "allcv/".$file;

$handle = fopen($file, 'r');
$data = fread($handle,filesize($file));
echo $data;

// include('converter/mpdf.php');
// $mpdf=new mPDF();
// $mpdf->WriteHTML($data);
// echo  $mpdf->Output('resuome.pdf','F'); 

// fclose($handle);  
// header('location:savedCv.php');

// try {
    // $filename = date("d-m-Y H:i:s");
    // require_once("vendor/autoload.php");
    // $mpdf = new mPDF([
    //   'mode' => 'c',
    //   'margin_top' => 35,
    //   'margin_bottom' => 17,
    //   'margin_header' => 10,
    //   'margin_footer' => 10,
    // ]);
    // // $mpdf->showImageErrors = true;
    // // $mpdf->mirrorMargins = 1;
    // $mpdf->SetTitle('Generate PDF file using PHP and MPDF | Mitrajit\'s Tech Blog');
    // $mpdf->WriteHTML($data);
    // $mpdf->Output('yu.pdf', 'I');

// $mpdf=new mPDF('c','A4','','',32,25,27,25,16,13); 
// $mpdf->SetDisplayMode('fullpage');
// $mpdf->list_indent_first_level = 0; 
// $stylesheet = file_get_contents('mpdfstyletables.css');
// $mpdf->WriteHTML($stylesheet,1);
// $mpdf->WriteHTML($data);
// $mpdf->Output('bbf.pdf','D');
//     fclose($handle);
//   } 
//   catch($mpdf->$e) {
//     echo $e->getMessage();
//   }


 ?>
 <!-- <script>
 window.onload = function () {
    document.getElementById("download")
        .addEventListener("click", () => {
            const invoice = this.document.getElementById("invoice");
            console.log(invoice);
            console.log(window);
            var opt = {
                margin: 1,
                filename: 'myfile.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
            html2pdf().from(invoice).set(opt).save();
        })
}
</script> -->