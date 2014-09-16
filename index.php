<?php 
	// You need to run this file in your localhost to see the result.
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