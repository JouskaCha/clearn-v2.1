<div class="row mt-4 mx-0">
    <div class="col-md-2 d-none d-sm-block">
        
    </div>    
    <div class="col-md-4 card bg-white card-body">    
	<p class="text-dark  my-4 small"><i class="fas fa-dot-circle text-warning me-1" aria-hidden="true"></i>SERTIFIKAT</p>
        <img src="<?=base_url()?>assets/clearn/serrrrrr.jpg" class="w-100" alt="contoh gambar sertif">
        <?php if ($completed_mission = $total_mission) :?>
            <a href="https://forms.gle/qaGGUdeCqr13pgvF6" target="blank" class="btn btn-warning me-md-2 mt-2" type="button">Download Sertifikat</a>
        <?php else:?>
            <p>Kamu belum menyelesaikan seluruh tantangan. </p>
            <p>Selesaikan seluruh tantangan untuk unduh sertifikat </p>
        <?php endif;?>
    </div>
    <div class="col-md-2 d-none d-sm-block">
        
    </div>
</div>
</div>
</div>
</main>
