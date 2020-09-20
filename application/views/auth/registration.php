<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-5 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-1">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" action="<?= base_url('auth/registration'); ?>" method="post"
                            enctype="multipart/form-data">

                            <div class="form-group">

                                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name "
                                    value="<?= set_value('name'); ?>">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>

                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Email Address" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">

                                <input class="form-control-file <?php echo form_error('image') ? 'is-invalid' : '' ?>"
                                    type="file" name="image" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('image') ?>
                                </div>

                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control" id="password1" name="password1"
                                        placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>

                                <div class="col-sm-6">
                                    <input type="password" class="form-control" id="password2" name="password2"
                                        placeholder="Konfirmation">
                                </div>
                            </div>
                            <input class="form-control btn btn-success" type="submit" name="btn" value="Registrasi" />
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth') ?>">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>