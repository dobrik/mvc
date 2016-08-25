<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'headers.php'?>
</head>

<body>
<div class="container">
    <div class="row header">
        <!-- header -->
        <div class="col-md-4 col-lg-4"><span class="logo1">Mimity </span><span>Online Shop</span>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>

        <div class="col-md-5 col-lg-5">
            <div class="input-group top_inputs">
                <input type="text" placeholder="Enter something to search" class="form-control top_inputs_font">
                    <span class="input-group-btn">
                    <button class="btn btn-default btn_no_left_border"><span class="glyphicon glyphicon-search"></span>
                    </button>
                    </span>
            </div>
        </div>
        <div class="col-md-3 col-lg-3">
            <div class="btn-group top_inputs search">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-shopping-cart pull-left"></span>
                    <span class="pull-left"> Shopping Cart: 2 item(s) </span>
                    <span class="caret pull-right"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                        <a href="">
                            <p>Penn State College T-Shirt</p>
                            <span>x1 $528.96</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <p>Live Nation ACDC Gray T-Shirt</p>
                            <span>x1 $428.96</span>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="">Total: $957.92</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- header -->
</div>
<!-- container -->
<div class="container-fluid menu_line">
    <div class="col-md-offset-1">
        <div class="btn-group">
            <?php
            foreach ($menu as $item) {
                ?>
                <a href="/<?php echo $item['link'] ?>" class="mybtn <?php echo ($currpage == $item['link'])?'mybtn_active':'' ?>"><?php echo $item['name'] ?></a>
                <?php
            }
            ?>
        </div>
    </div>
</div>
<!-- menu line -->
<div class="container content">
    <div class="special_offer container-fluid">
    <?php if(!empty($slider)){ ?>
        <div id="carousel_on_main" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                foreach ($slider as $num => $slide) {?>
                    <div class="item <? echo ($num == 0)? 'active':'' ?>">
                        <img src="<?php echo $slide['image'] ?>" alt="<?php echo $slide['title'] ?>">
                    </div>
                <?php }?>

            </div>
            <a class="left carousel-control arrow_bg_shadow" href="#carousel_on_main" data-slide="prev">
                <div class="glyphicon glyphicon-chevron-left arrow_bg"></div>
            </a>
            <a class="right carousel-control arrow_bg_shadow" href="#carousel_on_main" data-slide="next">
                <div class="glyphicon glyphicon-chevron-right arrow_bg"></div>
            </a>
        </div>
    <?php }?>
    </div>
    <div class="container-fluid">
        <div class="row menu_and_products">
            <div class="col-md-3 title">
                <h3>Categories</h3></div>
            <div class="col-md-9 title">
                <h3>Products categories</h3></div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 title">
                <div class="btn-group-vertical">
                    <?php foreach($categories as $category){?>
                        <a href="/category/<?php echo $category['url'] ?>" class="btn btn-default"><?php echo $category['category'] ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-9">
                <div class="col-md-4">
                    <a href="">
                        <img src="/content/images/categories/9103672_b.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'footer.php'?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/assets/js/main.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/assets/js/bootstrap.min.js"></script>
</body>

</html>