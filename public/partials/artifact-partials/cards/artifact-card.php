<div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center justify-content-sm-start" data-aos="fade-up">
    <div class="card shadow mr-6 bg-dark">
        <div class="img-container bg-primary mt-4 mx-3">
            <img src="images/<?php echo h($portfolio_artifact->thumbnail); ?>" class="img-fluid border border-primary border-5 card-img-top align-self-center" alt="Artifact Thumbnail">
        </div>
        <div class="card-deco bg-secondary d-flex"></div>
        <div class="card-body">
            <h3 class="card-title"><?php echo h($portfolio_artifact->title); ?></h3>
            <p class="card-text">
                <?php echo h($portfolio_artifact->goal); ?>
            </p>
            <a href="<?php echo get_public_url($portfolio_artifact->link) ?>" class="btn btn-secondary" title="Learn more about artifacts">Learn More</a>

        </div>
    </div>
</div>