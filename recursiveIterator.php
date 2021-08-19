<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Bootstrap core CSS -->
<link href="style.css" rel="stylesheet">

  </head>
  <body>
      <!-- 
      
      -->
      <div class="body">
          <h1>
            <?php echo "Hello PHP SPL Class"; ?>
          </h1> 
          <h2>
              Recursive Iterator with DOT files
          </h2>       
      </div>
      <div class="container">
        <code>
            <?php

            $files = new RecursiveDirectoryIterator('all-files');
            foreach ($files as $key => $value) {
                # code...
                echo $key . " >> " . $value . "</br>";
            }

            ?>
          
        </code>
      </div>
      <!-- 
      
      -->
      <h2>
      Recursive Iterator without DOT files
      </h2> 
      <div class="container">
        <code>
        <?php

        $files = new RecursiveDirectoryIterator('all-files');
        $files->setFlags(RecursiveDirectoryIterator::SKIP_DOTS | 
        RecursiveDirectoryIterator::UNIX_PATHS);
        foreach ($files as $key => $value) {
            # code...
            echo $key . " >> " . $value . "</br>";
        }

        ?>
          
        </code>
      </div>
      <h2>
      Recursive Iterator Iterates through all files  
      </h2> 
      <div class="container">
        <code>
        <?php

        $files = new RecursiveDirectoryIterator('all-files');
        $files->setFlags(RecursiveDirectoryIterator::SKIP_DOTS | 
        RecursiveDirectoryIterator::UNIX_PATHS);
        $files = new RecursiveIteratorIterator($files);
        foreach ($files as $key => $value) {
            # code...
            echo $key . " >> " . $value . "</br>";
        }

        ?>
        </code>

      </div>
      <h2>
      Recursive Iterator Iterates keeping parent first 
      </h2> 
      <div class="container">
        <code>
        <?php

        $files = new RecursiveDirectoryIterator('all-files');
        $files->setFlags(RecursiveDirectoryIterator::SKIP_DOTS | 
        RecursiveDirectoryIterator::UNIX_PATHS);
        $files = new RecursiveIteratorIterator($files, 
        RecursiveIteratorIterator::SELF_FIRST);
        foreach ($files as $key => $value) {
            # code...
            echo $key . " >> " . $value . "</br>";
        }

        ?>
        </code>

      <h2>
        Recursive Iterator Iterates keeping child first    
      </h2> 
      <div class="container">
        <code>
        <?php

        $files = new RecursiveDirectoryIterator('all-files');
        $files->setFlags(RecursiveDirectoryIterator::SKIP_DOTS | 
        RecursiveDirectoryIterator::UNIX_PATHS);
        $files = new RecursiveIteratorIterator($files, 
        RecursiveIteratorIterator::CHILD_FIRST);
        foreach ($files as $key => $value) {
            # code...
            echo $key . " >> " . $value . "</br>";
        }

        ?>
        </code>
      </div>

      <h2>
        Recursive Iterator dispalys directories setting maximum depth  
      </h2> 
      <div class="container">
        <code>
        <?php

        $files = new RecursiveDirectoryIterator('all-files');
        $files->setFlags(RecursiveDirectoryIterator::SKIP_DOTS | 
        RecursiveDirectoryIterator::UNIX_PATHS);
        
        $files = new RecursiveIteratorIterator($files, 
        RecursiveIteratorIterator::SELF_FIRST);
        $files->setMaxDepth(1);

        foreach ($files as $value) {
            # code...
            echo $value . "</br>";
        }

        ?>
        </code>
      </div>

      <h2>
        Recursive Iterator  
      </h2> 
      <div class="container">
        <code>
        <?php

        $depth = 1;
        $files = new RecursiveDirectoryIterator('all-files/images'); 
              
        $files = new RecursiveIteratorIterator($files);
        $files->setMaxDepth($depth);
        foreach ($files as $value) {
            # code...
            echo $value . "</br>";
        }
        
        echo "Counting Elements in images, including DOT files = " . iterator_count($files);

        ?>
        </code>
      </div>

<!-- 
    ss@ss-desktop:/var/www/html/PHP-SPL-Extended/all-files/images$ ls -la
total 140
drwxrwxr-x 2 ss ss  4096 Aug 12 08:05 .
drwxrwxr-x 5 ss ss  4096 Aug 19 06:56 ..
-rw-rw-r-- 1 ss ss 32358 Aug 12 08:05 nature1.jpg
-rw-rw-r-- 1 ss ss 38351 Aug 12 08:05 nature2.jpg
-rw-rw-r-- 1 ss ss 59088 Aug 12 08:05 nature3.jpg

    Conclusion:
    As long as directory iteration is concerned, FileSystemIterator is always a
    better option than DirectoryIterator
 -->


      <p class="footer">
          <a href="index.php">HOME</a>
          </p>
    
      
  </body>
</html>