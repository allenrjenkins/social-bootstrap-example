<?php
require_once 'classes/user.class.php';
$user = new User();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Bootstrap Social Template Demo</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/custom.css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css" />
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-inverse no-margin-bottom">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Social Example</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#"><i class="fa fa-fw fa-home"></i></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li> 
                        <li><a href="#">Groups</a></li>
                        <li><a href="#">Members</a></li>
                        <li><a href="#">Forums</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-search"></i></a>
                            <ul class="dropdown-menu" style="width: 299px;">
                                <li><a href="#"><input class="form-control" placeholder="Search..." /></a></li>
                            </ul>
                        </li>
                        <li class="active border-menu-item"><a href="#"><i class="fa fa-fw fa-lock"></i> Login</a></li>
                        <li class="active border-menu-item"><a href="#"><i class="fa fa-fw fa-sign-in"></i> Register</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <nav class="navbar navbar-primary">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#second-menu" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="second-menu">
                    <ul class="nav navbar-nav">
                        <li><a href="#"><i class="fa fa-fw fa-newspaper-o"></i> Blog</a></li>
                        <li><a href="#"><i class="fa fa-fw fa-question-circle"></i> FAQ</a></li>
                        <li><a href="#"><i class="fa fa-fw fa-envelope-o"></i> Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><i class="fa fa-fw fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-fw fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-fw fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-fw fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-fw fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="pull-right">
                                <div class="dropdown">
                                    <button class="btn btn-info btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i class="fa fa-fw fa-question-circle"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#"><small>Forgot Password?</small></a></li>
                                        <li><a href="#"><small>Forgot Username?</small></a></li>
                                        <li><a href="#"><small>Resend Email Verification</small></a></li>
                                    </ul>
                                </div>
                            </span>
                            <i class="fa fa-fw fa-chevron-right"></i> Login
                        </div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-fw fa-user"></i></span>
                                        <input type="text" class="form-control" placeholder="Username" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-fw fa-lock"></i></span>
                                        <input type="password" class="form-control" placeholder="Password" />
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-block"><i class="fa fa-fw fa-chevron-right"></i> Login</button>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> <small>Remember Me</small>
                                    </label>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group">
                                    <small><strong>Or Connect With:</strong></small>
                                    <i class="fa fa-fw fa-facebook-square"></i>
                                    <i class="fa fa-fw fa-google-plus-square"></i>
                                    <i class="fa fa-fw fa-twitter-square"></i>
                                    <i class="fa fa-fw fa-linkedin-square"></i>
                                    <i class="fa fa-fw fa-instagram"></i>
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <a href="#" class="btn btn-info btn-block"><i class="fa fa-fw fa-user"></i> Register For Free</a>
                        </div>
                    </div>                    
                    <?php $panels1 = array('Recently Active Members'); ?> 
                    <?php foreach ($panels1 as $p) { ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-fw fa-chevron-right"></i> <?= $p ?>
                            </div> 
                            <?php
                            $module = str_replace(' ', '_', $p);
                            require_once('modules/' . strtolower($module) . '.php');
                            ?> 
                        </div>
                    <?php } ?> 
                    
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-fw fa-newspaper-o"></i> Latest Activity
                        </div>
                        <div class="panel-body">
                            <?php $medias = $user->latest_activity(); ?> 
                            <?php foreach ($medias as $p) { ?>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object img-thumbnail" src="<?=$p['picture']['thumbnail']?>" alt="<?=$p['login']['username']?>" data-toggle="tooltip" data-placement="top" title="<?=$p['login']['username']?>"/>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="media-heading"><i class="fa fa-fw fa-edit"></i> <a href=""><strong><?=$p['login']['username']?></strong></a> posted an update.</h5>
                                        <h6 class="media-heading">1 day ago</h6>
                                        <p>Hi all, I am a <i class="fa fa-fw fa-<?=$p['gender']?>"></i><?=$p['gender']?><i class="fa fa-fw fa-<?=$p['gender']?>"></i> and my name is <?=$p['name']['first']?>  <?=$p['name']['last']?>!  </p>
                                        <i class="fa fa-fw fa-thumbs-up"></i>
                                        <i class="fa fa-fw fa-thumbs-down"></i>
                                        <i class="fa fa-fw fa-star"></i>
                                        <i class="fa fa-fw fa-comments"></i>
                                    </div>
                                </div>
                                <hr />  
                            <?php } ?>   
                        </div> 
                        <div class="panel-footer">
                            <a href="#" class="btn btn-info btn-block"><i class="fa fa-fw fa-chevron-right"></i> View More</a>
                        </div>
                    </div>
                </div>
                <?php $panels2 = array('Latest News', 'Groups', 'Events', 'Statistics'); ?>
                <div class="col-md-3">
                    <?php foreach ($panels2 as $p) { ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-fw fa-chevron-right"></i> <?= $p ?>
                            </div> 
                            <?php
                            $module = str_replace(' ', '_', $p);
                            require_once('modules/' . strtolower($module) . '.php');
                            ?> 
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div> 
        <footer>
            <div class="container">
                <nav class="navbar navbar-primary">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#footer-menu" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">&copy; 2016 Social Example.  All rights reserved.</a>
                    </div>
                    <div class="collapse navbar-collapse" id="footer-menu"> 
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Terms</a></li> 
                            <li><a href="#">About</a></li> 
                            <li><a href="#">Contact</a></li> 
                            <li><a href="#">Developers</a></li>   
                        </ul>
                    </div>
                </nav>
            </div>     
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(function () {
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
    </body>
</html>