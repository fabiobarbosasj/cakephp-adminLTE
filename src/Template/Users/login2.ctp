<?php $this->layout = 'AdminLTE.register'; ?>
<?= $this->Form->create($user, array('role' => 'form')) ?>
    <div class="box-body">
        <?php
        echo $this->Form->input('name');
        echo $this->Form->input('username');
        echo $this->Form->input('email');
        echo $this->Form->input('password');
        //--------Aplicação para confirmar password--------
        echo $this->Form->input('confirm_password', ['type' => 'password']);
        echo $this->Form->input('roles_id', ['options' => $roles]);
        ?>
    </div>
    <!-- /.box-body -->
    <div class="row">
        <div class="col-xs-8">
            <div class="checkbox icheck">
                <label>
                    <input type="checkbox"> Eu concordo com os <a href="#">termos</a>
                </label>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
        </div>
        <!-- /.col -->
    </div>
<?php echo $this->Form->end(); ?>