<div class="card-body col-md-5">
    <h5 class="card-title">Ajouter Regime</h5>

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
        <div class="col-12">
            <label for="inputPassword4" class="form-label">dure</label>
            <input type="number" class="form-control" id="inputPassword4" name="dure">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">poids </label>
            <input type="number" class="form-control" id="inputAddress" placeholder="poids" name="poids">
        </div>    
        <div class="col-12">
            <label for="inputAddress" class="form-label">prix </label>
            <input type="number" class="form-control" id="inputAddress" placeholder="prix" name="prix">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form><!-- Vertical Form -->

</div>

idObjectif INTEGER NOT NULL,
    nom VARCHAR(100) NOT NULL,
     INTEGER NOT NULL,
    poids DOUBLE NOT NULL,
    prix DOUBLE NOT NULL