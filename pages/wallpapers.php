<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Wallpapers</title>
    <link rel="stylesheet" href="../css/style.css?t=<?php echo time();?>">
    <link href="../css/adaptive.css?t=<?php echo time();?>" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto+Condensed:wght@300&family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
    
  </head>
  <body>
    <header>
			<div class="">
				<a href="../" class="headerinner">BASKET</a>
			</div>
		</header>
    <p class="header-NBA">Wallpapers</p>
    <div class="wallpapers-div">
      <div class="wallpapers">

        <div class="wallpapers-diplay">
          <img src="../wallpapers/Kobe/cropped-kobe.png" alt="">
          <div class="dropdown">
            <button class="dropbtn">Download</button>
            <div class="dropdown-content">
              <a href="../wallpapers/Kobe/kobe.png"  download="">Original</a>
              <a href="../wallpapers/Kobe/cropped-kobe.png"  download="">Cropped</a>
              <a href="../wallpapers/Kobe/stretched-kobe.png"  download="">Stretched</a>
            </div>
          </div>

          <img src="../wallpapers/Miami Heat/cropped-Miami Heat.jpg" alt="">
          <div class="dropdown">
            <button class="dropbtn">Download</button>
            <div class="dropdown-content">
              <a href="../wallpapers/Miami Heat/Miami Heat.jpg"  download="">Original</a>
              <a href="../wallpapers/Miami Heat/cropped-Miami Heat.jpg"  download="">Cropped</a>
              <a href="../wallpapers/Miami Heat/stretched-Miami Heat.jpg"  download="">Stretched</a>
            </div>
          </div>

          <img src="../wallpapers/Harden/cropped-Harden.jpg" alt="">
          <div class="dropdown">
            <button class="dropbtn">Download</button>
            <div class="dropdown-content">
              <a href="../wallpapers/Harden/Harden.jpg"  download="">Original</a>
              <a href="../wallpapers/Harden/cropped-Harden.jpg"  download="">Cropped</a>
              <a href="../wallpapers/Harden/stretched-Harden.jpg"  download="">Stretched</a>
            </div>
          </div>
        </div>

        <div class="wallpapers-diplay">
          <img src="../wallpapers/Rose/cropped-Rose.jpg" alt="">
          <div class="dropdown">
            <button class="dropbtn">Download</button>
            <div class="dropdown-content">
              <a href="../wallpapers/Rose/Rose.jpg"  download="">Original</a>
              <a href="../wallpapers/Rose/cropped-Rose.jpg"  download="">Cropped</a>
              <a href="../wallpapers/Rose/stretched-Rose.jpg"  download="">Stretched</a>
            </div>
          </div>

          <img src="../wallpapers/Jordan/cropped-Jordan.jpg" alt="">
          <div class="dropdown">
            <button class="dropbtn">Download</button>
            <div class="dropdown-content">
              <a href="../wallpapers/Jordan/Jordan.jpg"  download="">Original</a>
              <a href="../wallpapers/Jordan/cropped-Jordan.jpg"  download="">Cropped</a>
              <a href="../wallpapers/Jordan/stretched-Jordan.jpg"  download="">Stretched</a>
            </div>
          </div>

          <img src="../wallpapers/Butler/cropped-Butler.jpg" alt="">
          <div class="dropdown">
            <button class="dropbtn">Download</button>
            <div class="dropdown-content">
              <a href="../wallpapers/Butler/Butler.jpg"  download="">Original</a>
              <a href="../wallpapers/Butler/cropped-Butler.jpg"  download="">Cropped</a>
              <a href="../wallpapers/Butler/stretched-Butler.jpg"  download="">Stretched</a>
            </div>
          </div>
        </div>

      </div>

    </div>

    <div class="download-all">
      <p class="download-text">You can download all wallpapers</p>
      <a href="../wallpapers/wallpapers.rar" download="" class="download-url">Download</a>
    </div>
    <div class="download-all">
      <form class="" action="../upload-php/upload-1.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" class="file-input">
        <button type="submit" name="button" class="submit-message">OK</button>
      </form>
    </div>
    <div class="wallpapers-div">
      <div class="wallpapers">
        <div class="wallpapers-diplay-client">
        
            <?php $path = scandir("../uploads");?>
           
            <?php
            foreach($path as $f){
                if($f!='.' and $f!='..')
                echo "<a class='client-a' href='../uploads/$f' download><img style=
                    '
                    
                    margin:25px;
                    border: 4px solid;
                    border-color: #fedf74;
                    border-radius: 10px;
                    opacity:1;
                    ' 
                    onmouseover='this.style.opacity=0.4;' onmouseout='this.style.opacity=1;'
                    src='../uploads/$f'>";
            }
            ?>
            
        </div>
        </div>
        </div>
  </body>
</html>
