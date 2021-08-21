<html>

<head>
    <title>ciBlog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url(); ?>">ciBlog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>posts">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>categories">Categories</a>
                        </li>
                    </ul>
                </div>

                <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                    <ul class="navbar-nav ms-auto">
                        <?php if (!$this->session->userdata('logged_in')) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>users/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>users/register">Register</a>
                        </li>
                        <?php endif; ?>
                        <?php if ($this->session->userdata('logged_in')) : ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $this->session->userdata('username') ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>posts/create">Create
                                        Post</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>categories/create">Create
                                        Category</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>users/logout">Logout</a>
                                </li>
                            </ul>
                        </li>

                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <div class="container">
        <!-- Flash messages -->

        <!-- 
        <?php if ($this->session->flashdata('user_registered')) : ?>
            <?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_registered') . '</p>'; ?>
        <?php endif; ?>

        <?php if ($this->session->flashdata('post_created')) : ?>
            <?php echo '<p class="alert alert-success">' . $this->session->flashdata('post_created') . '</p>'; ?>
        <?php endif; ?>

        <?php if ($this->session->flashdata('post_updated')) : ?>
            <?php echo '<p class="alert alert-success">' . $this->session->flashdata('post_updated') . '</p>'; ?>
        <?php endif; ?>

        <?php if ($this->session->flashdata('category_created')) : ?>
            <?php echo '<p class="alert alert-success">' . $this->session->flashdata('category_created') . '</p>'; ?>
        <?php endif; ?>

        <?php if ($this->session->flashdata('post_deleted')) : ?>
            <?php echo '<p class="alert alert-success">' . $this->session->flashdata('post_deleted') . '</p>'; ?>
        <?php endif; ?>

        <?php if ($this->session->flashdata('login_failed')) : ?>
            <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('login_failed') . '</p>'; ?>
        <?php endif; ?>

        <?php if ($this->session->flashdata('user_loggedin')) : ?>
            <?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_loggedin') . '</p>'; ?>
        <?php endif; ?>

        <?php if ($this->session->flashdata('user_loggedout')) : ?>
            <?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_loggedout') . '</p>'; ?>
        <?php endif; ?>

        <?php if ($this->session->flashdata('category_deleted')) : ?>
            <?php echo '<p class="alert alert-success">' . $this->session->flashdata('category_deleted') . '</p>'; ?>
        <?php endif; ?> 
        -->