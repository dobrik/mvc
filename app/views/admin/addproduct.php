<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add product</title>

    <link href="/assets/css/style.default.css" rel="stylesheet">
    <link href="/assets/css/jquery.tagsinput.css" rel="stylesheet"/>
    <link href="/assets/css/toggles.css" rel="stylesheet"/>
    <link href="/assets/css/bootstrap-timepicker.min.css" rel="stylesheet"/>
    <link href="/assets/css/select2.css" rel="stylesheet"/>
    <link href="/assets/css/colorpicker.css" rel="stylesheet"/>
    <link href="/assets/css/dropzone.css" rel="stylesheet"/>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/assets/js/html5shiv.js"></script>
    <script src="/assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<header>
    <div class="headerwrapper">
        <div class="header-left">
            <a href="index.html" class="logo">
                <img src="/assets/images/logo.png" alt=""/>
            </a>
            <div class="pull-right">
                <a href="" class="menu-collapse">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </div><!-- header-left -->

        <div class="header-right">

            <div class="pull-right">

                <form class="form form-search" action="search-results.html">
                    <input type="search" class="form-control" placeholder="Search"/>
                </form>

                <div class="btn-group btn-group-list btn-group-notification">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="badge">5</span>
                    </button>
                    <div class="dropdown-menu pull-right">
                        <a href="" class="link-right"><i class="fa fa-search"></i></a>
                        <h5>Notification</h5>
                        <ul class="media-list dropdown-list">
                            <li class="media">
                                <img class="img-circle pull-left noti-thumb" src="/assets/images/photos/user1.png"
                                     alt="">
                                <div class="media-body">
                                    <strong>Nusja Nawancali</strong> likes a photo of you
                                    <small class="date"><i class="fa fa-thumbs-up"></i> 15 minutes ago</small>
                                </div>
                            </li>
                            <li class="media">
                                <img class="img-circle pull-left noti-thumb" src="/assets/images/photos/user2.png"
                                     alt="">
                                <div class="media-body">
                                    <strong>Weno Carasbong</strong> shared a photo of you in your <strong>Mobile
                                        Uploads</strong> album.
                                    <small class="date"><i class="fa fa-calendar"></i> July 04, 2014</small>
                                </div>
                            </li>
                            <li class="media">
                                <img class="img-circle pull-left noti-thumb" src="/assets/images/photos/user3.png"
                                     alt="">
                                <div class="media-body">
                                    <strong>Venro Leonga</strong> likes a photo of you
                                    <small class="date"><i class="fa fa-thumbs-up"></i> July 03, 2014</small>
                                </div>
                            </li>
                            <li class="media">
                                <img class="img-circle pull-left noti-thumb" src="/assets/images/photos/user4.png"
                                     alt="">
                                <div class="media-body">
                                    <strong>Nanterey Reslaba</strong> shared a photo of you in your <strong>Mobile
                                        Uploads</strong> album.
                                    <small class="date"><i class="fa fa-calendar"></i> July 03, 2014</small>
                                </div>
                            </li>
                            <li class="media">
                                <img class="img-circle pull-left noti-thumb" src="/assets/images/photos/user1.png"
                                     alt="">
                                <div class="media-body">
                                    <strong>Nusja Nawancali</strong> shared a photo of you in your <strong>Mobile
                                        Uploads</strong> album.
                                    <small class="date"><i class="fa fa-calendar"></i> July 02, 2014</small>
                                </div>
                            </li>
                        </ul>
                        <div class="dropdown-footer text-center">
                            <a href="" class="link">See All Notifications</a>
                        </div>
                    </div><!-- dropdown-menu -->
                </div><!-- btn-group -->

                <div class="btn-group btn-group-list btn-group-messages">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge">2</span>
                    </button>
                    <div class="dropdown-menu pull-right">
                        <a href="" class="link-right"><i class="fa fa-plus"></i></a>
                        <h5>New Messages</h5>
                        <ul class="media-list dropdown-list">
                            <li class="media">
                                <span class="badge badge-success">New</span>
                                <img class="img-circle pull-left noti-thumb" src="/assets/images/photos/user1.png"
                                     alt="">
                                <div class="media-body">
                                    <strong>Nusja Nawancali</strong>
                                    <p>Hi! How are you?...</p>
                                    <small class="date"><i class="fa fa-clock-o"></i> 15 minutes ago</small>
                                </div>
                            </li>
                            <li class="media">
                                <span class="badge badge-success">New</span>
                                <img class="img-circle pull-left noti-thumb" src="/assets/images/photos/user2.png"
                                     alt="">
                                <div class="media-body">
                                    <strong>Weno Carasbong</strong>
                                    <p>Lorem ipsum dolor sit amet...</p>
                                    <small class="date"><i class="fa fa-clock-o"></i> July 04, 2014</small>
                                </div>
                            </li>
                            <li class="media">
                                <img class="img-circle pull-left noti-thumb" src="/assets/images/photos/user3.png"
                                     alt="">
                                <div class="media-body">
                                    <strong>Venro Leonga</strong>
                                    <p>Do you have the time to listen to me...</p>
                                    <small class="date"><i class="fa fa-clock-o"></i> July 03, 2014</small>
                                </div>
                            </li>
                            <li class="media">
                                <img class="img-circle pull-left noti-thumb" src="/assets/images/photos/user4.png"
                                     alt="">
                                <div class="media-body">
                                    <strong>Nanterey Reslaba</strong>
                                    <p>It might seem crazy what I'm about to say...</p>
                                    <small class="date"><i class="fa fa-clock-o"></i> July 03, 2014</small>
                                </div>
                            </li>
                            <li class="media">
                                <img class="img-circle pull-left noti-thumb" src="/assets/images/photos/user1.png"
                                     alt="">
                                <div class="media-body">
                                    <strong>Nusja Nawancali</strong>
                                    <p>Hey I just met you and this is crazy...</p>
                                    <small class="date"><i class="fa fa-clock-o"></i> July 02, 2014</small>
                                </div>
                            </li>
                        </ul>
                        <div class="dropdown-footer text-center">
                            <a href="" class="link">See All Messages</a>
                        </div>
                    </div><!-- dropdown-menu -->
                </div><!-- btn-group -->

                <div class="btn-group btn-group-option">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-star"></i> Activity Log</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>
                        <li class="divider"></li>
                        <li><a href="/admin/logout/"><i class="glyphicon glyphicon-log-out"></i>Sign Out</a></li>
                    </ul>
                </div><!-- btn-group -->

            </div><!-- pull-right -->

        </div><!-- header-right -->

    </div><!-- headerwrapper -->
