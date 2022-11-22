<?php
        $result = het();
        $evszam = $_GET['evszam'];

    ?>
    <div class="container py-3">
        <h1 class="text-center display-5">Húzások - <?php echo $evszam;?></h1>
        <p class="fs-4">
            Válassz egy hetet
        </p>

        <p class="fs-1">
            <?php
                while ($row = mysqli_fetch_array($result)) 
                {
                    echo "<a type='button' href='./?p=adatlap&evszam=$evszam&het=$row[het]' class='btn btn-primary mx-1 my-1 fs-2'>$row[het]. hét</a>";
                }
            ?>
        </p>
    </div>
    