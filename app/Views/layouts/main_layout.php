<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/bootstrap.min.css') ?>">
</head>

<body class="bg-dark text-light">

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
                        <?= $this->renderSection('content') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/bootstrap/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>