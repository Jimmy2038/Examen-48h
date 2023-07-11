<div class="card-body">
<h3> Liste de code  </h3> 
    <!-- Dark Table -->
    <table class="table table-dark">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Code</th>
            <th scope="col">Mantant</th>
            <th scope="col"></th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i=0; $i < count($liste_code); $i++) { ?>
                <tr>
                    <th scope="row">1</th>
                    <td><?php  echo $liste_code[$i]->code; ?> </td>
                    <td><?php echo $liste_code[$i]->montant; ?></td>
                    <td> <a class="btn btn-primary" > Modifier </a> </td>
                    <td> <a class="btn btn-danger" > Supprimer </a> </td>
                </tr>
                <?php  } ?>
        </tbody>
    </table>
</div>
