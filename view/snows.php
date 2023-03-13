<?php
/**
 * Created by PhpStorm.
 * User: Pascal.BENZONANA
 * Date: 08.05.2017
 * Time: 09:16
 */
// tampon de flux stocké en mémoire
ob_start();
$title="RentASnow - Snows";
$i = 0;
?>

<div class="span12" id="divMain">
<?php foreach ($snows as $snow) :
    $i++; ?>
        <div class="thumbnail">
            <?= $snow['code']; ?>
            <a  href="../index.php?receive=<?=$i?>" target="blank"><img src="<?= $snow['photo']; ?>" alt="<?= $snow['code']; ?>" ></a>
                <p><strong>Marque : </strong><?= $snow['brand']; ?></p>
                <p><strong>Modèle : </strong><?= $snow['model']; ?></p>
                <p><strong>Longueur : </strong><?= $snow['snowLength']; ?> cm</p>
                <p><strong>Prix :</strong> CHF <?= $snow['dailyPrice']; ?>.- / jour</p>
                <p><strong>Disponibilité : </strong><?= $snow['qtyAvailable']; ?></p>
        </div>
<?php endforeach ?>
</div>

<?php
  $content = ob_get_clean();
  require "gabarit.php";
  ?>
