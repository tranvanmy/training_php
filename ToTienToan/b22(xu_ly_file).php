<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $path = 'b22.txt';
        $fp = @fopen($path,"a+");
        //"r" chỉ đọc,"r+" đọc và ghi,"w" chỉ ghi
        //"w+" đọc và ghi,"a" ghi tiếp vào file,
        //"a+"cả ghi tiếp và đõ file
        //"b" mở dưới dang binary

        // if(!$fp){
        //     echo "mở file không thành công";
        // }else{
        //     while(!feof($fp)){
        //         //lặp qua tùng kí tự để đọc
        //         //echo fgetc($fp);
        //         //lặp qua tuengf dòng
        //         //echo fgets($fp);
        //         //echo '<br>';
        //     }
        // }

        //đọc cả file
        // if(!$fp){
        //     echo 'mở file không thành công';
        // }else{
        //     $data = fread($fp, filesize($path));
        //     echo $data;
        // }

        //ghi file
        // if(!$fp){
        //     echo 'mở file k thành công';
        // }else{
        //     fwrite($fp,"toan");
        //     fclose($fp);
        // }

        //kiểm tra sự tồn tại của file
        // if(file_exists($path)){
        //     echo "file có tồn tại";
        // }

        //kiểm tra quyền ghi
        // if(!$fp){
        //     echo "mở file không thành công";
        // }else{
        //     if(is_writable($path)){
        //         fwrite($fp,"yeu");
        //     }else{
        //         echo "không được ghi";
        //     }
        //     fclose($fp);
        // }

        //lấy nội dung mà k cần hàm fread
        //file txt
        //echo file_get_contents($path);
        //lấy nội dung từ link
        //echo file_get_contents('https://github.com/totientoan/training_php/pulls');
    
        //ghi nội dung mà k cần hàm fwrite
        //file_put_contents($path,'maimai la bao lau');

        //đổi tên file
        //rename('demo2.txt','b22.txt');

        //copy file
        // if(!copy('b22.txt','demo1.txt')){
        //     echo 'Copy thất bại';
        // }

        //xóa file 
        // if(file_exists('demo1.txt')){
        //     unlink('demo1.txt');
        // }

        //kiểm tra đường dẫn folder có tồn tại
        // if(is_dir('toan')){
        //     echo 'folder tồn tại';
        // }
        // else{
        //     echo 'folder không tồn tại';
        // }

        //tạo folder mới
        if(!is_dir('toan/sub')){
            mkdir('toan/sub');
        }
    ?>
</body>
</html>