<?php
$links = array(
    "1" => "https://mynewfeed.com/short/91839?stream_uuid=9317c579-e7bf-4d48-a931-e16f9fd33329&trek=1",
    "2" => "https://mynewfeed.com/short/91837?stream_uuid=6e54efc6-bd6b-4dfc-8bea-b7f7c0d1f756&trek=1",
    "3" => "https://mynewfeed.com/short/86691?stream_uuid=bbdede2d-a96f-4417-9d78-a9b048a5b4bc&trek=1",
    "4" => "https://mynewfeed.com/short/87330?stream_uuid=be4e519a-f7cb-4a7f-9509-e030f76806ca&trek=1",
    "5" => "https://mynewfeed.com/short/33938?stream_uuid=4d3b1b8c-5501-4645-bdc9-c4504cc7e192&trek=1",
    "6" => "https://mynewfeed.com/short/96148?stream_uuid=6fb7c231-49d9-4ecf-b54b-7396b61ca53a&trek=1",
    "7" => "https://mynewfeed.com/short/91106?stream_uuid=9a4c983e-25a6-4305-956b-0281be36d80a&trek=1",
    "8" => "https://mynewfeed.com/short/66341?stream_uuid=be76c67e-c221-4fcd-beea-18aa7fcc2f8d&trek=1",
    "9" => "https://mynewfeed.com/short/103586?stream_uuid=8457fe82-d7af-4ae3-8ede-1201f18c3e34&trek=1",
    "10" => "https://mynewfeed.com/short/69778?stream_uuid=2b122359-4dda-4baf-80f5-324c087032e7&trek=1",
    "11" => "https://mynewfeed.com/short/83347?stream_uuid=06a0dfca-71a8-4632-9e82-0d8910c9f196&trek=1",
    "12" => "https://mynewfeed.com/short/66944?stream_uuid=fdecbc9e-0b75-48cb-afd7-117acad7aeff&trek=1",
    "13" => "https://mynewfeed.com/short/82385?stream_uuid=377c3830-b9f9-4d48-9b51-8386140a80a1&trek=1",
    "14" => "https://mynewfeed.com/short/85351?stream_uuid=cafc0467-3bef-4379-bc54-07714262fcb0&trek=1",
);

// если нет параметра или значение не найдено в массиве
$defaultLink = "https://mynewfeed.com/short/91839?stream_uuid=9317c579-e7bf-4d48-a931-e16f9fd33329&trek=1";

if (isset($_GET['link'])) {
    $linkKey = $_GET['link'];
    if (array_key_exists($linkKey, $links)) {
        header('Location: ' . $links[$linkKey]);
        exit;
    }
}

header('Location: ' . $defaultLink);
exit;
?>