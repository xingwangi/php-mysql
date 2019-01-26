<?php
/*
$a = 1;
$b = 1;
echo $a + $b;
*/

/*
$a = 3;
$b = 2;
echo $a % $b;
*/

 ?>

<table>
    <?php for($i = 0; $i < 10; $i++){ ?>
        <?php if($i % 2){ ?>
            <tr style="background: red;">
                <td></td>
            </tr>
        <?php }else{ ?>
            <tr style="background: green">
                <td></td>
            </tr>
        <?php } ?>
    <?php } ?>
</table>










