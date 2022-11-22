    <?php
        $result = Ev();

    ?>
    <div class="container py-3">
        <h1 class="text-center display-5">Húzások</h1>
        <p class="fs-4">
            Válassz egy hónap
        </p>

        <p class="fs-1">
            <?php
                while ($row = mysqli_fetch_array($result)) 
                {
                    echo "<a type='button' href='./?p=ev&evszam=$row[ev]' class='btn btn-primary mx-1 my-1 fs-2'>$row[ev]</a>";
                }
            ?>
        </p>
    </div>
    