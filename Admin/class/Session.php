<?php
class Session{	
	public function getSuccssDiv($msg = NULL){
		if(!empty($msg)){
			$html = '<div class="success">'.$msg.'</div>';
			return $html;
		}
	}

	public function getErrorDiv($msg = NULL){
		if(!empty($msg)){
			$html = '<div class="danger">'.$msg.'</div>';
			return $html;
		}
	}

	public function setGlobalMsg($msg = NULL, $type = NULL){
		if(!empty($msg)){
			if(!empty($type)){
				if($type == 'success'){
					$successDiv = $this->getSuccssDiv($msg);
					$_SESSION['globalMessage'] = $successDiv;
				}
				else if($type == 'error'){
					$errorDiv = $this->getErrorDiv($msg);
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