<main>
    <div class="insights">
        <div class="sales">
            <span class="material-symbols-outlined">analytics</span>
            <div class="middle">
                <div class="left">
                    <h3>Toplam Satış</h3>
                    <h2>₺25.024</h2>
                </div>
                <div class="progress">
                    <svg><circle cx='38' cy='38' r='36'></circle></svg>
                    <div class="number">
                        <p>81%</p>
                    </div>
                </div>
            </div>
        </div>
        <!------- END OF SALES ------->

        <div class="expenses">
            <span class="material-symbols-outlined">bar_chart</span>
            <div class="middle">
                <div class="left">
                    <h3>Toplam Giderler</h3>
                    <h2>₺14.160</h2>
                </div>
                <div class="progress">
                    <svg><circle cx='38' cy='38' r='36'></circle></svg>
                    <div class="number">
                        <p>62%</p>
                    </div>
                </div>
            </div>
        </div>
        <!------- END OF EXPENSES ------->

        <div class="income">
            <span class="material-symbols-outlined">stacked_line_chart</span>
            <div class="middle">
                <div class="left">
                    <h3>Toplam Gelirler</h3>
                    <h2>₺10.864</h2>
                </div>
                <div class="progress">
                     <svg><circle cx='38' cy='38' r='36'></circle></svg>
                    <div class="number">
                        <p>44%</p>
                    </div>
                </div>
            </div>
        </div>
        <!------- END OF INCOME ------->

    </div>
    <!------- END OF INSIGHTS ------->

    <div class="recent-orders">
        <h2>Son Siparişler</h2>
        <table>
            <thead>
                <tr>
                    <th>Ürün</th>
                    <th>Ürün Numarası</th>
                    <th>Ödeme Durumu</th>
                    <th>Durum</th>
                    <th>İşlemler</th>
                </tr>
            </thead>
            <tr>
                <td>Nescafe Black Roast</td>
                <td>231A3FF2</td>
                <td>Başarılı</td>
                <td class="primary">Tamamlandı</td>
                <td class="danger">Detay</td>
            </tr>
            <tr>
                <td>Nestle Coffee Mate</td>
                <td>D44A3FF2</td>
                <td>Başarısız</td>
                <td class="warning">Bekleniyor</td>
                <td class="danger">Detay</td>
            </tr>
        </tbody>
    </table>
    <a href="#" class="show-all-orders">
        <span class="material-symbols-outlined">
            line_end_arrow_notch
        </span>
        Show All
    </a>
</div>

    <div class="recent-users">
        <h2>Son Kullanıcılar</h2>
            <table>
                <thead>
                    <tr>
                        <th>Kullanıcı ID</th>
                        <th>Kullanıcı</th>
                        <th>Email</th>
                        <th>Telefon</th>
                        <th>Memnuniyet</th>
                        <th>Durum</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $users = $con->query("SELECT * FROM users ORDER BY created_at DESC LIMIT 2");
                        foreach($users as $user) {
                    ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['name'] ?> <?= $user['surname'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['phone'] ?></td>
                        <td class="primary">
                            <?php 
                            $surveyRating = $user['survey'];
                            for($i=1; $i<=5;$i++) {
                                if($i <= $surveyRating) {
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
                        <td class="danger">Detay</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="customers.php" class="show-all-users">
                <span class="material-symbols-outlined">line_end_arrow_notch</span>Show All
            </a>
        </div>
</main>