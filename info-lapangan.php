 <div class='container'>
        <div class='page-section'>
            <div class='row'>
                <div class='col-md-12 col-lg-9'>
                    <div class='page-section padding-top-none'>
                        <div class='s-container'>
                            <h1 class='text-display-1 margin-top-none'>Info Lapangan Bhaskara Sport Center</h1>

                        </div>
                        <br/>

                        <?php
                        $SQL=mysql_query("SELECT * FROM tlapangan ORDER BY noLapangan ASC");
                        while($_data=mysql_fetch_array($SQL)){
                            echo"<div class='row'>
                             <h1 class='text-display-1 margin-top-none'>Lapangan Nomor : $_data[noLapangan]</h1>
                             <img class='paragraph-inline width-280 clearfix-xs width-100pc-xs' src='gambar/lapangan_img/height/$_data[gambarLapangan]' alt='image' /> 
                             <p>$_data[deskripsi]</p>
                             <p>$_data[status_lapangan]</p>
                             <p>Harga = $_data[harga_lapangan]</p>
                             <p>Buka pada jam 09.00-22.00 WIB </p>
                             <br>
                            </div>
                            ";



                        }


                        ?>
                           
                      
                    </div>
                                                       
                </div>
               
            </div>
        </div>
    </div>