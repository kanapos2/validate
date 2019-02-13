<?php
include 'navbar.php';

?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Validate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--    <link rel="stylesheet" href="../css/csslogin.css" type="text/css">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 mx-auto">

                        <div class="card rounded-0">
                            <div class="card-header">
                                <h3 class="mb-0">Information</h3>
                            </div>
                            <div class="card-body">
                                <form class="form" role="form" autocomplete="off" id="formLogin" method="post" action="dashboard.php" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label>Date</label>
                                        <input id="datepicker" width="276" />
                                    </div>

                                    <div class="form-group">
                                        <label for="uname1">ID</label>
                                        <input type="text" class="form-control form-control-lg rounded-0" name="setid" id="id" required=""  >
                                    </div>

                                    <div class="form-group">
                                        <label for="uname1">Firstname</label>
                                        <input type="text" class="form-control form-control-lg rounded-0" name="firstname" id="firstname" required="" >
                                    </div>
                                    <div class="form-group">
                                        <label>Lastname</label>
                                        <input type="text" class="form-control form-control-lg rounded-0" name="lastname" id="lastname" required="" >
                                    </div>


                                    <div class="form-group ">
                                        <input type="file" name="file" id="file" class="input-large">
                                    </div>


<!--                                    <button type="submit"  id="btnLogin">Login</button>-->
                                    <button type="submit" id="submit" name="Import" class="btn btn-success btn-lg float-right" data-loading-text="Loading...">Import</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });

    </script>

</body>
</html>
