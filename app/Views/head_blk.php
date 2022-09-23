<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <style>
        section {
            background: rgb(236, 236, 236);
            background: linear-gradient(135deg, rgba(236, 236, 236, 1) 30%, rgba(255, 255, 255, 1) 30%, rgba(255, 255, 255, 1) 70%, rgba(236, 236, 236, 1) 70%, rgba(236, 236, 236, 1) 100%);
        }
    </style>

    <title>SMC | School Management System</title>
</head>

<body>
    <header class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-dark">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="<?php echo base_url(); ?>">S|M|C</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="<?php echo base_url('adding-data'); ?>">Insert Data</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="<?php echo base_url('reporting-data'); ?>">Display Data</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container bg-dark text-white">
            <div class="row">
                <div class="col-12 py-5">
                    <h1 class="display-1 text-center">
                        <strong>S|M|C</strong>
                    </h1>
                    <p class="text-center">School Management System</p>
                </div>
            </div>
        </div>
    </header>