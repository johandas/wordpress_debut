<?php get_header() ?>



    <?php if(have_posts()) : ?>

        <?php while(have_posts()) : the_post() ?>
            <!-- Début contenu HTML -->
                <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>

                <div class="contenu">
                    <?php the_content(); ?>
                </div>
                <hr>
                <p class="postmetada">Retour à la catégorie : <?php the_category('&gt'); ?></p> <!-- Fonction permettant de relier le restaurant à la catégorie et de créer un lien-->
                <?php $photo	       = getField('photo');?>
                <?php $telephone       = getField('telephone');?>
                <?php $horaires        = getField('horraires');?>
                <?php $adresse	       = getField('adresse');?>
                <?php $carte	       = getField('carte');?>
                <?php $laCarte	       = getField('la_carte_');?>
                <?php $acces	       = getField('acces');?>
                <?php $prixMoyen	   = getField('prix_moyen');?>
                <?php $brunch	       = getField('brunch');?>
                <?php $typeCuisine     = getField('type_de_cuisine_');?>
                <?php $promotion       = getField('promotion');?>
                <div class= "informations">Infos pratique sur le restaurant :</div>
                <div class="photo">
                    <img src= "<?= $photo->value['url'] ?>" alt="">
                </div>
                <div class="horaires"><?php echo $horaires->label; ?> : <?php echo $horaires->value;?></div>

                <div class="laCarte"><?php echo $laCarte->value;?></div>
                <div class="acces"><?php echo $acces->label; ?> : <?php echo $acces->value;?></div>
                <div class="typeCuisine"><?php echo $typeCuisine->label; ?> : <?php echo $typeCuisine->value;?></div>
                <div class="telephone"><?php echo $telephone->label; ?> : <?php echo $telephone->value;?></div>
                <div class="adresse"><?php echo $adresse->label; ?> : <?php echo $adresse->value;?></div>
                <div class="prixMoyen"><?php echo  $prixMoyen->label; ?> : <?php echo $prixMoyen->value;?></div>


                <div class="brunch">

                    <?php
                    echo $brunch->label . ' : ';
                    if($brunch->value == 1)
                    {
                        echo 'oui';
                    }
                    else {
                        echo 'non';
                    }


                    ?>

                </div>

                <div class="promotion">
                    <?php

                    echo $promotion->label . ' : ';
                    if( $promotion->value == 1) {
                        echo 'oui';
                    }
                    else {
                        echo 'non';
                    }
                    ?>

                </div>
                <div class="carte"><?php echo $carte->label; ?> : <?php echo $carte->value;?></div>
            <!-- Fin contenu HTML -->
        <?php endwhile; ?>

    <?php endif; ?>





<?php get_footer(); ?>
