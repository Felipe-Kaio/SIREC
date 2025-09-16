<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-10 col-md-8">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-danger text-white text-center rounded-top-4 py-4">
                    <h1 class="display-5 fw-bold mb-0">
                        <i class="bi bi-exclamation-octagon-fill me-2"></i> SISTEMA DE RECLAMAÇÕES
                    </h1>
                </div>
                <div class="card-body p-5">
                    <p class="lead text-center text-dark mb-4">
                        Bem-vindo ao nosso espaço oficial de atendimento!  
                        Aqui, <span class="fw-semibold text-danger">sua voz é prioridade</span> e cada reclamação é tratada com total seriedade.  
                        Criamos este sistema para garantir <span class="fw-semibold">transparência, segurança e agilidade</span> no processo.
                    </p>

                    <div class="alert alert-danger text-center fw-semibold rounded-3 shadow-sm">
                        📌 Toda reclamação registrada será analisada com atenção e você receberá o retorno adequado.
                    </div>

                    <p class="text-center text-muted mb-4">
                        Ao relatar sua experiência, você contribui para a melhoria contínua de nossos serviços.  
                        <span class="fw-bold text-danger">Não hesite em registrar sua insatisfação:</span> este é o canal certo para ser ouvido e ter sua questão resolvida.
                    </p>

                    <div class="d-grid gap-3 col-8 mx-auto mt-4">
                        <a href="<?= site_url('complaint')?>" class="btn btn-lg btn-danger shadow-sm">
                            <i class="bi bi-pencil-square me-2"></i> Apresentar Reclamação
                        </a>
                    </div>
                </div>
                <div class="card-footer bg-light text-center rounded-bottom-4 py-3">
                    <small class="text-muted">
                        © <?= date('Y') ?> - Sistema de Reclamações | Transparência e Compromisso
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
