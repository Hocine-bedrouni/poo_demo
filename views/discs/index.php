<?php
var_dump($discs);
?>


<div class="container">
    <div class="row mt-5">
        <div class="col sm-12">
            <table class="table table-dark table-stripped">
                <thead>
                <th>Id</th>
                <th>Titre</th>
                <th>Année</th>
                <th>Image</th>
                <th>Label</th>
                <th>Genre</th>
                <th>Prix</th>
                </thead>
                <tbody>
                <?php
                foreach ($discs as $disc) {
                    ?>
                    <tr>
                        <td><?= $disc->disc_id ?></td>
                        <td><?= $disc->disc_title ?></td>
                        <td><?= $disc->disc_year ?></td>
                        <td><img src="../../asset/img/<?= $disc->disc_picture ?>" alt=""></td>
                        <td><?= $disc->disc_label ?></td>
                        <td><?= $disc->disc_genre ?></td>
                        <td><?= $disc->disc_price ?></td>
                        <td><?= $disc->artist_name ?></td>
                        <a href="discDetail/<?=$disc->disc_id ?>" class="btn  btn-warning">bite</a>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>