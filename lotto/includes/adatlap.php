    <?php
        $result = Adatlap();
        $evszam = $_GET['evszam'];
        $het = $_GET['het'];
    ?>
    <div class="container py-3">
        <h1 class="text-center display-5"><?php echo $evszam;?>. - <?php echo $het;?>. hét</h1>
        <div class="row">
            <div class="col-6">
                <p class="fs-4">Az ötös lottó nyerőszámai:</p>
                <?php
                    $row = mysqli_fetch_array($result) ;
                    
                        echo "<p class='fs-4'>$row[szam1], $row[szam2], $row[szam3], $row[szam4], $row[szam5]</p>";  
                ?>
            </div>
            <div class="col-6">
            <?php  
                if ($evszam >= 1998)
                {
                    $huf5 = number_format($row['talalat5_huf'], 0, ' ', ' ');
                    $huf4 = number_format($row['talalat4_huf'], 0, ' ', ' ');
                    $huf3 = number_format($row['talalat3_huf'], 0, ' ', ' ');
                    $huf2 = number_format($row['talalat2_huf'], 0, ' ', ' ');
                   

                    echo "<table class='table'>
                    <thead>
                        <tr>
                        <th scope='col'></th>
                        <th scope='col'>DARAB</th>
                        <th scope='col'>HUF</th>    
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td scope='row'>Öt találatos</th>
                        <td>$row[talalat5_db]</td>
                        <td>$huf5 Ft<td>
                      
                        </tr>
                        <tr>
                        <td scope='row'>Négy találatos</td>
                        <td>$row[talalat4_db]</td>
                        <td>$huf4 Ft</td>
                      
                        </tr>
                        <tr>
                        <td scope='row'>Három találatos</td>
                        <td>$row[talalat3_db]</td>
                        <td>$huf3 Ft</td>
                        
                        </tr>
                        <tr>
                        <td scope='row'>Két találatos</td>
                        <td>$row[talalat2_db]</td>
                        <td>$huf2 Ft</td>
                        </tr>
                    </tbody>
                    </table>";
                }
                else
                {
                    echo "<p class='text-end fs-4'>A nyereményekről nincs adat</p>";  
                }
                
            
                ?>
            </div>
        </div>

        <p class="fs-1">
            
        </p>
    </div>
    