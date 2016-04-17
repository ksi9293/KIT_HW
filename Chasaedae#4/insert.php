<html>
<a href="http://localhost/HW5/index.html" target="_blank">Check Table</a>  
<body>

	<!-- INSERT FUNCTION -->
	<?php
	
	//W3 SCHOOLS의 SIMPLE XML LOAD 코드를 참조
	//새로운 DOM객체 생성
	$doc = new DOMDocument();
	//XML의 파일 위치을 생성한 DOM객체에 로드
	$doc->load('G:\APM_Setup\htdocs\HW5\student.xml');
	//입력한 내용아 들어갈 FRAGMENT 생성
	$f = $doc->createDocumentFragment();
		
	// 밑의 구문과 동일한 내용이지만, 처리가 되지 않음
	//$f->appendXML("<STUDENT><NAME>".$_POST["fname"]."</NAME>");
	//$f->appendXML("<AGE>" .$_POST["age"]."</AGE>");
	//$f->appendXML("<IDNUM>".$_POST["id"]."</IDNUM>");
	//$f->appendXML("<MAJOR>" .$_POST["major"]."</MAJOR>");
	//$f->appendXML("<ADDRESS>" .$_POST["addr"]."</ADDRESS></STUDENT>");
	//$f->appendXML("<student><name>".$_name."</name><sid>".$_sid."</sid><address>".$_address."</address></student>");
	
	//TAG 명을 정의 하고 INSERT TEXT BOX에서 넘어온 fname, age, id, major, address내용을 XML 문서에 삽입
	//CATALOG -> STUDENT -> (NAME, IDNUM, AGE, MAJOR, ADDRESS)와 같은 구조를 가지게 구성하였다.
	$f->appendXML("<STUDENT><NAME>".$_POST["name"]."</NAME><AGE>".$_POST["age"]."</AGE><IDNUM>".$_POST["idNum"]."</IDNUM><SEX>".$_POST["sex"]."</SEX><ADDRESS>".$_POST["address"]."</ADDRESS></STUDENT>");
	
	//ROOT ELEMENT의 CHILD로 APPENDXML한 내용이 CHILD로 추가됨, 주석처리된 부분은 추가 되지않음.
	$doc->documentElement->appendChild($f);
	
	//XML파일에 저장
	
	echo $doc->save('G:\APM_Setup\htdocs\HW5\student.xml');	
	?>

</body>
</html>