<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<a href="http://localhost/HW5/index.html" target="_blank">Check Table</a> 
<body>

	<!-- MODIFY FUNCTION -->
	<?php
	
	//INSERT FUNCTION�� ����
	$doc = new DOMDocument();
	$doc->load('G:\APM_Setup\htdocs\HW5\student.xml');
	$f = $doc->documentElement; 
	
	//CATALOG�� �ƴ� STUDENT �� CHILD NODE�� ������ �����ϴ� �Լ� �̱� ������ STUDENT TAG NAME�� ���ͼ� ������ ����
	$tmp = $doc->getElementsByTagName("STUDENT");


	// TMP�� ���� ��ŭ �ݺ�
	foreach( $tmp as $tmp ){
		//������ �˻� ���, �̸��� ������ ������ ������ ��� �ٲ� �ش�.
		if( ($tmp->firstChild->nodeValue) == $_POST["name"] ){
			echo "find" ."<br />";
			//������ ������ TMP�� ������ �ְ�, ���ο� ������ TEXT BOX�� �������ڷ� ���޵� $_POST[~]�� �����̴�.
			$tmp->firstChild->nodeValue = $_POST["name"];
			//������ ����鵵 ���������� ����, NEXTSIBLING�� ���� NODE�� ����Ű�� ���̱� ������ NAME ������ AGE�� ����
			$tmp->firstChild->nextSibling->nodeValue = $_POST["age"];
			// NAME -> AGE -> ID
			$tmp->firstChild->nextSibling->nextSibling->nodeValue = $_POST["idNum"];
			// NAME -> AGE -> ID -> MAJOR
			$tmp->firstChild->nextSibling->nextSibling->nextSibling->nodeValue = $_POST["sex"];
			// NAME (FIRSRT CHILD) -> AGE -> ID -> MAJOR -> ADDRESS (LAST CHILD)
			$tmp->firstChild->nextSibling->nextSibling->nextSibling->nextSibling->nodeValue = $_POST["address"];
		}
	}
		
	// ����� ���� ������ xml ���Ͽ� ����
	echo $doc->save('G:\APM_Setup\htdocs\HW5\student.xml');
	?>

</body>
</html>