<aside>
                <div class="top">
                    <div class="logo">
                        <img src="./images/image-3.png" alt="image-1.png">
                        <h2>Admin<span class="danger">PANEL</span></h2>
                    </div>
                </div>
                <div class="sidebar">
                    <a href="index.php" <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'class="active"' : ''; ?>>
                        <span class="material-symbols-outlined">
                            grid_view
                        </span>
                        <h3>Anasayfa</h3>
                    </a>
                    <a href="customers.php" <?php echo (basename($_SERVER['PHP_SELF']) == 'customers.php') ? 'class="active"' : ''; ?>>
                        <span class="material-symbols-outlined">
                            person
                        </span>
                        <h3>Kullanıcılar</h3>
                    </a>
                   
                    <!--
                    <a href="#">
                        <span class="material-symbols-outlined">
                            insights
                        </span>
                        <h3>Analytics</h3>
                    </a>
                    
                    <a href="#">
                        <span class="material-symbols-outlined">
                            mail
                        </span>
                        <h3>Mesajlar</h3>
                        <span class="message-count">10</span>
                    </a>
                    -->
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