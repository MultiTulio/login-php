<?php
class Db{
	public $link;
    function __construct()
	{
		$this->link = mysqli_connect('localhost','test_user','password','my_db')
	    or die("Ошибка соединения с базой данных: " . mysqli_connect_error());

		mysqli_set_charset($this->link, "utf8");
    }
    
    public function query($sql, $multi_array = false)
	{
		$out = null;
		$result = mysqli_query($this->link, $sql) or die("Ошибка: " . mysqli_error($this->link));

		if(is_bool($result)){
            return mysqli_insert_id($this->link);
        }

		$num = mysqli_num_rows($result);

		if($num == 0)
			return false;

		if(($num == 1) && (!$multi_array))// если в запросе одна строка и нет запроса на многомерный массив $multi_array = false
			return mysqli_fetch_assoc($result);

		$i = 0;

		while($i < $num){
			$data[$i] = mysqli_fetch_assoc($result);
			$i++;
		}
		// Освобождаем память
		$result->free();

		return $out;
    }
}
    
    ?>