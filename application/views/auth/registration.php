<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Registrasi!</h1>
                        </div>
                        <form class="user" method="POST" action="<?= base_url('auth/registration'); ?>">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nama lengkap" value="<?= set_value('name'); ?>">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" name="nik" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nomor Induk Kependudukan" value="<?= set_value('nik'); ?>">
                                <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Alamat email" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class=" form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" name="password1" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" name="password2" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Ulangi Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth/index'); ?>">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>