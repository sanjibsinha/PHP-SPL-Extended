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
        Recursive Iterator dispalys directories, not elements  
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

<!-- 
    Conclusion:
    As long as directory iteration is concerned, FileSystemIterator is always a
    better option than DirectoryIterator
 -->


      <p class="footer">
          <a href="index.php">HOME</a>
          </p>
    
      
  </body>
</html>