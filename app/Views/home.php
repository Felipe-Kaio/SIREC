<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>

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

<?= $this->endSection() ?>
