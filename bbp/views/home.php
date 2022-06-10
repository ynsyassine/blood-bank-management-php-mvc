<?php
require_once './views/includes/navbar.php';
?>
<?php 
    $data = new Homecontroller() ; 
    $bloods = $data->getAllblood();  
    
?>

<style>
   span.float-right.summary_icon {
    font-size: 3rem;
    position: absolute;
    right: 1rem;
    top: 0;
    }
    .imgs{
		margin: .5em;
		max-width: calc(100%);
		max-height: calc(100%);
	}
	.imgs img{
		max-width: calc(100%);
		max-height: calc(100%);
		cursor: pointer;
	}
	#imagesCarousel,#imagesCarousel .carousel-inner,#imagesCarousel .carousel-item{
		height: 60vh !important;background: black;
	}
	#imagesCarousel .carousel-item.active{
		display: flex !important;
	}
	#imagesCarousel .carousel-item-next{
		display: flex !important;
	}
	#imagesCarousel .carousel-item img{
		margin: auto;
	}
	#imagesCarousel img{
		width: auto!important;
		height: auto!important;
		max-height: calc(100%)!important;
		max-width: calc(100%)!important;
	}
</style> 

<br>
<br>
<br>
<br>

<div class="containe-fluid">
	<div class="row mt-3 ml-3 mr-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <hr>
                    <h4><b>Available Blood per group in Liters</b></h4>
                    <div class="row">
                        <?php 
                        $blood_group = array("A+","B+","O+","AB+","A-","B-","O-","AB-");
                        foreach($blood_group as $v){
                            $bg_inn[$v] = 0; 
                            $bg_out[$v] = 0; 
                        }
                        foreach($bloods as $blood){
                            if($blood['status'] == 1){
                                $bg_inn[$blood['blood_group']] += $blood['volume'];
                            }else{
                                $bg_out[$blood['blood_group']] += $blood['volume'];
                            }
                        } 

                        ?>
                        <?php foreach ($blood_group as $v): ?>
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <div class="card-body bg-light">
                                    <div class="card-body text-dark">
                                        <span class="float-right summary_icon"> <?php echo $v ?> <i class="fa fa-tint text-danger"></i></span>
                                        <h4><b>
                                            <?php echo ($bg_inn[$v] - $bg_out[$v]) / 1000 ?>
                                        </b></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>	
                