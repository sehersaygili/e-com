<?php include 'head.php' ?> 
    <div class="container">
    <?php include 'sidebar.php' ?> 
    <div class="users">
        <div class="recent-users">
            <h2>Kayıtlı Kullanıcılar</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Kullanıcı ID</th>
                            <th>Kullanıcı</th>
                            <th>Email</th>
                            <th>Telefon</th>
                            <th>Memnuniyet</th>
                            <th>Durum</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $users=$con->query("SELECT * FROM users ORDER BY id ASC");
                            foreach($users as $user){
                        ?>

                        <tr>
                            <td><?=$user['id'];?></td>
                            <td><?=$user['name'];?> <?=$user['surname'];?></td>
                            <td><?=$user['email'];?></td>
                            <td><?=$user['phone'];?></td>
                            <td>
                                <?php
                                    $surveyRating = $user['survey'];
                                    for ($i = 1; $i <= 5; $i++) {
                                        if ($i <= $surveyRating) {
                                            echo '<span class="primary material-symbols-outlined">star</span>';
                                        }
                                    }
                                ?>
                            </td>
                            <td class="<?=($user['deleted_at'] !== null && $user['status'] == 0) ? 'danger' : ($user['status'] == 0 ? 'danger' : 'success');?>">
                                <?php
                                if ($user['deleted_at'] !== null && $user['status'] == 0) {
                                    echo 'Silinmiş';
                                } else {
                                    echo $user['status'] == 0 ? 'Pasif' : 'Aktif';
                                }
                                ?>
                            </td>
                            <td>
                                <span class="success material-symbols-outlined">
                                    edit
                                </span>
                                <?php 
                                if($user['status']==1) {
                                ?>
                                <span class="danger material-symbols-outlined">
                                    delete
                                </span>
                                <?php } 
                                else if($user['status']==0)
                                 {?>
                                <span class="warning material-symbols-outlined">
                                visibility
                                </span>
                                <?php } ?>
                            </td>
                        </tr>

                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php include 'script.php' ?>  
