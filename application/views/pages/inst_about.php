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
                        	<div class="col-md-5 col-lg-4">
                                <?php echo form_open_multipart('home/ins_about');?>
                                
                          <div class="form-group row">
                                    <div class="col-sm-12">
                                      <!--   <input type="hidden" name="sno" id="sno"> -->
                                        <label>vision</label>
                                        <?php echo form_input(array('type'=>'text','name'=>'vision','id'=>'vision','class'=>'form-control','placeholder'=>'Enter about us'));?>
                                    </div>                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                          <label>General Instruction</label>
                                          <textarea type=textarea height=500 width=400 name="instruction" id="instruction" class="form-control" placeholder="Enter General Instruction" required="true"></textarea>
                                        
                                    </div>                                    
                                </div>
                               <!-- <div class="form-group row">
                                    <div class="col-sm-12">
                                        <?php echo form_input(array('type'=>'text','name'=>'icon','id'=>'icon','class'=>'form-control','placeholder'=>'Fav Icon'));?>
                                    </div>                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <?php echo form_input(array('type'=>'text','name'=>'name','id'=>'name','class'=>'form-control','placeholder'=>'Sidebar Name','required'=>'true'));?>
                                    </div>                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <?php $parent_option[] = '-- Select Parent --'; $parent_option['0'] = 'SELF';
                                        if(!empty($parent_sidebar)){
                                            foreach($parent_sidebar as $pside){
                                                $parent_option[$pside['id']] = $pside['name'];
                                            }
                                        }
                                        echo form_dropdown(array('class'=>'form-control','name'=>'parent','id'=>'parent_id','required'=>'true'),$parent_option,array('0'));
                                        ?>
                                    </div>                                    
                                </div>   
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <?php 
                                            echo create_form_input("select","position","",true,'',array('id'=>'position'),array(""=>"Select Position"));
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <?php echo form_input(array('type'=>'text','name'=>'role_id','id'=>'roles','class'=>'form-control','placeholder'=>'Enter Allowed Roles (as 1|2|3 if multiple)','required'=>'true'));?>
                                    </div>                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <?php echo form_input(array('type'=>'number','min'=>'0','max'=>'1','name'=>'status','id'=>'status','class'=>'form-control','placeholder'=>'Enter Status','required'=>'true'));?>
                                    </div>                                    
                                </div> -->
                                <div class="form-group row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <?php echo form_submit(array('id'=>'save_cat','value'=>'Save about','class'=>'form-control btn btn-success'));?>
                                    </div>
                                    <div class="col-md-4"></div>                                    
                                </div>
                                <?php echo form_close();?>
                            </div>
                            <div class="col-md-2 col-lg-2"></div>
                        	<div class="col-md-5 col-lg-6 table-responsive">
                            	<table class="table table-bordered text-center">
                                    <thead>
                                        <tr>    
                                            <th>sno</th>
                                            <th>Vision</th>
                                            <th>General Instruction</th>                                            
                                            <th>Date</th>                                                                                 
                                            <th>Action</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($aboutlist)){$i=0;
                                            // echo PRE;
                                            // print_r($aboutlist);
                                            foreach($aboutlist as $key => $value){ $i++; $id=$value['pid'];?>     
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $value['vision']; ?></td>
                                            <td><?= $value['Instruction']; ?></td>
                                           <td><?= $value['date']; ?></td>
                                            <td><button class="btn btn-sm btn-success updt" data-toggle="modal" data-target="#updateModal"  data-pid="<?php echo $value['pid'];?>" data-vision="<?php echo $value['vision'];?>" data-instruction="<?php echo $value['Instruction']; ?>"><i class="fa fa-edit"></i></button> 
                                               <button class="btn btn-danger btn-sm delete" value="<?php echo $value['pid'];?>"><i class="fa fa-trash"></i></button></td>
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
<!-- modal of update page -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update About section</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

         <!--  <form > -->
             <?php echo form_open_multipart('home/upt_about');?>
            <div class="form-group">
              <label for="exampleInputabout">About section</label>
              <input type="hidden" name="sno" id="ids">
              <input type="text" name="uptabout"class="form-control" id="uptabout" >
            </div>
            <div class="form-group"> 
                <label for="exampleInputabout">General Instruction</label>
                <textarea type="textarea" name="uptinstruction" id="uptinstruction" class="form-control"></textarea> 
            </div>
           
            <button type="submit" class="btn btn-primary" name="update">Submit</button>
          <?php echo form_close();?>
        </div>

      </div>
    </div>
  </div>


<!-- end the modal -->
    </section>    

     <script type="text/javascript">
        $('.delete').click(function(e){
    debugger;
    var ids=$(this).closest('tr').find('.delete').val();
    if(confirm('Are you Sure !')){
    $.ajax({
            type:'GET',
            url:"<?PHP echo base_url('home/delete_about'); ?>",
            data: {ids:ids},
            success: function(result){
                // alert(result);
                // console.log(result);
                location.reload();
                },
                error: function(){
                alert("error");
                }
    });
}
return false;
})

        $('.updt').click(function(e){
            debugger;
        var id = $(this).data('pid');
        var about = $(this).data('vision');
        var instruction = $(this).data('instruction');
        // debugger;
        $('#ids').val(id);
        $('#uptabout').val(about);
        $('#uptinstruction').val(instruction);
        $.ajax({
                url:"<?php echo base_url('home/update_about') ;?>",
                method:"POST",
                data:{pid:id},
                success:function(data){
                    var setdata = JSON.parse(data);
                    //console.log(setdata);
                    $('#about').val(uptabout);
                    
                }
            });




    });
</script>
<script>
	
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