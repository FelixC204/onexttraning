<?php
//  Tạo một đối tượng DOMDocument
$doc = new DOMDocument();
// Load HTML từ một chuỗi
$doc->load('link.xml');
// Lấy tất cả thẻ link
$links = $doc->getElementsByTagName('link');
// Lấy tham số query từ URL
$q = $_GET["query"];
// Biến lưu trữ kết quả
if (strlen($q) > 0) {
    $hint = "";
    for ($i = 0; $i < ($links->length); $i++) {
        $title = $links->item($i)->getElementsByTagName('title');
        $url = $links->item($i)->getElementsByTagName('url');
        if ($title->item(0)->nodeType == 1) {
            if (stristr($title->item(0)->childNodes->item(0)->nodeValue, $q)) {
                if ($hint == "") {
                    $hint = "<a href='" .
                        $url->item(0)->childNodes->item(0)->nodeValue .
                         "' target='_blank'>" . $title->item(0)->childNodes->item(0)->nodeValue . "</a>";
                } else {
                    $hint = $hint . "<br /><a href='" .
                     $url->item(0)->childNodes->item(0)->nodeValue .
                     "' target='_blank'>" . 
                     $title->item(0)->childNodes->item(0)->nodeValue . "</a>";
                }
            }
        }
    }
}

if($hint == "") {
    $response = "Không tìm thấy kết quả";
} else {
    $response = $hint;
}

echo $response;
