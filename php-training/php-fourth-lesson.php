File Handling
File Handling is the storing of data in a file using a program
Modes
r   - open file for read only
w   - open file for write only/ override and erases the old content.
a   - open file for append data, creates new file if file doesn't exist



r+  - open file for read/write. pointer starts at beginning and overwrite data from positon 0 if required.Existing data is not discarded. 
w+  - Erases content of file or create new file if no file exist. existing data always discarded.
a+  - existing data preserved.Add content at end of file creates new file if file not exist
fseek($resource,0); to mov pointer to 0.


file('filename'); // convert file text to array

1) readfile('filename.ext');
2) fopen('name of file','mode');
3) fclose('name of file'); // or varibale holding file name
4) fread- Reads from an open file
   fread('name of file','number of bytes to read');

5) fgets- Read single line from a file
   fgets($filename);

6) feof()- check if end of file (EOF) reached     

7) fwrite('name of file','string to written');
$myfile= fopen('rough.txt','w')or die('unable to open file');
$data= "anil tomar";
fwrite($myfile,$data);
$data1= "deepika tomar";
fwrite($myfile,$data1);
fclose($myfile);

// Delete above data if $data,$data1 changes

* File uploads
php.ini 
file_uploads=on

<form action="" method="post" enctype="multipart/form-data">
	$targetDir= "picture/";
   $targetfile= $targetDir. $_FILES['myfile']['name'];
   // check file exist
   if(file_exists($targetfile)){ echo "sorry file exist"; }
   if(move_uploaded_file( $_FILES['myfile']['tmp_name'],$targetfile ))