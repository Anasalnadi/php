<?php
session_start();


?>


<body>


<div>
    <p>Graduation Book</p>
        <?php
            if (isset($_SESSION['guests'])) {
                $guests = $_SESSION['guests'];
                foreach ($guests as $guest){
        ?>
                    <div>
                        <span><img src="" alt=""/></span>
                        <div>
                            <p>From : <?=$guest['name']?></p>
                            <p>message : <?=$guest['message']?></p>
                        </div>
                    </div>
        <?php } } ?>



</div>
</body>






	 