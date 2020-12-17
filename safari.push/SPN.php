<?php
require_once('config.php');
class SPN {
    public function push($params = []) {
		if($params['url_params'][2] == "pushPackages") {
			$this->send_push_package($params['url_params'][1]);
		} else {
			$this->log_safari_notification();
		}
	}

	public function send_push_package($version = "")
	{
		$filename = SIGNATURE_INITIALS.$version.".zip";
		$filepath = GLOBAL_SERVER_PATH.'/safari.push/'.$filename;
		header("Content-type: application/zip");
		header("Content-Disposition: attachment; filename=".$filename);
		header("Content-length: " . filesize($filepath));
		header("Pragma: no-cache");
		header("Expires: 0");
		readfile($filepath);
	}

	public function log_safari_notification()
	{
		$file = GLOBAL_SERVER_PATH.'/safari.push/spn.log';
		$current = file_get_contents($file);
		$current .= file_get_contents("php://input") . "\n";
		file_put_contents($file, $current);
	}
}
?>