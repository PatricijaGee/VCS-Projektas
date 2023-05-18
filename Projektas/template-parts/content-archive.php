<div class="col-md-4">
    <div class="card-body">
        <div class="card-content">
            <?php $image_url = 'https://picsum.photos/370/271'; ?>
            <img src="<?= $image_url; ?>" />
            <div class="one">
                <h6><?= get_the_title(); ?></h6>
                <p>
                    Teritatis et quasi architecto. Sed ut perspiciatis unde omnis
                    iste natus error sit voluptatem accusantium dolore mque
                    laudantium, totam rem aperiam, eaque ipsa quae ab illo invent.
                </p>
                <div class="progress-container">
                    <div class="donate-content">
                        <h5>$2,580</h5>
                        <p>to go</p>
                        <p>80%</p>
                    </div>
                    <div class="donate-bar">
                        <div class="donate-container">
                            <div class="donate-eighty-perc"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php wp_reset_postdata(); ?>