<?php
for($n=0;$n<10;$n++)
{while(true)
	{switch($n)
		{ case 2:
		  		echo $n;
		  		break;//跳出switch
		  case 4:
		  		echo $n;
		  		break 1;//跳出switch
		  case 6:
		  		echo $n;
		  		break 2;//跳出while循环
		  case 8:
		  		echo $n;
		  		break 3;//跳出for循环
		}
		$n++;
	}
}
?>