<?php
/*
 * Template Name: Home
 */
get_header();
while (have_posts()): the_post();
?>
<div class="row-fluid slider">
    <div class="container">
        <?php
        echo do_shortcode('[rev_slider alias="home"]');
        ?>
    </div>
</div>
<div class="main-content">
    <div class=" row-fluid list-about block">
        <div class="container">
            <div class="text-center">
                <h2 class="title-block">
                    Physiomed - Technology for therapy
                </h2>
                <div class="block-des">Văn phòng đại diện PHYSIOMED tại Hà Nội thành lập năm 2002 nhằm tư vấn và hỗ trợ
                    các dịch vụ bảo hành, bảo trì
                </div>
            </div>
        </div>
    </div>
</div>

<div class="category container">
    <div class="row list-about-item">
        <?php while (have_rows('home_item')): the_row();?>
        <div class="col-xs-6 col-sm-3  about-item text-center">
            <?php $img = get_sub_field('icon')?>
            <img src="<?php echo $img['url'] ?>"
            <br>
            <p class="message"><?php echo get_sub_field('title') ?></p>

            <div>
                <img src="<?php bloginfo("template_url") ?>/image/line.png"
            </div>
            <div class="line">
              <?php echo get_sub_field('content')?>
            </div>
        </div>
        <?php endwhile;?>
    </div>
</div>
</div>
</div>
<div class="row-fluid hot-product block">
    <div class="container">
        <div class="text-center">
            <h2 class="title-block">Sản phẩm của chúng tôi</h2>
            <div class="block-des">Tất cả các sản phẩm của PHYSIOMED đều được sản xuất tại CHLB - Đức đạt tiêu chuẩn chất lượng </div>
        </div>
    <div class="row hot-product-slider">
            <div class="col-xs-4 item-product">
                <div class="panel panel-default">
                    <div class="panel-heading yellow-header header-product">
                        <p>Sản phẩm</p>
                        <i class="fa fa-chevron-right icon-item-product" aria-hidden="true"></i>

                    </div>
                    <div class="panel-body">
                        <img class="img-rounded" alt="Cinque Terre"
                             src="<?php bloginfo("template_url") ?>/image/PHYSIOSON-Basic_2010.png" alt="Chania">
                    </div>
                </div>
            </div>
            <div class="col-xs-4 item-product">
                <div class="panel panel-default">
                    <div class="panel-heading green-header header-product">
                        <p>Sản phẩm</p>
                        <i class="fa fa-chevron-right icon-item-product" aria-hidden="true"></i>

                    </div>
                    <div class="panel-body">
                        <img class="img-rounded" alt="Cinque Terre"
                             src="<?php bloginfo("template_url") ?>/image/product2.png" alt="Chania">
                    </div>
                </div>
            </div>
            <div class="col-xs-4 item-product">
                <div class="panel panel-default">
                    <div class="panel-heading blue-header header-product">
                        <p>Sản phẩm</p>
                        <i class="fa fa-chevron-right icon-item-product" aria-hidden="true"></i>

                    </div>
                    <div class="panel-body">
                        <img class="img-rounded" alt="Cinque Terre"
                             src="<?php bloginfo("template_url") ?>/image/product3.png" alt="Chania">
                    </div>
                </div>
            </div>
            <div class="col-xs-4 item-product">
                <div class="panel panel-default">
                    <div class="panel-heading yellow-header header-product">
                        <p>Sản phẩm</p>
                        <i class="fa fa-chevron-right icon-item-product" aria-hidden="true"></i>

                    </div>
                    <div class="panel-body">
                        <img class="img-rounded" alt="Cinque Terre"
                             src="<?php bloginfo("template_url") ?>/image/PHYSIOSON-Basic_2010.png" alt="Chania">
                    </div>
                </div>
            </div>
            <div class="col-xs-4 item-product">
                <div class="panel panel-default">
                    <div class="panel-heading green-header header-product">
                        <p>Sản phẩm</p>
                        <i class="fa fa-chevron-right icon-item-product" aria-hidden="true"></i>

                    </div>
                    <div class="panel-body">
                        <img class="img-rounded" alt="Cinque Terre"
                             src="<?php bloginfo("template_url") ?>/image/product2.png" alt="Chania">
                    </div>
                </div>
            </div>
            <div class="col-xs-4 item-product">
                <div class="panel panel-default">
                    <div class="panel-heading blue-header header-product">
                        <p>Sản phẩm</p>
                        <i class="fa fa-chevron-right icon-item-product" aria-hidden="true"></i>

                    </div>
                    <div class="panel-body">
                        <img class="img-rounded" alt="Cinque Terre"
                             src="<?php bloginfo("template_url") ?>/image/product3.png" alt="Chania">
                    </div>
                </div>
            </div>
        <div>
        </div>
    </div>
        <div class="view-all-product text-center">
            <a href="">Xem tất cả sản phẩm <i class="fa fa-angle-double-right"></i></a>
        </div>
</div>
</div>
<?php
endwhile;
get_footer();
?>
