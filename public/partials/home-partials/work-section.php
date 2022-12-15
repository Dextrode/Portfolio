<div class="container p-4 my-4" data-aos="fade-up">
    <h3 class="text-center text-sm-start">Recent Work</h3>
    <div class="row g-3 d-flex justify-content-center">
        <?php foreach ($portfolio_artifacts as $portfolio_artifact) : ?>
            <!-- The file that the property values are looped through -->
            <?php require('partials/artifact-partials/cards/artifact-card.php'); ?>
            <!-- Ends the loop -->
        <?php endforeach; ?>
    </div>
</div>