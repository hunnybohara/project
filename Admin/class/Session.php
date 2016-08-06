<?php
session_start();
class Session{	
	public static function getSuccssDiv($msg = NULL){
		if(!empty($msg)){
			$html = '<div class="success">'.$msg.'</div>';
			return $html;
		}
	}

	public static function getErrorDiv($msg = NULL){
		if(!empty($msg)){
			$html = '<div class="danger">'.$msg.'</div>';
			return $html;
		}
	}

	public static function setGlobalMsg($msg = NULL, $type = NULL){
		if(!empty($msg)){
			if(!empty($type)){
				if($type == 'success'){
					$successDiv = self::getSuccssDiv($msg);
					$_SESSION['globalMessage'] = $successDiv;
				}
				else if($type == 'error'){
					$errorDiv = self::getErrorDiv($msg);
					$_SESSION['globalMessage'] = $errorDiv;
				}
			}
		}
	}

	public function getGlobalMsg(){		
		if(isset($_SESSION['globalMessage']) && !empty($_SESSION['globalMessage'])){
			$globalMessage = $_SESSION['globalMessage'];
			unset($_SESSION['globalMessage']);
			return $globalMessage;
		}
	}
}