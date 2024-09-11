</section>
<section>
    <div class="w-100 position-relative">
        <div class="feat-wrap v2 position-relative w-100">
            <div class="feat-caro">
                <?php foreach ($slider->result() as $data) {
                ?>
                    <div class="feat-item v2">
                        <div class="feat-img position-absolute" style="background-image: url(<?php echo base_url() ?>uploads/kegiatan/<?php echo $data->kegiatan_foto ?>);"></div>
                        <div class="feat-cap-wrap position-absolute d-inline-block">
                            <div class="feat-cap left-icon d-inline-block">
                                <h2 class="mb-0"><?php echo $data->kegiatan_judul; ?></h2>
                                <p class="mb-0"></p>
                                <a class="thm-btn thm-bg" href="about.html" title="">Selengkapnya<span></span><span></span><span></span><span></span></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div><!-- Featured Area Wrap -->
    </div>
</section>
