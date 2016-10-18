<?php

/* @var $this yii\web\View */

$this->title = $title;
?>
<div class="site-index">
    
    <div class="panel panel-info">
        <div class="panel-heading"><?php echo $title;?></div>
        <div class="panel-body">
     
        <?php
        echo "Controller sent data : ".$cat."<hr>";
        
        echo "<h3>Controller send Array 2</h3>";
        foreach ($ar as $browser) {
            echo "<p>".$browser."</p>";
        }
        
        echo "<h3>Controller send Array 3</h3>";
        echo '
        <table class="table table-hover table-striped">
        <thead>
          <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
        '
        ;
        foreach ($person as $p) {
            echo "<tr>";
            foreach ($p as $p_key => $p_value) {
                echo "<td>".$p_value."</td>";
            }
            echo "</tr>";
        }
        echo '
        </tbody>
        </table>';
        
         
        ?>
        </div>
    </div>


</div>
