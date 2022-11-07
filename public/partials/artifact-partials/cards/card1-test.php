<div class="col-12 col-sm-6 col-lg-4">
    <div class="card-group">
        <div class="card shadow mr-6 bg-dark">
            <div class="img-container bg-primary d-flex mt-4 mx-3">
                <img src="images/<?php echo $loading_animation->images->img1;?>" class="card-img-top align-self-center m-2" alt="Artifact Thumbnail" />
            </div>
            <div class="card-deco bg-secondary d-flex"></div>
            <div class="card-body">
                <h3 class="card-title"><?php echo $loading_animation->title;?></h3>
                <p class="card-text">
                    <?php echo $loading_animation->goal;?>
                </p>
                <a href="<?php echo $loading_animation->url;?>" class="btn btn-secondary" title="Artifact Title">Learn More</a>
            </div>
        </div>
    </div>
</div>