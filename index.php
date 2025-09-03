<?php // dummy ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Page</title>
    <link href="styles.php" rel="stylesheet">
</head>
<body>
    <header class="header" id="header">
        <a href="#home" class="logo-container">
            <div class="logo-text">Lê Đức Thuận - CNTT D2023 A</div>
        </a>
        
        <nav class="main-menu" id="mainMenu">
            <a href="#home" class="menu-item active">Trang chủ</a>
            <a href="#bt" class="menu-item">Bài Tập</a>
            <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="menu-item external">GitHub</a>
        </nav>
        
        <div class="menu-toggle" id="menuToggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>

    <!-- Trang chủ -->
    <section id="home" class="section">
        <div class="coverflow-wrapper">
            <div class="info">
                <h2 id="current-title">Bugatti Bolide</h2>
                <p id="current-description">Kẻ hủy diệt đường đua với 1800 mã lực</p>
            </div>

            <div class="coverflow-container" tabindex="0">
                <div class="coverflow" id="coverflow">
                    <div class="coverflow-item" data-index="0">
                        <div class="cover image-loading">
                            <img src="images/anh1.jpg" alt="Bugatti Bolide" loading="lazy">
                        </div>
                        <div class="reflection"></div>
                    </div>
                    <div class="coverflow-item" data-index="1">
                        <div class="cover image-loading">
                            <img src="images/anh2.avif" alt="Ferrari 499p" loading="lazy">
                        </div>
                        <div class="reflection"></div>
                    </div>
                    <div class="coverflow-item" data-index="2">
                        <div class="cover image-loading">
                            <img src="images/anh3.avif" alt="Lamborghini Revuelto" loading="lazy">
                        </div>
                        <div class="reflection"></div>
                    </div>
                    <div class="coverflow-item" data-index="3">
                        <div class="cover image-loading">
                            <img src="images/anh4.webp" alt="Porsche 919 EVO" loading="lazy">
                        </div>
                        <div class="reflection"></div>
                    </div>
                    <div class="coverflow-item" data-index="4">
                        <div class="cover image-loading">
                            <img src="images/anh5.webp" alt="Koenigsegg Sadair Spear" loading="lazy">
                        </div>
                        <div class="reflection"></div>
                    </div>
                    <div class="coverflow-item" data-index="5">
                        <div class="cover image-loading">
                            <img src="images/anh6.webp" alt="Hennessey Venom F5" loading="lazy">
                        </div>
                        <div class="reflection"></div>
                    </div>
                    <div class="coverflow-item" data-index="6">
                        <div class="cover image-loading">
                            <img src="images/anh7.jpg" alt="W Motors Lykan Hypersport" loading="lazy">
                        </div>
                        <div class="reflection"></div>
                    </div>
                </div>

                <button class="nav-button prev" onclick="navigate(-1)">‹</button>
                <button class="nav-button next" onclick="navigate(1)">›</button>

                <div class="dots-container" id="dots"></div>
                
                <!-- Play/Pause Button -->
                <button class="play-pause-button" id="playPauseBtn" onclick="toggleAutoplay()">
                    <span class="play-icon">▶</span>
                    <span class="pause-icon" style="display: none;">❚❚</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Bài Tập -->
    <section id="bt" class="section">
  <div class="bt-content">
    <div class="bt-header">
      <h2>Bài Tập</h2>
      <p>Tất cả bài tập trong quá trình học có thể tìm thấy ở bên dưới</p>
    </div>
            
    <div class="bt-main">
      <div class="bt-visual">
        <div class="showcase-display">
          <div class="showcase-main">
            <div class="corner-decoration top-left"></div>
            <div class="corner-decoration bottom-right"></div>

            <div class="bt-info info">
                <a href="BaiTap/bt1.php">Bài Tập 1</a>
                <a href="BaiTap/bt2.php">Bài Tập 2</a>
                <a href="BaiTap/bt3.php">Bài Tập 3</a>
                <a href="BaiTap/bt3.php">Bài Tập 4_GET</a>
                <a href="BaiTap/bt3.php">Bài Tập 4_POST</a>
                <a href="BaiTap/bt5.php">Bài Tập 5</a>
                <a href="BaiTap/csdl.php">Bài Tập PHP & MySQL </a>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-copyright">
                Designed and Coded by: Le Duc Thuan | With the help of TemMO
            </div>
        </div>
    </footer>

    <!-- Scroll to top button -->
    <div class="scroll-to-top" id="scrollToTop">
        <span>↑</span>
    </div>

<script src="script.php"></script>

</body>
</html>