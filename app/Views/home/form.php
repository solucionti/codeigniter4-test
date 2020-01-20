<!doctype html>
<html>
<head>
    <title>Welcome to CodeIgniter</title>
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>
<body>
<div class="column">
    <h2 class="title">Solicitar Cotización</h2>
    <?php echo form_open('home/insert', ['id' => 'quote_form']); ?>
    <div class="field">
        <label class="label">Nombre</label>
        <div class="control">
            <?php echo form_input(['name' => 'name']); ?>
        </div>
    </div>
    <div class="field">
        <label class="label">Télefono</label>
        <div class="control">
            <?php echo form_input(['name' => 'phone']); ?>

        </div>
    </div>
    <div class="field">
        <label class="label">Email</label>
        <div class="control">
            <?php echo form_input(['name' => 'mail', 'type' => 'email']); ?>
        </div>
    </div>
    <div class="field">
        <label class="label">Versión</label>
        <div class="control">
            <?php echo form_dropdown('shirts', ['small', 'large'], 'large'); ?>
        </div>
    </div>
    <div class="field is-grouped">
        <div class="control">
            <input type="submit" name="get_quote" value="Solicitar Cotización">
        </div>
    </div>
    <?php echo form_close(); ?>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/main.js"></script>

</body>
</html>
