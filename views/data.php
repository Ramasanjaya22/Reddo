<table class="table table-bordered">
    <tbody>
        <tr>
            <th class="bg-light">Nama</th>
            <td><?php echo $_POST['nama'] ?></td>
        </tr>
        <tr>
            <th class="bg-light">email</th>
            <td><?php echo $_POST['email'] ?></td>
        </tr>
        <tr>
            <th class="bg-light">foto profile</th>
            <img src="<?php echo $_POST['img'] ?>" class="img-circle" </img>
        </tr>
    </tbody>
</table>