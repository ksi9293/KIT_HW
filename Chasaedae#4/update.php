<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<a href="http://localhost/HW5/index.html" target="_blank">Check Table</a> 
<body>

	<!-- MODIFY FUNCTION -->
	<?php
	
	//INSERT FUNCTION과 동일
	$doc = new DOMDocument();
	$doc->load('G:\APM_Setup\htdocs\HW5\student.xml');
	$f = $doc->documentElement; 
	
	//CATALOG가 아닌 STUDENT 에 CHILD NODE의 내용을 조작하는 함수 이기 때문에 STUDENT TAG NAME을 얻어와서 변수에 저장
	$tmp = $doc->getElementsByTagName("STUDENT");


	// TMP의 개수 만큼 반복
	foreach( $tmp as $tmp ){
		//간단한 검색 기능, 이름이 같으면 나머지 내용을 모두 바꿔 준다.
		if( ($tmp->firstChild->nodeValue) == $_POST["name"] ){
			echo "find" ."<br />";
			//기존의 내용은 TMP가 가지고 있고, 새로운 내용은 TEXT BOX에 전달인자로 전달된 $_POST[~]의 내용이다.
			$tmp->firstChild->nodeValue = $_POST["name"];
			//나머지 내용들도 마찬가지로 변경, NEXTSIBLING은 다음 NODE를 가리키는 것이기 때문에 NAME 다음인 AGE가 선택
			$tmp->firstChild->nextSibling->nodeValue = $_POST["age"];
			// NAME -> AGE -> ID
			$tmp->firstChild->nextSibling->nextSibling->nodeValue = $_POST["idNum"];
			// NAME -> AGE -> ID -> MAJOR
			$tmp->firstChild->nextSibling->nextSibling->nextSibling->nodeValue = $_POST["sex"];
			// NAME (FIRSRT CHILD) -> AGE -> ID -> MAJOR -> ADDRESS (LAST CHILD)
			$tmp->firstChild->nextSibling->nextSibling->nextSibling->nextSibling->nodeValue = $_POST["address"];
		}
	}
		
	// 변경된 내용 지정된 xml 파일에 저장
	echo $doc->save('G:\APM_Setup\htdocs\HW5\student.xml');
	?>

</body>
</html>