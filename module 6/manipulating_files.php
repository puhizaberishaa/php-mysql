<?php
$file =fopen("example.txt", "w")
//r->read, w->write, a->ftp_append
//x->create new file, r->read and write

// $text ="Hello, this is my first:PHP file."
// fwrite("$file, $append_text")


// $append_text = "\nThis line was added later."
// dwrite($file, $append_text);

// echo fread($file, filesize(example.txt));

// while(! feat($file)){
//     echo fgets($file)."<br>";
// }


//rename a file
rename("ecample.txt", "newfile,txt");
echo "file renamed successfully!";
fclose($file);


//delete a file
unlink("test.txt")
echo "file deleted successfully!"


?>