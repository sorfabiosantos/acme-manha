<?php
    $this->layout("_theme", []);
?>
<?php  $this->start("specific-style"); ?>
<script src="<?= url("assets/app/css/profile.css"); ?>"></script>
<?php $this->end(); ?>

<section id="profile">
    <h1>Perfil do Usuário</h1>
    <p>Informações estáticas sobre o perfil do usuário.</p>

    <h2>Formulário de Edição</h2>
    <form id="formEditProfile">
        <label for="name">
            <span>Nome:</span>
            <input type="text" name="name" id="name" value="">
        </label>
        <label for="email">
            <span>Email:</span>
            <input type="email" name="email" id="email" value="">
        </label>
        <label for="document">
            <span>CPF:</span>
            <input type="text" name="document" id="document" value="">
        </label>
        <label for="buttonUpdate">
            <span>&nbsp;</span>
            <button type="submit" id="buttonUpdate">Atualizar Perfil</button>
        </label>
    </form>
    <form id="formEditPhoto">
        <label for="photo">
            <span>Foto de Perfil:</span>
            <input type="file" name="photo" id="photo" accept="image/*">
        </label>
        <label for="buttonUpdatePhoto">
            <span>&nbsp;</span>
            <button type="submit" id="buttonUpdatePhoto">Atualizar Foto</button>
        </label>
    </form>
    <img src="" alt="" id="photoPreview">
</section>

<?php  $this->start("specific-script"); ?>
<script src="<?= url("assets/app/js/profile.js"); ?>"></script>
<?php $this->end(); ?>
