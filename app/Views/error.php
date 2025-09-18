<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>

                    <p class="lead text-center text-dark mb-4">
                        Aconteceu um erro inesperado.
                    </p>

                    <div class="d-grid gap-3 col-8 mx-auto mt-4">
                        <a href="<?= site_url('/')?>" class="btn btn-lg btn-danger shadow-sm">
                            <i class="bi bi-pencil-square me-2"></i> Voltar
                        </a>
                    </div>
<?= $this->endSection() ?>
