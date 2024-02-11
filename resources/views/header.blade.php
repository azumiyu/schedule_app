<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <div class="fixed-top header text-center">
            <h1>草野球予定</h1>
        </div>
        <div id="header" class="fixed-top sub_header">
            <div>
                <button type="button" class="btn btn-primary mt-2">予定新規作成</button>
            </div>
            <div class="mt-2">
                <div class="input-group">
                    <input type="text" id="txt-search" class="form-control input-group-prepend" placeholder="キーワードを入力"></input>
                    <span class="input-group-btn input-group-append">
                        <submit type="submit" id="btn-search" class="btn btn-primary"><i class="fas fa-search"></i> 検索</submit>
                    </span>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>