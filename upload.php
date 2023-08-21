<? 

//  upload.php  MIT License benlo.com

header('Content-Type:text/plaintext');

$data = stripslashes($_POST['data']);                    

$img = str_replace('data:image/jpeg;base64,', '', $data);
$img = str_replace(' ', '+', $img);
$jpg = base64_decode($img);
   
file_put_contents('test.jpg', $jpg);

echo "OK";

?>  
