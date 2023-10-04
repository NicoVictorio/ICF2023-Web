@extends('layouts.app')
@section('content')
<div class="bg-primary text-white text-center">
    <br />
    <p><label>Nama: </label><input type="text" name="namaPengunjung" id="pengunjung">
        <input type="submit" value="Submit" id="btnSubmit" name="submit" onclick="simpan()">
    </p>
</div>

<script type="text/javascript">
    const simpan =() => {
        let nama = $('#pengunjung').val();
        let idPos = "<?php $id_Pos = $_GET["idPos"]; echo $id_Pos;?>";

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
                alert("Terima kasih karena telah mengunjungi pos " + idPos + ". Tunjukan ini ke penjaga pos untuk Wheel Spin.")
            }
        })
    }
</script>
@yield('content')
@endsection