<!--image slider-->
<div class="container_slide">
    <div class="slider">
        <div class="slides">
            <!--radio buttons-->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <!--slide images-->
            <div class="slide first">
                <img src="<?= base_url('assets/img/berita/1.jpg'); ?>" alt="">
            </div>
            <div class="slide">
                <img src="<?= base_url('assets/img/berita/2.jpg'); ?>" alt="">
            </div>
            <div class="slide">
                <img src="<?= base_url('assets/img/berita/3.jpg'); ?>" alt="">
            </div>
            <div class="slide">
                <img src="<?= base_url('assets/img/berita/4.jpg'); ?>" alt="">
            </div>
            <!--automatic navigation-->
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
        </div>
        <!--manual navigation-->
        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
    </div>
</div>