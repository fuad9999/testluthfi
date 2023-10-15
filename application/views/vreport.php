<title><?=$header; ?></title>
<style type="text/css">
table.data {
    border-collapse: collapse;
} 
table.data th,  table.data td {
    padding: 5px;
}
</style>   
<table class="data" border="1">
    <tr>
        <th>no</th>
        <th>id</th>
        <th>code</th>
        <th>weightm</th>
        <th>weightg</th>
        <th>cogm</th>
        <th>pricenet</th>
        <th>priceus</th>
        <th>isproduction</th>
        <th>type</th>
        <th>buybackdt</th>
    </tr>   
    
    <?php
    $no=1;
    foreach ($buybackdj as $b ) { ?>
        <tr>
          <td><?=$no++;?></td>  
          <td><?php echo $b['id']; ?></td>
          <td><?php echo $b['code']; ?></td>
          <td><?php echo $b['weightm']; ?></td>
          <td><?php echo $b['weightg']; ?></td>
          <td><?php echo $b['cogm']; ?></td>
          <td><?php echo $b['pricenet']; ?></td>
          <td><?php echo $b['priceus']; ?></td>
          <td><?php echo $b['isproduction']; ?></td>
          <td><?php echo $b['type']; ?></td>
          <td><?php echo $b['buybackdt']; ?></td>
        </tr>
    <?php
    }
    ?>
    
    <tr>
            <th colspan="3">Total</th>
            <?php
    foreach ($ttlbb as $c ) { ?>
          <td><?php echo $c['sum_weightm']; ?></td>
          <td><?php echo $c['sum_weightg']; ?></td>
          <td><?php echo $c['sum_cogm']; ?></td>
          <td><?php echo $c['sum_pricenet']; ?></td>
          <td><?php echo $c['sum_priceus']; ?></td>
          <td></td>
          <td></td>
          <td></td>
    <?php
    }
    ?>
    </tr>

</table>    
