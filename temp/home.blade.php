<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todoアプリ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <style>
            .del_btn{
                width:10px;
                top: -10px;
                right: 0;
            }
            .del_btn button{
                border-radius: 999px;
                padding: 0 5px;
            }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Todoアプリ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
        <div class="container m-auto row">
            <div class="form_area col-4 card text-center mt-5">
                <form>
                    <div class="mb-3 mt-5">
                        <label for="exampleInputEmail1" class="form-label">Todo</label>
                        <input type="text" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">追加</button>
                </form>
            </div>
            <div class="card_area col-8">
                <div class="card my-4 position-relative">
                    <div class="card-body row flex justify-content-between">
                        <div class="card_item" style="width: 65%">
                            カレーの材料を買って帰る
                        </div>
                        <div class="edit_btn" style="width: 15%; text-align: right;">
                            <button type="button" class="btn btn-warning btn-sm">編集</button>
                        </div>
                        <div class="del_btn position-absolute">
                            <button type="button" class="btn btn-danger btn-sm">×</button>
                        </div>
                    </div>
                </div>
                <div class="card my-4 position-relative">
                    <div class="card-body row flex justify-content-between">
                        <div class="card_item" style="width: 65%">
                            カレーの材料を買って帰る
                        </div>
                        <div class="edit_btn" style="width: 15%; text-align: right;">
                            <button type="button" class="btn btn-warning btn-sm">編集</button>
                        </div>
                        <div class="del_btn position-absolute">
                            <button type="button" class="btn btn-danger btn-sm">×</button>
                        </div>
                    </div>
                </div>
                <div class="card my-4 position-relative">
                    <div class="card-body row flex justify-content-between">
                        <div class="card_item" style="width: 65%">
                            カレーの材料を買って帰る
                        </div>
                        <div class="edit_btn" style="width: 15%; text-align: right;">
                            <button type="button" class="btn btn-warning btn-sm">編集</button>
                        </div>
                        <div class="del_btn position-absolute">
                            <button type="button" class="btn btn-danger btn-sm">×</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>
