<?php
    if(isset($_GET['on'])) {
        onFunc();
    }
    if(isset($_GET['off'])) {
        offFunc();
    }

    function onFunc(){
        echo "Button on Clicked";

        include("../../config/db/connect/db_connect.php");

        $query = "SELECT * FROM post";
        $result = mysqli_query($connection, $query);

        if(! ($result) ){
          echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
        } else {
          if( mysqli_num_rows( $result )==0 ){
            echo '<div>';
                echo '<div class="post">';
                  echo '<p class="purpose_price">No post found!<p>';
                echo '</div>';
            echo '</div>';
          } else {
            while( $row = mysqli_fetch_array($result) ){
              echo '<div>';
                  echo '<div class="post">';
                    echo '<p class="purpose_price"><span>Purpose: Sell<span>, <span>Price: 280 tk</span><p>';
                    echo '<p class="time_location"><span>1 hr ago<span>, <span>Aftabnagar</span><p>';
                    echo '<br>';
                    echo "{$row['description']}";
                    echo '<div class="post_img"></div>';
                    echo '<hr>';
                    echo '<p style="background-color: #e9ebee; border-radius: 25px; padding: 10px; width:40px;font-weight:bold;">CALL</p>';
                  echo '</div>';
              echo '</div><br>';
            }
          }
        }
    }
    function offFunc(){
        echo "Button off clicked";
    }
?>
