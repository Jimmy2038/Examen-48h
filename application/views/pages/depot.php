<div class="jumbotron top-space">
    <div class="container">      
        <h2> Solde : <?php echo $compte; ?></h2>    
    
        <h3 class="text-center thin"> Faire un depot </h3>
        <form class="user" method="post" action="<?php echo base_url('index.php/DepotC/validation')?>" >
            <div class="form-group">
                <input type="text" class="form-control form-control-user"
                    id="exampleInputEmail" aria-describedby="emailHelp"
                    placeholder="Code" name="depot">
            </div>
            <div class="text-center thin" > <?php echo $mess ?> </div>
            <input type="submit"  class="btn btn-primary btn-user btn-block" value="Valide">        
            <hr>
        </form>
    </div>
    <div>
        <h3> Code Disponnible </h3> 

        <?php for ($i=0; $i < count($liste_code); $i++) { 
            // echo $liste_code[$i]->montant 
            echo $liste_code[$i]->code."<br/>" ;
        } ?>
    </div>
</div>

