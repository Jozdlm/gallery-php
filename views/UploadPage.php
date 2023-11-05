<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/views/Shared/Head.php') ?>

<header>
    <div class="contenedor">
        <h1 class="titulo">Subir foto</h1>
    </div>
</header>

<div class="contenedor">
    <form class="formulario" method="POST" enctype="multipart/form-data"
        action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <input type="text" id="user-id" name="user_id" value="<?php echo $_SESSION['user']['id'] ?>" hidden>

        <label for="foto">Selecciona tu foto</label>
        <input type="file" id="image" name="photo">

        <div class="preview-wrapper">
            <img src="" alt="" id="image-preview" class="image-preview">
        </div>

        <label for="titulo">Titulo de la foto</label>
        <input type="text" id="titulo" name="title">

        <label for="descripcion">Descripcion</label>
        <textarea name="description" id="descripcion" placeholder="Ingresa una descripcion"></textarea>

        <div class="form-buttons">
            <a href="index.php">Cancelar</a>
            <input type="submit" class="submit" value="Subir foto">
        </div>
    </form>
</div>

<?php
$scopedScript = 'public/scripts/preview-image.js';
require_once($_SERVER['DOCUMENT_ROOT'] . '/views/Shared/Footer.php');
?>