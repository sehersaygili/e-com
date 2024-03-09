<?php include 'assets/head.php' ?>    
    <body>
        <div class="container">
            <?php include 'assets/sidebar.php' ?> 
            <!------- END OF ASIDE ------->

            <?php include 'assets/main.php' ?> 
            <!------- END OF MAIN ------->
            <?php include 'assets/head_right.php' ?> 
                <div class="right">
                    <div class="cards">
                        <div class="item add-card" onclick="newUser()">
                            <div class="card-item">
                                <span class="material-symbols-outlined">
                                    add
                                </span>
                            </div>
                            <div class="right">
                                <div class="info">
                                    <h3>Yeni Kullanıcı Oluştur</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!------- END OF RIGHT ------->
        </div>
        <?php include 'modals/new-user.php' ?>  

        <?php include 'assets/script.php' ?>  

    </body>   
</html>



