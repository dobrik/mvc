<!DOCTYPE html>
<html lang="en">

<?php include_once '/app/views/headers.php' ?>
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
            <div class="carousel slide" id="carousel_on_main" data-ride="carousel">
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
            <div class="col-md-12 title">
                <h3>Our news</h3></div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2>Заголовок</h2>
                <p>Текст новости</p>
            </div>
        </div>
    </div>
</div>
<?php include_once '/app/views/footer.php' ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/assets/js/main.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/assets/js/bootstrap.min.js"></script>
</body>

</html>