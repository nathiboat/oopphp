<div class="col">
    <div class="text-center mt-4">
        <a href="<?php echo ROOT_PATH; ?>shares/add" class="btn mb-5 btn-success">Share Something</a>
        <?php foreach($viewmodel as $item) : ?>
            <div class="jumbotron">
                <h3><?php echo $item['title']; ?></h3>
                <small><?php echo $item['create_date']; ?></small>
                <hr>
                <p><?php echo $item['body']; ?></p>
                <br>
                <a href="<?php echo $item['link']; ?>" class="btn mb-5 btn-primary" target="_blank">Go to Website</a>
            </div>
        <?php endforeach; ?>
    </div>
</div>