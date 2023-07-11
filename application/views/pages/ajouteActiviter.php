<div class="card-body col-md-5">
    <h5 class="card-title">Ajouter activiter</h5>

    <!-- Vertical Form -->
    <form class="row g-3" method="post" action="<?php echo base_url('index.php/RegimeC/insert')?>">
        
    <div class="col-md-12">     
            <label for="inputNanme4" class="form-label">Objectif</label>       
            <select  class="form-control" name="objectif" >
                <option value="0">Augmentation de poids</option>
                <option value="1">Perte de poids</option>
            </select>
        </div>

        <div class="col-md-12">
            <label for="inputNanme4" class="form-label">Nom</label>
            <input type="text" class="form-control" id="inputNanme4" name="nom">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form><!-- Vertical Form -->

</div>
