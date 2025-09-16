<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-8">
            <p class="display-3 text-center">SISTEMA DE RECLAMAÇÕES</p>
            <hr>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe porro iusto, voluptas omnis iste laboriosam repellendus ipsum impedit deserunt libero itaque expedita laudantium autem. Nostrum vero veritatis cum deserunt corrupti?</p>
        </div>
    </div>
    <div class="row">
        <div class="col text-center mt-5">
            <a href="<?= site_url('complaint')?>" class="btn btn-secondary">Apresentar Reclamação</a>
        </div>
    </div>

</div>
<?= $this->endSection() ?>