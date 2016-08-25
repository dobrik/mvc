<!DOCTYPE html>
<html lang="en">

<?php include_once 'headers.php' ?>
<!-- container -->
<div class="container-fluid menu_line">
    <div class="col-md-offset-1">
        <div class="btn-group">
            <?php
            foreach ($menu as $item) {
                ?>
                <a href="/<?php echo $item['link'] ?>"
                   class="mybtn <?php echo ($currpage == $item['link']) ? 'mybtn_active' : '' ?>"><?php echo $item['name'] ?></a>
                <?php
            }
            ?>
        </div>
    </div>
</div>
<!-- menu line -->
<div class="container content">
    <div class="special_offer container-fluid">

        <?php if (!empty($slider)) { ?>
            <div class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    foreach ($slider as $num => $slide) { ?>
                        <div class="item <? echo ($num == 0) ? 'active' : '' ?>">
                            <a href="">
                                <img src="<?php echo $slide['image'] ?>" alt="<?php echo $slide['title'] ?>">
                            </a>
                        </div>
                    <?php } ?>

                </div>
                <a class="left carousel-control arrow_bg_shadow" href="#carousel_on_main" data-slide="prev">
                    <div class="glyphicon glyphicon-chevron-left arrow_bg"></div>
                </a>
                <a class="right carousel-control arrow_bg_shadow" href="#carousel_on_main" data-slide="next">
                    <div class="glyphicon glyphicon-chevron-right arrow_bg"></div>
                </a>
            </div>
        <?php } ?>

    </div>
    <div class="container-fluid">
        <div class="row menu_and_products">
            <div class="col-md-3 title">
                <h3>Categories</h3></div>
            <div class="col-md-9 title">
                <h3>Search result</h3></div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 title">
                <div class="btn-group-vertical">
                    <?php foreach ($categories as $category) { ?>
                        <a href="/category/<?php echo $category['url'] ?>"
                           class="btn btn-default"><?php echo $category['category'] ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-9">
            <?php var_dump($result) ?>
                <?php if(!empty($result)){
                    foreach ($result as $item) {?>
                        <div class="row">
                        <div class="col-md-5"><img class="img_search_result" src="<?php $item['preview'] ?>" alt=""></div>
                        <div class="col-md-7">
                            <table class="table table-responsive search-table">
                                <tr><td>Name: <span class="pull-right">s</span></td></tr>
                                <tr><td>Description: <span class="pull-right">s</span></td></tr>
                                <tr><td>Price: <span class="pull-right">s</span></tr>
                                <tr><td>Availability: <span class="pull-right">s</span></td></tr>
                            </table>
                        </div>
                    </div>
           <?php }
                }else{?>
                    <h3>Ничего не найдено <i class="fa fa-frown-o"></i></h3>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php include_once 'footer.php' ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/assets/js/main.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/assets/js/bootstrap.min.js"></script>
</body>

</html>