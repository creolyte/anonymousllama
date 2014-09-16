<?php 
	for( $x=0; $x<=100; $x++ )
	{
		$message = '';
		if( $x % 3 === 0 )
		{
			$message .= 'anonymous';
		}
		if( $x % 5 === 0 )
		{
			$message .= 'llama';
		}
		if( empty($message) )
		{
			$message = $x; 
		}

		echo $x . ': ' .$message . '<br>';
	} 
?>