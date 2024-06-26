<div>
    <div class="wrapper">
        <h1 class="text-center">Editar foto #
            <?php echo $photo['id'] ?>
        </h1>
    </div>
</div>

<div class="wrapper">
    <form class="formulario" method="POST" enctype="multipart/form-data"
        action="<?php echo htmlspecialchars("photo.php?id=$id") ?>">

        <input type="text" name="id" value="<?php echo $photo['id'] ?>" hidden>
        <input type="text" name="old_img" value="<?php echo $photo['img_url'] ?>" hidden>

        <label class="form-label" for="foto">Selecciona tu foto</label>
        <input type="file" id="image" name="photo" class="form-field">

        <label class="form-label" for="titulo">Imágen actual</label>
        <div class="preview-wrapper">
            <img src="<?php echo $photo['img_url'] ?>" alt="<?php echo $photo['title'] ?>" id="image-preview"
                class="image-preview">
        </div>

        <label class="form-label" for="titulo">Titulo de la foto</label>
        <input type="text" id="titulo" name="title" class="form-field" value="<?php echo $photo['title'] ?>">

        <label class="form-label" for="descripcion">Descripcion</label>
        <textarea name="description" id="descripcion" class="form-field"><?php echo $photo['description'] ?></textarea>

        <div class="form-buttons">
            <a href="photo.php?id=<?php echo $id ?>">Cancelar</a>
            <input type="submit" class="button" value="Guardar Cambios">
        </div>
    </form>
</div>