<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<a href="http://localhost/HW5/index.html" target="_blank">Check Table</a> 
<body>

	<!-- DELETE FUNCTION -->
	<?php
	
	//INSERT FUNCTION, MODIFY FUNCTION�� ����
	$doc = new DOMDocument();
	$doc->load('G:\APM_Setup\htdocs\HW5\student.xml');
	$root = $doc->documentElement; 
	$tmp = $doc->getElementsByTagName("STUDENT");


	//STUDENT ���� ��ŭ �ݺ�
	foreach( $tmp as $tmp ){
	//�̸��� �����ϸ� ���� ����
		if( ($tmp->firstChild->nodeValue) == $_POST["name"] ){
			//TMP�� ���� , �� �ϳ��� STUDENT ����
			$root->removeChild($tmp);
		}
	}
		
	// SAVE
	echo $doc->save('G:\APM_Setup\htdocs\HW5\student.xml');
	?>

</body>
</html>