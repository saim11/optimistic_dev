<ol class="breadcrumb bc-3">
<li><a href="<?php echo ADMIN_URL;?>"><i class="entypo-home"></i>Home</a></li>
<li>Menu Manager</li>
<li class="active"><strong><?php echo ($foot_type=="one") ? "Footer" : "Quick" ;?> Links</strong></li>
</ol>

 <?php if($alert=="success") { ?>
 <div class="row alertrow">
	<div class="col-md-12">
    <button class="close alertBox" data-dismiss="alert">x</button>
		<div class="alert alert-success"><strong>Success!</strong> <?php echo ($foot_type=="one") ? "Footer" : "Quick" ;?> Links updated sucessfully.</div>
	</div>
</div>
   <?php  } if($alert=="error") { ?>
  <div class="row alertrow">
	<div class="col-md-12">
     <button class="close alertBox" data-dismiss="alert">x</button>
		<div class="alert alert-danger"><strong>Error!!</strong> Error occurred while saving the record, please try again.</div>
	</div>
</div>
  <?php } ?>                    


<h2><?php echo ($foot_type=="one") ? "Footer" : "Quick" ;?> Links</h2>
<hr />



<div class="row" style="min-height:400px;">
	<div class="col-md-12">
		<?php echo $menuhtml;?>
	<br clear="all" />
    
 <form method="post" action="<?php echo base_url('manage/foot/save/'.$foot_type);?>">
    <textarea style="display:none"   id="nestable-output" name="output_data"></textarea>
    <textarea style="display:none"  id="nestable2-output" name="output_data2"></textarea>
	
 <div class="form-group">
				
				<button type="button" class="btn btn-danger" onclick="window.location='<?php echo ADMIN_URL;?>'">Cancel</button>
                <button type="submit" value="Submit" name="save_data" class="btn btn-success">Submit</button>
			</div>
    </div>
</div>
<script src="<?php echo ADMIN_ASSETS;?>js/jquery.nestable.js"></script>
<script>

$(document).ready(function()
{

    var updateOutput = function(e)
    {
        var list   = e.length ? e : $(e.target),
            output = list.data('output');
        if (window.JSON) {
            output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
        } else {
            output.val('JSON browser support required for this demo.');
        }
    };

    // activate Nestable for list 1
    $('#nestable').nestable({
        group: 1,
		maxDepth: 1
    })
    .on('change', updateOutput);
    
    // activate Nestable for list 2
    $('#nestable2').nestable({
        group: 1,
		maxDepth: 1

    })
    .on('change', updateOutput);

    // output initial serialised data
    updateOutput($('#nestable').data('output', $('#nestable-output')));
    updateOutput($('#nestable2').data('output', $('#nestable2-output')));

    $('#nestable-menu').on('click', function(e)
    {
        var target = $(e.target),
            action = target.data('action');
        if (action === 'expand-all') {
            $('.dd').nestable('expandAll');
        }
        if (action === 'collapse-all') {
            $('.dd').nestable('collapseAll');
        }
    });

    $('#nestable3').nestable();

});
</script>



