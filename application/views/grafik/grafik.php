    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<style>
    #box1{
	width:20px;
	height:20px;
	background:blue;
}
    #box2{
	width:20px;
	height:20px;
	background:#4682B4;
}
</style>

<div class="container-fluid">
    <div class="row text-center p-2">
        <div class="col-sm-12">
            <h1 class="p-2">Data Prediksi</h1>
        </div>
    </div>
    <div class="row" style="margin-left:0px; margin-right:0px;">
        <div id="chart" class="col-sm-12" style="height: 400px;">
        </div>

    <div class="col-sm-4" >
        <br/>
        <table style="width:100%">
        <tr>
            <td><div id="box1"></div></td>
            <td>Hasil Panen</td>
        </tr>
        <tr>
            <td><div id="box2"></div></td>
            <td>Prediksi Hasil Panen</td>    
        </tr>  
        </table>

            <br/>

            <p style="text-aligment:justify"> Data prediksi ini di dapatkan dari hasil perhitungan analisis oleh saudara M. Lutfi Al-ghuntur Aji S. 
            menggunakan sebuah metode Least Square</p>

    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<script>

    Morris.Line({
        element: 'chart',
        data: [
            <?php
            foreach ($rows as $row) {
                $chart_data = "{ nm_wilayah:'" . $row->kd_hasil . "', 
                 hasil_panen_sebelum:" . $row->hasil_panen_sebelum . ", 
                 hasil_panen_prediksi:" . $row->hasil_panen_prediksi . "}, ";
                echo $chart_data;
            }
            ?>
        ],
        xkey: 'nm_wilayah',
        ykeys: ['hasil_panen_sebelum', 'hasil_panen_prediksi'],
        labels: ['Hasil 2018', 'Prediksi 2019'],
        hideHover: 'auto',
        stacked: true
    });


</script>