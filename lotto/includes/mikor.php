<?php
    $result = Mikor();
?>
<div class="container">
<h1 class="text-center display-5">Mikor volt ötös?</h1>
<p class='fs-4'>Az adatok csak 1998-tól ismertek</p>
<table class="table table-striped boder">
    <thead>
        <tr class="fw-bold">
            <td>#</td>
            <td>Év</td>
            <td>Hét</td>
            <td>Darab</td>
            <td>HUF</td>
        </tr>
    </thead>
    <?php
    
    $i = 0;
    while ($row = mysqli_fetch_array($result)) 
    {
        $i++;
        echo"<tr>
                <td>$i</td>
                <td>$row[ev]</td>
                <td>$row[het]. hét</td>
                <td>$row[talalat5_db] darab</td>";
        echo "<td>" . number_format($row['talalat5_huf'], 0, ' ', ' ') . " Ft<td>";
        echo "</tr>";
    }
       
    ?>
   
</table>
</div>