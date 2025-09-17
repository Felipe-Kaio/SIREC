<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>


<p class="lead text-center text-dark mb-4">
    Muito obrigado pela sua reclamação.
</p>

<p class="text-center">Aconteceu um erro incesperado.</p>
<div class="d-grid gap-3 col-8 mx-auto mt-4">
    <a href="<?= site_url('/') ?>" class="btn btn-lg btn-danger shadow-sm">Voltar</a>
</div>



<?= $this->endSection() ?>