<?php
function generateListItem($listItem, $listType)
{
?>
    <div class="accent brad10 flex jc-sb ai-c">
        <span>
            <?php
            switch ($listType) {
                case "order":
            ?>
                    Заказ #
                    <?= $listItem['id'] ?>
                <?php
                    break;
                case "taxist":
                ?>
                    <?= $listItem['name'] ?> (<?= $listItem['car'] ?>)
                <?php
                    break;
                case "car":
                ?>
                    Авто <?= $listItem['name'] ?> (<?= $listItem['number'] ?>)
            <?php
                    break;
            }
            ?>

        </span>
        <div class="flex g10">
            <?php
            switch ($listType) {
                case "order":
                    $href = "?edit=order&id=" . $listItem['id'];
                    break;
                case "taxist":
                    $href = "?tool=taxists&edit=taxist&id=" . $listItem['id'];
                    break;
                case "car":
                    $href = "?tool=cars&edit=car&id=" . $listItem['id'];
                    break;
            }
            ?>
            <a href="<?= $href ?>" class="accent-invert">🖍</a>
        </div>
    </div>
<?php
}
