<?PHP
class 	Voyage{

	private $idVo;
	private $airline;
	private $lieu_aller;
	private $lieu_retour;
	private $description;
	private $event;
	private $nom_hotel;
	private $prix;
	private $date_aller;
	private $date_retour;
	private $image ;
	
	function __construct($idVo,$airline,$lieu_aller,$lieu_retour,$description,$event,$nom_hotel,$prix,$date_aller,$date_retour,$image){
		$this->idVo=$idVo;
		$this->airline=$airline;
		$this->lieu_aller=$lieu_aller;
		$this->lieu_retour=$lieu_retour;
		$this->description=$description;
		$this->event=$event;
		$this->nom_hotel=$nom_hotel;
		$this->prix=$prix;
		$this->date_aller=$date_aller;
		$this->date_retour=$date_retour;
		$this->image=$image;

	
	}
	
	function getIdVo(){
		return $this->idVo;
	}

	function getAirline(){
		return $this->airline;
	}
	function getLieu_aller(){
		return $this->lieu_aller;
	}
	function getLieu_retour(){
		return $this->lieu_retour;
	}
	function getDescription(){
		return $this->description;
	}
  
	
	function getEvent(){
		return $this->event;
	}
	function getNom_hotel(){
		return $this->nom_hotel;
	}
	function getPrix(){
		return $this->prix;
	}
	function getDate_aller(){
		return $this->date_aller;
	}
	function getDate_retour(){
		return $this->date_retour;
	}
	function getImage(){
		return $this->image;
	}
	

	function setIdVo($idVo){
		$this->idVo=$idVo;
	}

	function setAirline($airline){
		$this->airline=$airline;
	}
	function setLieu_Aller($lieu_aller){
		$this->lieu_aller=$lieu_aller;
	}
	function setLieu_retour($lieu_retour){
		$this->lieu_retour=$lieu_retour;
	}
	function setDescription($description){
		$this->description=$description;
	}
	function setEvent($event){
		$this->event=$event;
	}
	function setNom_hotel($nom_hotel){
		$this->nom_hotel=$nom_hotel;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
	function setDate_aller($date_aller){
		$this->date_aller=$date_aller;
	}
	function setDate_retour($date_retour){
		$this->date_retour=$date_retour;
	}
	function setImage($image){
		$this->image=$image;
	}
	
}

?>