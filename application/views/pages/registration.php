<section class="content">
      <div class="container-fluid">
    	<div class="row">
        	<div class="col-md-12">
                <div class="card">
                    <!-- <div class="card-header">
                    	<h3 class="card-title"><?php echo $title; ?></h3>
                    </div> -->
                    <!-- /.card-header -->
                    <div class="card-body">
                    <div class="row">
                        	<div class="col-md-12 col-lg-12 table-responsive" id="result">
                            	<table class="table table-bordered text-center" id="bootstrap-data-table-export">
                                    <thead>
                                        <tr>    
                                            <th>#</th>
                                            <th>Name</th>                                            
                                            <th>Father's Name</th>                                            
                                            <th>Date Of Birth</th>                                            
                                            <th>Address</th>                                            
                                            <th>Status</th>                                            
                                            <th>Action</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php

                                       if(!empty($registerlist)){
                                        $i =0;
                                        foreach ($registerlist as $key => $value) {
                                            ?>
                                            <tr>
                                            <td><?php echo ++$i;?></td>
                                            <td><?php echo $value['name'];?></td>
                                            <td><?php echo $value['fname'];?></td>
                                            <td><?php echo $value['fname'];?></td>
                                            <td><?php echo $value['address'];?></td>
                                            <td><?php echo 'Paid';?></td>
                                            <td><a href="<?php echo  base_url('home/create_pdf/'.$value['id'])?>" class="btn btn-sm btn-success">Print Admit Card</a></td>
                                            </tr>


                                            <?php
                                        }
                                       }



                                       ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>    
<script>
    var table;
    $(document).ready(function(){
        createDatatable();
    });
    
    function createDatatable(){
        $('#status').html('');
        table=$('#bootstrap-data-table-export').DataTable();
        table.columns('.select-filter').every(function(index){
            var that = this;
            var title=that.context[0].aoColumns[that[0]].sTitle;
            $ele=$('<div class="col-md-3"></div>');
            var pos=$('#status').append($ele);
            // Create the select list and search operation
            var select = $('<select class="form-control" />').appendTo($ele).on('change',function(){
                            that.search($(this).val()).draw();
                        });
            select.append('<option value="">Select '+title+'</option>');
            // Get the search data for the first column and add to the select list
            this.cache( 'search' ).sort().unique().each(function(d){
                    select.append($('<option value="'+d+'">'+d+'</option>') );
            });
        });
    }
	
	$(document).ready(function(e) {
        $('.hoverable').mouseenter(function(){
            //$('[data-toggle="popover"]').popover();
            $(this).popover('show');                    
        }); 

        $('.hoverable').mouseleave(function(){
            $(this).popover('hide');
        });

        

        $('.duplicate').click(function(){
            var dupid = $(this).data('dupid');
            $.ajax({
                url:"<?php echo base_url('home/ajax_sidebar') ;?>",
                method:"POST",
                data:{dupid:dupid},
                success:function(data){
                    //console.log(data);
                    var setdata = JSON.parse(data);
                    //console.log(setdata);
                    $('#activate_menu').val(setdata.activate_menu);
                    $('#activate_not').val(setdata.activate_not);
                    $('#base_url').val(setdata.base_url);
                    $('#icon').val(setdata.icon);
                    $('#parent_id').val(setdata.parent).trigger('change');
                    $('#position').val(setdata.position);
                    var role_text = setdata.role_id;                    
                    $('#roles').val(role_text);
                    $('#status').val(setdata.status);
                }
            });
        });
        
		var table=$('.data-table').DataTable({
			scrollCollapse: true,
			autoWidth: false,
			responsive: true,
			columnDefs: [{
				targets: "no-sort",
				orderable: false,
			}],
			"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
			"language": {
				"info": "_START_-_END_ of _TOTAL_ entries",
				searchPlaceholder: "Search"
			},
		});		
        
		$('body').on('change','#parent_id',function(){
			var parent_id=$(this).val();
			var option="<select name='position' id='position' class='form-control' required>";
			option+="<option value=''>Select </option>";
			option+="<option value='0'>Top</option>";
			$.ajax({
				type:"POST",
				url:"<?php echo base_url("home/getOrderList"); ?>",
				data:{parent_id:parent_id},
				dataType:"json",
				beforeSend: function(){
					//$(".box-overlay").show();
				},
				success: function(data){
					$(data).each(function(i, val) {
						option+="<option value='"+val['position']+"'>After "+val['name']+"</option>";
					});
					option+='</select>';
					$('#position').replaceWith(option);
					$('.box-overlay').hide();
				}
			});
		});
        $('#parent_id').trigger('change');
    });
</script>