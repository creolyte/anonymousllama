<?php 
	for( $x=1; $x<=100; $x++ )
	{
		$message = '';
		if( $x % 3 === 0 )
		{
			$message .= 'Anonymous';
		}
		if( $x % 5 === 0 )
		{
			$message .= 'Llama';
		}
		if( empty($message) )
		{
			$message = $x; 
		}

		echo $x . ': ' .$message . '<br>';
	} 
?>