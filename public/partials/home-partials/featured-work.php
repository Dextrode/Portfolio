<div class="container p-4 my-4" data-aos="fade-up">
    <h3 class="text-center">Featured Work</h3>
    <div class="row g-3 d-flex justify-content-center">
        <div class="col-12 col-sm-8 col-lg-6 d-flex justify-content-center justify-content-sm-start" data-aos="fade-up">
            <div class="card shadow mr-6 bg-dark">
                <div class="img-container bg-primary mt-4 mx-3">
                    <img src="images/<?php echo h($solitaire->thumbnail); ?>" class="img-fluid border border-primary border-5 card-img-top align-self-center" alt="Artifact Thumbnail">
                </div>
                <div class="card-deco bg-secondary d-flex"></div>
                <div class="card-body">
                    <h3 class="card-title"><?php echo h($solitaire->title); ?></h3>
                    <p class="card-text">
                        <?php echo h($solitaire->goal); ?>
                    </p>

                    <a href="<?php echo get_public_url($solitaire->link) ?>" class="btn btn-secondary" title="Learn more about artifacts">Learn More</a>
                    <ul class="card-tech">
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>JavaScript</li>
                    </ul>
                    <div class="card-links">
                        <a href="https://github.com/Dextrode/Card-Games" target="_blank" title="Solitaire code link">

                            <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github" style="--darkreader-inline-stroke: currentColor;" data-darkreader-inline-stroke="">
                                <title>GitHub</title>
                                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                            </svg>
                        </a>

                        <a href="https://codepen.io/Dextro101/pen/gOzEZVO" target="_blank" title="Card game live Codepen link">
                            <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link" style="--darkreader-inline-stroke: currentColor;" data-darkreader-inline-stroke="">
                                <title>External Link</title>
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                <polyline points="15 3 21 3 21 9"></polyline>
                                <line x1="10" y1="14" x2="21" y2="3"></line>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>