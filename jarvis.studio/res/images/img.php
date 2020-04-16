<?php
// require_once($_SERVER['DOCUMENT_ROOT'].'/antiflood/fban.php');
$id = htmlspecialchars(isset($_GET['id']) ? $_GET['id'] : "");

try {
    if (! @include_once($_SERVER['DOCUMENT_ROOT'].'/res/images/'.$id.'.dat')) {
        showError();
    } if (!file_exists($_SERVER['DOCUMENT_ROOT'].'/res/images/'.$id.'.dat')) {
        showError();
    } else {
        require_once($_SERVER['DOCUMENT_ROOT'].'/res/images/'.$id.'.dat');
        blocked($b64, $isBlocked);
    }
} catch(Exception $e) {    
    showError();
}

function showError() {
    $b64 = 'iVBORw0KGgoAAAANSUhEUgAAAOoAAAAZCAIAAACw8CWuAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAOeSURBVHhe7ZjrbRwxDIRdkGu5UtzINnJ9uLGIo9fwodXZWQdrhN+PxCKHM9RZOAR5S5IkSZIkSZLkH/E4Pj8/j0c7JfdAfivPj/d2ssebsnxKaFz4ypqfkC/3lvBTeP94/obXu3q+47Fd8tTwYeSjvT/0HfML3m4hfL4oPo/jmkeXjzf5KYLnWx/vx7t6djhMwgc/UN3t6x0CNjED2n9+M7S1SC1Kc/SCDn/FRHuKdmgCAbzM99TK37CNq1zoxlbG7BtX8+usVv3GTZ1+BYZYiwKcVezjmKIpiY5Ru5xQ7ajlkPN8PmcVFRKVM02EebTo/Nn6mNEarE6kFUS/FtRgt8rC37CNu9itKJYfhB9H38VJtaq0t/XTq+53M+P+vATC6c3BUWyFO8YAcA3awnq5qtDL8h4O3yRH+RHR3hYVtSpXfLeaDQcjQE/+gbUSFCLPxlfjCn/jZsHA61cDomoV7e3TueK7Zl4OkcDWApQMQas7TXgmjqFR7dlQxb3CIqGmB71ESq/9ZTTBFNfgYG6iRpQA/sdDal2w8Tfs4q5186ju7moVqqjpKIhqr9zU9uMpD81igNZwBtAWrMaursrxGlyNFXxBANnEh/b1OsbSzE+a06o/gmjP8alJbTMfbCps4q516xjZ6KK+vlqFC/zbWWV3warPbRUEFmWD2lbLUal30tR90Nlnxy48FyvoA4KAY/jDG1TVcZQe/rCeHBkRraGChmB8ZrXGW574GzZx17o1ATt+5WoV6fUInt6tutltMb5zrTSfSBzFNmaL7zHh0VDBgiibBd7AVyBHTXplbhYG0umZAbxSRwU1gbKRWhds/A27uOvd1IehK7urFXSCmlZjnq/vJkRTHszif3id9sSAWtHuuhYolDUORkAzaKvrockVFJpcfp4/KR2ZBkTXlYlhUBd5KpXUhuDc37CNu9Ktrj4/ieb++tVsgNp0s+pmt3j83HIAmeClHPs4+PLaGydq+2SjMEfknAjQ1yduQ6y30avNY52dOaj0Lppq7Tq/Ti5IbZ5P/Q3buEvd0B9W1fmsUJDaOOvN3LnOm+m+DpqnN8XRnRdXVUAYSzm2yTq8qFDX7yzNBkrRczjDWJiWHLFCc+V1pEfTTmFuMqV9DWYECdVKX11qurL0N2zjwIVubFWUqnt6tdqMWfgX5jKv3VSnLC96P6LrJfdhvGPDqv6fkc/33uTzPSWf773J53tKPt8kSZIkSZLkR3h7+wM0nGBq7ey+VwAAAABJRU5ErkJggg==';
    header('Content-Type: image/png');
    echo(base64_decode($b64));
}

function showImage($b64) {
    echo(base64_decode($b64));
}

function blocked($b64, $isBlocked) {
    // Тут можно добавить изображение, но не показывать его
    if ($isBlocked == 0) {
        //echo $isBlocked;
        showImage($b64);
    } else {
        showError();
    }
}

function replace($link) {
$replaced = <<<EOL
<span>Перенаправление на: <a href = "$link">$link</a></span>
<script>
    window.location.assign("$link");
</script>
EOL;
echo($replaced);
}
?>