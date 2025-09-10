<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row">
        <div class="col">

            <?= form_open_multipart('/submit') ?>
            <div class="mb-3">
                <label for="email" class="form-label">Email *</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Name </label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="mb-3">
                <label for="area" class="form-label">Área de Reclamação *</label>
                <select class="form-select" id="area" name="area" required>
                    <option value="">Selecione uma área</option>
                    <option value="area1">área 1</option>
                    <option value="area2">área 2</option>
                    <option value="area3">área 3</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="reclamacao" class="form-label">Área de texto para Reclamação *</label>
                <textarea class="form-control" id="reclamacao" name="reclamacao" required></textarea>
            </div>

            <div class="mb-3">
                <label for="arquivos" class="form-label">Upload de ficheiros</label>
                <div class="d-flex flex-row justify-content-between gap-3">
                    <input class="form-control" type="file" id="arquivo1" name="arquivos[]">
                    <input class="form-control" type="file" id="arquivo2" name="arquivos[]">
                    <input class="form-control" type="file" id="arquivo3" name="arquivos[]">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
            <?= form_close() ?>

        </div>
    </div>
</div>
<?= $this->endSection() ?>