<div class="container">
    <h1 class="text-center display-5">Számtippelő</h1>
    <p class='fs-4'>Nyerőszám tippek: 
    <?php
        $szam = array();
        $szamok[0] = $szam = rand(1, 90);
        $i = 0;
        while ($i < 5)
        {
            $rand = rand(1, 90);
            if (!in_array($rand, $szamok))
            {
                $szamok[$i] = $rand;
                $i++;
            }
        }
        sort($szamok);
        for ($i=0; $i < count($szamok)-1; $i++) { 
           echo $szamok[$i] . ", ";
        }
        echo $szamok[count($szamok)-1]
    ?>
    </p>
</div>
