<h1 class="contact__title title-h1 ">
    <?php echo get_field('contact_title') ?>
</h1>
<div class="contact__inner">

    <div class="contact__item">
        <div class="contact__item--inner">
            <nav class="contact__tabs">
                <a href="#tab1" class="contact__tabs--item">СНД</a>
                <a href="#tab2" class="contact__tabs--item">Європа</a>
                <a href="#tab3" class="contact__tabs--item">Індія</a>
            </nav>
            <div class="tabs__body">
                <div id="tab1" class="tabs__block">
                    <?php echo get_field('contact_tab-1') ?>
                </div>
                <div id="tab2" class="tabs__block">
                    <?php echo get_field('contact_tab-2') ?>
                </div>
                <div id="tab3" class="tabs__block">
                    <?php echo get_field('contact_tab-3') ?>
                </div>
            </div>
        </div>
    </div>
    <div class="contact__item">
        <h3 class="contact__item--title title-h">
            <?php echo get_field('feedback_title')?>
        </h3>
        <?php echo get_field('contact_form') ?>
    </div>
</div>