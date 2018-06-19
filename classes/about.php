<?php
class about{
	public function display($pdo){
		$content = $pdo->prepare("SELECT * from content where page='about'");
		$content->execute();
		$arrContent=$content->fetch();
		return $arrContent;
	}
}
?>