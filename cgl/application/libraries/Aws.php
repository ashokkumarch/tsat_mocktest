<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH . "third_party/AWS/Autoloader.php";
class Aws extends MY_Controller {
    public function __construct() {
        parent::__construct();
    }
	
	public function upload_imageS3($path,$image)
	{
	// Write the image to S3
	$s3 = new Aws\S3\S3Client([
	'region'  => 'me-south-1',
	'version' => 'latest',
	'credentials' => [
		'key'    => "AKIA26LZ5QSDGCZDVLVU",
		'secret' => "E4SSkjdfwf0VtdLM36evSl5Dy/zv6f6tbebcI4a4",
		]
	]);
		
	$result = $s3->putObject([
	'Bucket' => 'weby',
	'Key'    => $path.$image,
	'SourceFile' => $image
	]);	
	if(is_file($image)){
      //unlink($image);
    }
	}
	
}
?>