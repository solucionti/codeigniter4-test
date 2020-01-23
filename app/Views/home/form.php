<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<header>
    <div class="container-fluid">
        <div class="logo">
            <div class="container text-center">
                <img src="/assets/images/tesla-logo.png">
            </div>
        </div>
    </div>
</header>
<div class="container content">
    <div class="row">
        <div class="form-result d-none">
            <div class="col">
                <h2>Cotizar</h2>
                <p>Tu Cotización se envió correctamente.</p>
                <ul class="list-group">
                    <li class="list-group-item">Nombre: <span class="name"></span></li>
                    <li class="list-group-item">Teléfono: <span class="phone"></span></li>
                    <li class="list-group-item">Email: <span class="mail"></span></li>
                    <li class="list-group-item">Versión: <span class="version"></span></li>

                </ul>
            </div>

        </div>
        <div class="col form">
            <h2>Cotizar</h2>
            <?php echo form_open('home/insert', ['id' => 'quote_form']); ?>
            <div class="form-group">
                <label class="label">Nombre</label>
                <div class="control">
                    <?php echo form_input(['name' => 'name', 'required' => 'required', 'class' => 'form-control']); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="label">Télefono</label>
                <div class="control">
                    <?php echo form_input(['name' => 'phone', 'required' => 'required', 'class' => 'form-control']); ?>

                </div>
            </div>
            <div class="form-group">
                <label class="label">Email</label>
                <div class="control">
                    <?php echo form_input(['name' => 'mail', 'type' => 'email', 'required' => 'required', 'class' => 'form-control']); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="label">Versión</label>
                <div class="control">
                    <?php echo form_dropdown('models', $models, '', ['required' => 'required', 'class' => 'form-control']); ?>
                </div>
            </div>
            <div class="field is-grouped">
                <div class="control">
                    <input type="submit" name="get_quote" value="Solicitar Cotización"
                           class="btn btn-primary btn-lg btn-block">
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
