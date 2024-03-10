<?php include 'assets/head.php';
$usersPerPage = 4; // Sayfa başına gösterilecek kullanıcı sayısı
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1; // Geçerli sayfa numarası
$startFrom = ($currentPage - 1) * $usersPerPage; // Başlangıç indeksi

$usersQuery = $con->query("SELECT * FROM users ORDER BY id ASC LIMIT $startFrom, $usersPerPage");
$users = $usersQuery->fetchAll(PDO::FETCH_ASSOC);

$totalQuery = $con->query("SELECT COUNT(*) as total FROM users");
$totalResult = $totalQuery->fetch(PDO::FETCH_ASSOC);
$total = $totalResult['total'];

?> 
<div class="header">
        </div>
    <div class="container">
    <?php include 'assets/sidebar.php' ?> 
    <div class="users">
        
        <div class="recent-users">
        <h2>Kayıtlı Kullanıcılar</h2>
                <table style="width: 135%;">
                    <thead>
                        <tr>
                            <th>Kullanıcı Tip</th>
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
                            foreach($users as $user){
                        ?>

                        <tr>
                            <td>
                                <span style="background-color: #DCF7F7; border-radius: 15px; padding: 5px 5px;">
                                    <?php echo ($user['type'] == 1) ? 'Admin' : 'Müşteri'; ?>
                                </span>
                            </td>
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
                                    echo 'Pasif - Silinmiş';
                                } else {
                                    echo $user['status'] == 0 ? 'Pasif' : 'Aktif';
                                }
                                ?>
                            </td>
                            <td>
                            <a href="edit-user.php?id=<?= $user['id']; ?>">
                                <span class="success material-symbols-outlined" style="float:left;">
                                    edit
                                </span>
                            </a>
                            <?php 
                              if ($user['status'] == 1) {
                                ?>
                                <a href="delete-user.php?id=<?= $user['id']; ?>">
                                    <span class="danger material-symbols-outlined">
                                        delete
                                    </span>
                                </a>
                            <?php
                            } else if (($user['status'] == 0) && ($user['deleted_at'] == null) ){
                                ?>
                                <a href="visibility-user.php?id=<?= $user['id']?>">
                                    <span class="warning material-symbols-outlined">
                                        visibility
                                    </span>
                                </a>
                                <?php
                             } else if  (($user['status'] == 0) && ($user['deleted_at'] != null)) {
                                    ?>
                                    <a href="undo-user.php?id=<?= $user['id'] ?>">
                                        <span class="material-symbols-outlined">
                                            undo
                                        </span>
                                    </a>
                                <?php
                                }
                            }?>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="pagination">
                    <?php for ($i = 1; $i <= ceil($total / $usersPerPage); $i++): ?>
                        <button data-page="<?= $i ?>" <?= $i == $currentPage ? 'disabled' : '' ?>><?= $i ?></button>
                    <?php endfor; ?>
                </div>
                
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <?php include 'assets/script.php' ?>  
