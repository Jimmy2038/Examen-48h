<?php echo $suggest['prix'] ?>
<?php echo $suggest['dure'] ?>
<?php echo $suggest['idRegime'] ?>
<div class="jumbotron top-space">
    <div class="container">   
        <form class="user" method="post" action="<?php echo base_url('index.php/RegimeC/accepteRegime')?>" >
            <input type="hidden" value="<?php echo $suggest['prix'] ?>" type="text" name="prix">
            <input type="hidden" value="<?php echo $suggest['dure'] ?>" type="text" name="dure">
            <input type="hidden" value="<?php echo $suggest['idRegime'] ?>" type="text" name="idRegime">
            <input type="submit"  class="btn btn-primary btn-user btn-block" value="Accepter">
        </form>
    </div>
</div>

