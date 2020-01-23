<?= $this->extend('layout-back') ?>
<?= $this->section('content') ?>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Mail</th>
            <th scope="col">Versión</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($results as $result): ?>
            <tr>
                <th scope="row"><?php echo $result['id'] ?></th>
                <td><?php echo $result['name'] ?></td>
                <td><?php echo $result['phone'] ?></td>
                <td><?php echo $result['mail'] ?></td>
                <td><?php echo $result['version_id'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?= $this->endSection() ?>