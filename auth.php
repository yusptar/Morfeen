<!DOCTYPE html>
<html>

<head>
    <title>Authentikasi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
        <div class="container-fluid" class="login100-form validate-form p-b-33 p-t-5" method="post">
            <div class="">
                <p data-toggle="modal" data-target="#mydaftar"><a href="#"><span
                            class="glyphicon glyphicon-user"></span> Daftar</a></p>
                <p data-toggle="modal" data-target="#mylogin"><a href="#"><span
                            class="glyphicon glyphicon-log-in"></span> Login</a></p>
            </div>
        </div>
    <!-- Modal daftar -->
    <div id="mydaftar" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Daftar</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" class="form-control" id="" placeholder="username" require="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">E-Mail</label>
                            <input type="email" class="form-control" id="" placeholder="e-mail" require="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="password" class="form-control" id="" placeholder="password" require="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password Confirm</label>
                            <input type="password" class="form-control" id="" placeholder="password confirm" require="required">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Daftar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal daftar -->

    <!-- Modal login -->
    <div id="mylogin" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" class="form-control" id="" placeholder="username" require="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="" placeholder="password" require="required">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Login</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Login -->
</body>

</html>