<h3> Validation des codes  </h3> 

<div class="card-body">
    <?php if (count($list_validation)<1) { echo "Aucun demande pour le moment";} 
    for ($i=0; $i < count($list_validation); $i++) { ?>
    <!-- List group with Links and buttons -->
    <div class="row d-flex list-group col-md-5">
        <div class="col-md-5" > <button type="button" class="list-group-item list-group-item-action card mb-4 py-3 border-left-primary"> <?php echo $list_validation[$i]->dateArriver ?>  </button> </div>
        <div class="col-md-5" > <a href="<?php echo base_url('index.php/ValidationC/accepte/'.$list_validation[$i]->idValidation) ?>" type="button" class="btn btn-primary"> Valider  </a> </div>
        
    </div><!-- End List group with Links and buttons -->
    <?php } ?>
</div>
