<h3> List des regime </h3>

<table class="table table-dark">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Nom</th>
            <th scope="col">Prix</th>
            <th scope="col"></th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i=0; $i < count($liste_regime); $i++) { ?>
                <tr>
                    <th scope="row"><?php echo $liste_regime[$i]->idRegime; ?></th>
                    <td><?php  echo $liste_regime[$i]->nom; ?> </td>
                    <td><?php echo $liste_regime[$i]->prix; ?></td>
                    <td> <a class="btn btn-primary" > Modifier </a> </td>
                    <td> <a class="btn btn-danger" > Supprimer </a> </td>
                </tr>
                <?php  } ?>
        </tbody>
    </table>