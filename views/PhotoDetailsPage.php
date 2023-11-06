<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/views/Shared/Head.php') ?>

<div class="wrapper">
    <div class="foto">
        <img src="<?php echo $photo['img_url'] ?>" alt="<?php echo $photo['title'] ?>">

        <div class="texto">
            <h1 class="photo-title">
                <?php if (!empty($photo['title'])) {
                    echo $photo['title'];
                } ?>
            </h1>
            <p>
                <?php if (!empty($photo['description'])) {
                    echo $photo['description'];
                } ?>
            </p>
        </div>

        <div class="photo-footer">
            <a href="index.php" class="back-button"><i class="fa fa-long-arrow-left"></i>Regresar</a>
            <a href="edit-photo.php?id=<?php echo $id ?>" class="back-button"><i
                    class="fa fa-pencil-square-o"></i>Actualizar</a>
        </div>
    </div>
</div>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/views/Shared/Footer.php') ?>