</header>

<section>
    <div class="mainwrapper">
        <div class="leftpanel">
            <div class="media profile-left">
                <a class="pull-left profile-thumb" href="profile.html">
                    <img class="img-circle" src="<?php echo $user['avatar']?>" alt="">
                </a>
                <div class="media-body">
                    <h4 class="media-heading"><?php echo $user['name']?></h4>
                    <small class="text-muted"><?php echo $user['lastname']?></small>
                </div>
            </div><!-- media -->

            <h5 class="leftpanel-title">Navigation</h5>
            <ul class="nav nav-pills nav-stacked">
                <li><a href="/admin/dashboard"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                <li class="parent active"><a href=""><i class="fa fa-edit"></i> <span>Products</span></a>
                    <ul class="children">
                        <li><a href="/admin/showproducts/">Show all</a></li>
                        <li class="active"><a href="/admin/addproduct/">Add new</a></li>
                    </ul>
                </li>

            </ul>

        </div><!-- leftpanel -->

        <div class="mainpanel">
            <div class="pageheader">
                <div class="media">
                    <div class="pageicon pull-left">
                        <i class="fa fa-pencil"></i>
                    </div>
                    <div class="media-body">
                        <ul class="breadcrumb">
                            <li><a href=""><i class="glyphicon glyphicon-home"></i></a></li>
                            <li><a href="">Products</a></li>
                            <li>Add product</li>
                        </ul>
                        <h4>Add product</h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->

            <div class="contentpanel">
                <div id="add_result" data-result="<?php  echo $result['success'] ?>" class="alert" style="display: none;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong id="alert-message" data-product="<?php  echo $result['product'] ?>"></strong>
                </div>
                <form action="/admin/addproduct" method="post" enctype="multipart/form-data">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-btns" style="display: none;">
                                <a href="" class="panel-minimize tooltips" data-toggle="tooltip" title=""
                                   data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                <a href="" class="panel-close tooltips" data-toggle="tooltip" title=""
                                   data-original-title="Close Panel"><i class="fa fa-times"></i></a>
                            </div><!-- panel-btns -->
                            <h4 class="panel-title">Add product</h4>
                            <p>Select all info about your product here.</p>
                        </div><!-- panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <input type="text" name="product" id="product" placeholder="Product name"
                                           class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" name="link" id="link" placeholder="link" readonly
                                           class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" name="description" placeholder="Description"
                                           class="form-control">
                                </div>
                            </div><!-- row -->
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <select name="category" class="form-control">
                                        <option value="0">Select category</option>
                                        <?php foreach ($categories as $category) { ?>
                                            <option
                                                value="<?php echo $category['id'] ?>"><?php echo $category['category'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" name="price" placeholder="Price" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="number" name="count" placeholder="Count" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <input type="file" name="image" class="form-control">
                                    <label for="image">Select product image</label>
                                </div>
                            </div>
                            <textarea class="form-control" name="content" rows="5" placeholder="Full description"></textarea>
                        </div><!-- panel-body -->
                        <div class="panel-footer">
                            <button class="btn btn-primary">Add product</button>
                        </div><!-- panel-footer -->
                    </div><!-- panel -->
                </form>

            </div><!-- contentpanel -->
        </div>
    </div><!-- mainwrapper -->
</section>


<script src="/assets/js/jquery-1.11.1.min.js"></script>
<script src="/assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/assets/js/jquery-ui-1.10.3.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/modernizr.min.js"></script>
<script src="/assets/js/pace.min.js"></script>
<script src="/assets/js/retina.min.js"></script>
<script src="/assets/js/jquery.cookies.js"></script>

<script src="/assets/js/jquery.autogrow-textarea.js"></script>
<script src="/assets/js/jquery.mousewheel.js"></script>
<script src="/assets/js/jquery.tagsinput.min.js"></script>
<script src="/assets/js/toggles.min.js"></script>
<script src="/assets/js/bootstrap-timepicker.min.js"></script>
<script src="/assets/js/jquery.maskedinput.min.js"></script>
<script src="/assets/js/select2.min.js"></script>

<script src="/assets/js/jquery.liTranslit.js"></script>
<script src="/assets/js/admin.js"></script>

<script>
    $().ready(function () {
        var result = $('#add_result').data().result;
        var product = $('#alert-message').data().product;
        var alert;
        if (result == 'yes') {
            var message = 'Товар "' + product + '" успешно добавлен!';
            alert = 'alert-success';
        } else if (result == 'no') {
            var message = 'Ошибка! Товар "' + product + '" не добавлен!';
            alert = 'alert-danger';
        }
        if(message){
            $('#alert-message').html(message);
            $('#add_result').addClass(alert);
            $('#add_result').fadeIn();
            setTimeout(function(){
                $('#add_result').fadeOut();
            },5000)

        }
    });
</script>

<script src="/assets/js/custom.js"></script>

</body>
</html>
