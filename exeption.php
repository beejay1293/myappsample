<?php
/*
function divide($num1, $num2){
	 if($num2 == 0){

	 	throw new Exception('Cannot divide by 0');

	 }else{
	 	return $num1/$num2;
	 }

	}

echo  divide(10, 0);*/

if(isset($_POST['age'])){
	$age = $_POST['age'];

        
        class YesException extends Exception {

        	public function showSpecific(){
        		return 'Error on :Line '.$this->getLine().'in'. $this->getFile(); 
        	}

        }
        class NoException extends Exception {
        	public function showSpecific(){
        		return 'Error on: Line '.$this->getLine().' in '. $this->getFile();

        	}
        }


		try{
			if($age==18){
	            throw new YesException();			
			}else if($age<18){
				throw new NoException('Not old enought');
			}else{
				echo 'old enough';
			}
		} catch (YesException $e) {
			echo  $e->showSpecific();
		} catch (NoException $e){
			echo $e->showSpecific();
		}
}
?>


  <form action="exeption.php" method="POST">
  	AGE :  <input type="text" name="age">    <input type="submit" name="submit">


  </form>