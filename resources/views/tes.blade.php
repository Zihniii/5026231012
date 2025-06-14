<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Horizontal Form</title>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width,
                   initial-scale=1">
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">
    </script>
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
    </script>
</head>

<body>

    <div class="container">
        <h4>Bootstrap Horizontal Form</h4>
        <form action="" class="form-horizontal">
            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="id1">
                    Username
                </label>
                <div class="col-sm-6">
                    <input class="form-control"
                           type="text"
                           id="id1"
                           placeholder="Enter your User Name">
                </div>
            </div>
            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="id2">
                    Password
                </label>
                <div class="col-sm-6">
                    <input class="form-control"
                           type="password"
                           id="id2"
                           placeholder="Enter your password">
                </div>
            </div>
            <div class="container">
                <button type="button" class="btn btn-success">
                    Login
                </button>
                <button type="button" class="btn btn-secondary">
                    Register
                </button>
                <label>
                    <input type="checkbox">
                    Remember me
                </label>
            </div>
        </form>
    </div>
</body>

</html>
