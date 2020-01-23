<?= $this->extend('layout-back') ?>
<?= $this->section('content') ?>

<div class="container content">
    <div class="row">
        <div class="col">
            <?php echo form_open('/admin/login', ['id' => 'admin_login_form']); ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Usuario</label>
                    <input type="text" class="form-control" name="user" placeholder="Ingresa tu usuario" required>

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>

                <button type="submit" class="btn btn-primary">Ingresar</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
