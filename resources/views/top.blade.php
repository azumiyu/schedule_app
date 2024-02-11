<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @extends('header')

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">タイトルu</th>
                    <th scope="col">場所</th>
                    <th scope="col">日時</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-success">
                    <th scope="row">1</th>
                    <td>練習試合ああああああ</td>
                    <td>やまだ第二うどんぐっちゃぐちゃ卵ふりかけ球場</td>
                    <td>2/21(土)17:00~</td>
                </tr>
                <tr class="table-secondary">
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
</tbody>
</table>
</div>
</body>
</html>