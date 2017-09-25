<?php $this->layout = 'AdminLTE.login'; ?>

<form action="<?php echo $this->Url->build(array('controller' => 'users', 'action' => 'login')); ?>" method="post">
    <div class="form-group has-feedback">
        <?php echo $this->Form->input('username');?>
    </div>
    <div class="form-group has-feedback">
        <?php echo $this->Form->input('password');?>
    </div>
    <div class="row">
        <div class="col-xs-8">
            <div class="checkbox icheck">
                <label>
                    <input type="checkbox"> Lembre de mim
                </label>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
        </div>
        <!-- /.col -->
    </div>
</form>