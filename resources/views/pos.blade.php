<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <p><label>Nama: </label><input type="text" name = "namaPengunjung" id ="pengunjung">
    <input type="submit" value="Submit" name="submit"></p>

    <script type="text/javascript">
        const simpan =() => {
            let nama = $('#pengunjung').val();
            let idPos = <?php $_GET("idPos"); ?>;


            $.ajax({
                type:"POST",
                url:"{{route('simpan.data')}}",
                data:{
                    "_token" : "<?php echo csrf_token();?>",
                    "name" : nama,
                    "Pos_id" : idPos,
                },

                success: function(data)
                {
                    alert("Terimakasih sudah mengunjungi pos ini !")
                }
            })
        }
        </script>
</body>
</html>