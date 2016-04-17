<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<a href="http://localhost/HW5/index.html" target="_blank">Check Table</a> 
<body>

	<!-- SEARCH FUNCTION -->
	<?php
	$doc = new DOMDocument();
	$doc->load('G:\APM_Setup\htdocs\HW5\student.xml');
	$root = $doc->documentElement; 
	$tmp = $doc->getElementsByTagName("STUDENT");
	
	//STUDENT 개수만큼 반복
	foreach( $tmp as $tmp ){
			if( ($tmp->firstChild->nodeValue) == $_POST["name"] ){
				echo "Search Result" ."<br />";
				//MODIFY FUNCTION 처럼 FIRST CHILD를 이용하여 다음 다음 NODE들을 차례대로 SEARCH
				echo "Name : " .$tmp->firstChild->nodeValue ."<br>";
				echo "Age : " .$tmp->firstChild->nextSibling->nodeValue ."<br>"; 
				echo "SEX :  " .$tmp->firstChild->nextSibling->nextSibling->nodeValue ."<br>"; 
				echo "Student Number : " .$tmp->firstChild->nextSibling->nextSibling->nextSibling->nodeValue ."<br>"; 
				echo "Address : " .$tmp->firstChild->nextSibling->nextSibling->nextSibling->nextSibling->nodeValue ; 
			}
	}
	//검색결과는 출력이 목적이므로 XML문서가 바뀌기 하지 않기 때문에 저장을 할필요는 없다.		
	?>

</body>
</html>