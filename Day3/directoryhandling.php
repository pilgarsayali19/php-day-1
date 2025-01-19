<html>
    <body>
        <?php
        // directory handling operations

        //create a directory
        if(!is_dir("phpDay3_directory")){
            mkdir("phpDay3_directory");
            echo"directory created";

        }
        else{
            echo"directory already exists !";

        }
        echo"<br>";

        //check if the directory exists
        if(is_dir("phpDay3_directory")){
            echo"directory exists";
        }
        else{
            echo"directory does not exists!";
        }
        //list the files inside the folder
        $files= scandir("phpDay3_directory");
        foreach($files as $file){
            echo $file . "<br>";
        }

        echo"<br>";
        //change the directory 
        echo"current directory:" .getcwd();
        chdir("phpDay3_directory");
        echo"<br> new directory :" .getcwd();
        echo"<br>";
         
        //delete the files inside the directory
        $delete_files= scandir(".");
        foreach($delete_files as $file){
            if($file!=="."&& $file!==".."){
                unlink($file);
            
            }
            echo"files deleted!";
        }
        echo"<br>";
        //delete directory
        chdir("..");
        echo"<br> current directory:".getcwd();
        if(is_dir("phpDay3_directory")){
            rmdir("phpDay3_directory");
            echo"directory removed";

        }
        else{ 
        echo"directory does not exists!";
        }


        ?>
        </body>
    </html>
