<?php 

	class PrintRecord {
		public function __construct(Array $records){
			foreach($records as $record){
				echo '<p>';
				foreach($record as $key => $value){
					echo $key . ' : ' . $value . '</br>';
				}
				echo '<hr>';
				echo '</p>';
			}
		}
	}
 ?>