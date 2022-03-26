<section class="gall">
        <div class="container">
            <div class="row">
                <?php 
                        if(!empty($gallerywebsite)){
                            foreach ($gallerywebsite as $key => $value) {
                                ?>
                                  <div class="col-md-4">
                                    <div class="gallery-image">
                                        <a href="<?= base_url($value['image']);?>" data-lightbox="image-1" data-title=""><img src="<?= base_url($value['image']);?>" alt="gallery1" height="200" class="img-fluid hhit"></a>
                                    </div>
                                  </div>


                                <?php
                            }
                        }




                ?>
                
               
              
               <!--  <div class="col-md-4">
                    <div class="gallery-image">
                        <a href="<?= base_url('assets/website/images/gallery/image11.jpg')?>" data-lightbox="image-1" data-title=""><img src="<?= base_url('assets/website/images/gallery/image11.jpg')?>" alt="gallery1" height="200" class="img-fluid hhit"></a>
                    </div>
                </div>
               
                <div class="col-md-4">
                    <div class="gallery-image">
                        <a href="<?= base_url('assets/website/images/gallery/image12.jpg')?>" data-lightbox="image-1" data-title=""><img src="<?= base_url('assets/website/images/gallery/image12.jpg')?>" alt="gallery1" height="200" class="img-fluid hhit"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-image">
                        <a href="<?= base_url('assets/website/images/gallery/image13.jpg')?>" data-lightbox="image-1" data-title=""><img src="<?= base_url('assets/website/images/gallery/image13.jpg')?>" alt="gallery1" height="200" class="img-fluid hhit"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-image">
                        <a href="<?= base_url('assets/website/images/gallery/image14.jpg')?>" data-lightbox="image-1" data-title=""><img src="<?= base_url('assets/website/images/gallery/image14.jpg')?>" alt="gallery1" height="200" class="img-fluid hhit"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-image">
                        <a href="<?= base_url('assets/website/images/gallery/image15.jpg')?>" data-lightbox="image-1" data-title=""><img src="<?= base_url('assets/website/images/gallery/image15.jpg')?>" alt="gallery1" height="200" class="img-fluid hhit"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-image">
                        <a href="<?= base_url('assets/website/images/gallery/image16.jpg')?>" data-lightbox="image-1" data-title=""><img src="<?= base_url('assets/website/images/gallery/image16.jpg')?>" alt="gallery1"  height="200" class="img-fluid hhit"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-image">
                        <a href="<?= base_url('assets/website/images/gallery/image17.jpg')?>" data-lightbox="image-1" data-title=""><img src="<?= base_url('assets/website/images/gallery/image17.jpg')?>" alt="gallery1" height="200" class="img-fluid hhit"></a>
                    </div>
                </div>
				<div class="col-md-4">
                    <div class="gallery-image">
                        <a href="<?= base_url('assets/website/images/gallery/image18.jpg')?>" data-lightbox="image-1" data-title=""><img src="<?= base_url('assets/website/images/gallery/image18.jpg')?>" alt="gallery1" height="200" class="img-fluid hhit"></a>
                    </div>
                </div> -->
               

            
                
            </div>
        </div>
    </section>
	
