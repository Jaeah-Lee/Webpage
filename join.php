<?php

        $connect = mysqli_connect('localhost', '', '', '') or die("fail");

        $name=$_GET[name];
        $id=$_GET[id];
        $pw=$_GET[pw];
        $phone=$_GET[phone];

        $date = date('Y-m-d H:i:s');

        //입력받은 데이터를 DB에 저장
        $query = "insert into member (name, id, pw, phone, date, permit) values ('$name','$id', '$pw', '$phone', '$date', 0)";


        $result = $connect->query($query);

        //저장이 됬다면 (result = true) 가입 완료
        if($result) {
        ?>      <script>
                alert('가입 되었습니다.');
                location.replace("./login.php");
                </script>

<?php   }
        else{
?>              <script>

                        alert("fail");
                </script>
<?php   }

        mysqli_close($connect);
?>
