<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<a href="http://localhost/HW5/index.html" target="_blank">Check Table</a> 
<body>

	<!-- DELETE FUNCTION -->
	<?php
	
	//INSERT FUNCTION, MODIFY FUNCTION과 동일
	$doc = new DOMDocument();
	$doc->load('G:\APM_Setup\htdocs\HW5\student.xml');
	$root = $doc->documentElement; 
	$tmp = $doc->getElementsByTagName("STUDENT");


	//STUDENT 개수 만큼 반복
	foreach( $tmp as $tmp ){
	//이름이 동일하면 조건 만족
		if( ($tmp->firstChild->nodeValue) == $_POST["name"] ){
			//TMP를 삭제 , 즉 하나의 STUDENT 삭제
			$root->removeChild($tmp);
		}
	}
		
	// SAVE
	echo $doc->save('G:\APM_Setup\htdocs\HW5\student.xml');
	?>

</body>
</html>