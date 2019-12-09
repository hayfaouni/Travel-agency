<?PHP
class 	Comment{

		 
	private $comment_id;
	private $reply_id;
	private $comment;
	private $sender_name;
	private $datec;
	 
	
	function __construct($comment,$sender_name){

	
		$this->comment=$comment;
		$this->sender_name=$sender_name;
		
		

	
	}
	
	function getComment_id(){
		return $this->comment_id;
	}

	function getReply_id(){
		return $this->reply_id;
	}
	function getComment(){
		return $this->comment;
	}
	function getSender_name(){
		return $this->sender_name;
	}
	function getDatec(){
		return $this->datec;
	}
	

	function setComment_id($comment_id){
		$this->comment_id=$comment_id;
	}

	function setReply_id($reply_id){
		$this->reply_id=$reply_id;
	}
	function setComment($comment){ 
		$this->comment=$comment;
	}
	function setSender_name($sender_name){
		$this->sender_name=$sender_name;
	}
	function setDatec($datec){
		$this->datec=$datec;
	}
	
	
}

?>