<?php 
	class FileUpload {

		public function __construct(){
			return null;
		}
		
		static public function fileupload($fileName, $parameter){
			$handler = fopen($fileName, $parameter);
			return $handler;
		}

		public function close($handler){
			fclose($handler);
		}
	}
?>