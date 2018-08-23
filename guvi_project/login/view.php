<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>View details</title>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="shortcut icon" href="loko.jpg">
    </head>
<body>
<div class="jumbotron">
     <div class="top-content">
             <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <b>
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h2><strong>Guvi Project </strong> View Details Form</h2>
                            <div class="description">
                                <p>
                                    This is to view the details of the person who were registered.
                                </p>
                            </div>
                        </div>
                    </div>
                </b>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <b><i><p class="text-warning" style="font-size: 30"><b>Hi ,<?php echo $fname; ?> !!!</b>
                                    </p>
                                         </i></b>
                                </div>
                                <div class="form-top-right">
                                    <img src="images.png">
                                </div>
                            </div>
                            <div class="form-bottom">

                                 <p style="font-size: 20"><b>Your details in our site !!!</b>
                                    </p>        
                                    <dl>
                                        <dt>Email id</dt>
                                        </dd><?php echo $em; ?></dd>

                                        <dt>First Name</dt>
                                        </dd><?php echo $fname; ?></dd>

                                        <dt>Last Name</dt>
                                        </dd><?php echo $lname;?></dd>

                                        <dt>Age</dt>
                                        </dd><?php echo $age; ?></dd>

                                        <dt>Gender</dt>
                                        </dd><?php echo $gender; ?></dd>

                                        <dt>Degree</dt>
                                        </dd><?php echo $degree; ?></dd>

                                        <dt>Plot Number</dt>
                                        </dd><?php echo $plot; ?></dd>

                                        <dt>Contact Address</dt>
                                        </dd>
                                        <?php echo $plot.",".$st." ";
                                        echo "<br>" ;
                                        echo $city;
                                        echo "<br>" ;
                                        echo $dist."-".$pin;?>
                                        </dd>
                                    </dl>
                                    <center>
                                        <p class="text-success">
                                            <b>Use another account</b>
                                        </p>
                                    </center>
                                   <center><a href="/guvi_project/login/check.php">Log out!</a></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

