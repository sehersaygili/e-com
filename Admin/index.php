<?php include 'head.php' ?>    
    <body>
        <div class="container">
            <aside>
                <div class="top">
                    <div class="logo">
                        <img src="./images/image-3.png" alt="image-1.png">
                        <h2>Admin<span class="danger">PANEL</span></h2>
                    </div>
                </div>
                <div class="sidebar">
                    <a href="#">
                        <span class="material-symbols-outlined">
                            grid_view
                        </span>
                        <h3>Anasayfa</h3>
                    </a>
                    <a href="#" class="active">
                        <span class="material-symbols-outlined">
                            person
                        </span>
                        <h3>Müşteriler</h3>
                    </a>
                    <a href="#">
                        <span class="material-symbols-outlined">
                            receipt_long
                        </span>
                        <h3>Siparişler</h3>
                    </a>
                    <!--
                    <a href="#">
                        <span class="material-symbols-outlined">
                            insights
                        </span>
                        <h3>Analytics</h3>
                    </a>
                    -->
                    <a href="#">
                        <span class="material-symbols-outlined">
                            mail
                        </span>
                        <h3>Mesajlar</h3>
                        <span class="message-count">26</span>
                    </a>
                    <a href="#">
                        <span class="material-symbols-outlined">
                            inventory
                        </span>
                        <h3>Ürünler</h3>
                    </a>
                    <a href="#">
                        <span class="material-symbols-outlined">
                            report
                        </span>
                        <h3>Sorun Bildirimleri</h3>
                    </a>
                    <a href="#"> 
                        <span class="material-symbols-outlined">
                            settings
                        </span>
                        <h3>Ayarlar</h3>
                    </a>
                    <a href="#">
                        <span class="material-symbols-outlined">
                            add
                        </span>
                        <h3>Ürün Ekle</h3>
                    </a>
                    <a href="#">
                        <span class="material-symbols-outlined">
                            logout
                        </span>
                        <h3>Çıkış Yap</h3>
                    </a>
                </div>
            </aside>
            <!------- END OF ASIDE ------->
            <main>
                <div class="date">
                    <input type="date">
                </div>
                <div class="insights">
                    <div class="sales">
                        <span class="material-symbols-outlined">
                            analytics
                            </span>
                        <div class="middle">
                            <div class="left">
                                <h3>Toplam Satış</h3>
                                <h1>₺25.024</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="number">
                                    <p>81%</p>
                                </div>
                            </div>
                        </div>
                     <!--   <small class="text-muted">Last 24 hours</small> -->
                    </div>
                    <!------- END OF SALES ------->

                    <div class="expenses">
                        <span class="material-symbols-outlined">
                            bar_chart
                            </span>
                        <div class="middle">
                            <div class="left">
                                <h3>Toplam Giderler</h3>
                                <h1>₺14.160</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="number">
                                    <p>62%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!------- END OF EXPENSES ------->

                    <div class="income">
                        <span class="material-symbols-outlined">
                            stacked_line_chart
                            </span>
                        <div class="middle">
                            <div class="left">
                                <h3>Toplam Gelirler</h3>
                                <h1>₺10.864</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx='38' cy='38' r='36'></circle>
                                </svg>
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
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
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
                    <a href="#">Show All</a>
                </div>
            </main>
            <!------- END OF MAIN ------->

            <div class="right">
                <div class="top">
                    <button id="menu-btn">
                        <span class="material-symbols-outlined">
                            menu
                        </span>
                    </button>
                    <div class="theme-toggler">
                        <span class="material-symbols-outlined active">
                            light_mode
                        </span>
                        <span class="material-symbols-outlined ">
                            dark_mode
                        </span>
                    </div>
                    <div class="profile">
                        <div class="info">
                            <p>Hey, <b>Seher!</b></p>
                            <small class="text-muted">Admin</small>
                        </div>
                        <div class="profile-photo">
                            <img src="./images/profile-3.jpg" >
                        </div>
                    </div>
                </div>
                <div class="cards">
                    <h2>Cards</h2>
                    <div class="item add-card">
                        <div class="card-item">
                            <span class="material-symbols-outlined">
                                add
                            </span>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>Yeni Sayfa Ekle</h3>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
            <!------- END OF RIGHT ------->
        </div>
    </body>
</html>

<?php include 'script.php' ?>  