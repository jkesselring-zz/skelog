<?php

	class Logger{
		private $name = "";
		private $y; //Year as YYYY
		private $m; //Full name of month.
		private $d; //Numeric day of month
		private $dow; //Name of day of week
		private $author; //Optional, if set will be used to sign message.
		private $type;
		private $title;
		private $message;
		private $filename = "";
		private $lineNum = -1;
		private $time = "";

		public  $format = "log";
		public $logMessage = "";
		public $messages = array();

		//argument passed shall be the file name.
		public function __construct($errorType) {
			//Sets default time zone, use if necessary. Otherwise comment out / delete.
			date_default_timezone_set("America/New_York");
			$this->name = $errorType;
			$this->y   = date("Y");
			$this->m   = date("F");
			$this->d   = date("j");
			$this->dow = date("l");
		}
		//filename and lineNum are optional.
		public function setLogContent($type, $title, $message, $filename = "", $lineNum = -1, $format =""){
			$this->time = date("H:i:s");
			$this->type = $type;
			$this->title = $title;
			$this->message = $message;
			if($filename != ""){
				$this->filename = $filename;
			}
			if($lineNum > -1){
				$this->lineNum = $lineNum;
			}

			if(strlen($format) < 4){
				$this->log();
			}
		}
		 
		//Tried to make this easy to read when looking at many lines.
		private function log(){
			$line = "((( [{$this->time}]| Type->({$this->type}), Title->({$this->title}) Message->({$this->message})";
			if(strlen($this->filename) > 0){
				$line .= ", In File->({$this->filename}) ";
				if($this->lineNum > -1){
					$line .= ", On line->({$this->lineNum})";
				}
			}
			
			if(strlen($this->author) > 0){
				$line .= ", By->({$this->author})";
			}
			$line .= " )))\r\n\r\n";
			$this->logMessage = $line;
			$this->messages[] = $line;
			$this->writeToLog("log");
		}

		public function author($value = ""){
			if(strlen($value) == 0){
				return $this->author;
			}
			$this->author = $value;
		}

		private function writeToLog($fileType){
			try{
				$this->createDirectories();
				$file = "logs/".$this->y."/".$this->m."/".$this->d."/".$this->name.".{$fileType}";
				file_put_contents($file, $this->logMessage, FILE_APPEND | LOCK_EX);
			} catch (Exception $ex){
				var_dump($ex);
			}
		}

		public function writeFeed($type){
			$type = strtolower($type);
			switch ($type) {
				case 'xml':
					$this->writeXML();
					break;
				case 'json':
					$this->writeJSON();
					break;
				default:
					break;
			}
		}

		private function writeXML (){
			throw new Exception("Write XML not yet implemented.", 1);
		}

		private function writeJSON (){
			throw new Exception("Write JSON not yet implemented", 1);
		}

		private function createDirectories(){

			if(!file_exists("logs")){
				mkdir("logs");	
			}
			if(!file_exists("logs/{$this->y}")){
				mkdir("logs/{$this->y}");
			}
			if(!file_exists("logs/{$this->y}/{$this->m}")){
				mkdir("logs/{$this->y}/{$this->m}");
			}
			if(!file_exists("logs/{$this->y}/{$this->m}/{$this->d}")){
				mkdir("logs/{$this->y}/{$this->m}/{$this->d}");
			}

			//Creates empty file with the name of the day of the week.
			//Can be removed, log file(s) not affected.
			if(!file_exists("logs/{$this->y}/{$this->m}/{$this->d}/{$this->dow}")){
				$file = "logs/{$this->y}/{$this->m}/{$this->d}/{$this->dow}";
				$handle = fopen($file, 'w') or die("Cannot open file. :(");
				fclose($handle);
			}
		}
	}

?>