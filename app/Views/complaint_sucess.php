<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>

    <p class="lead text-center text-dark mb-4">
        Muito obrigado pela sua reclamação.
    </p>

    <p><?= $name ?>, foi enviado para o email <span class='text-info'><?= $email ?></span> contendo os passos necessários para acompanhar a evolução da sua reclamação.</p>

    <p class="lead text-center text-dark mb-4">
        Iremos responder o mais oportunamente possível.
    </p>
    <div class="d-grid gap-3 col-8 mx-auto mt-4">
        <a href="<?= site_url('/') ?>" class="btn btn-lg btn-danger shadow-sm">Voltar</a>
    </div>

<?= $this->endSection() ?>