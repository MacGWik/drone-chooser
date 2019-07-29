		<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-10">
                    <h1 class="page-header">Tipe</h1>
                </div>
                <div class="col-lg-2" style="padding-left: 0px; padding-top: 0px; text-align: right;">
                    <h1 class="page-header">
                        <a href="<?= base_url() ?>tipe/create" class="btn btn-primary">Create Tipe</a>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <span id="SpanTbl">
				</span>
            </div>
            <!-- /.row -->
        </div>

<script>
	var dataTbl;
	$(document).ready(function(){
		CreatedataTbl();
	})

	function CreatedataTbl(){ //alert(jmlhari);
		$("#dataTbl_wrapper").remove();
		var tr = $('<table id="dataTbl" class="order-column hover"></table>')
			.append($("<thead></thead>")
			.append($("<tr></tr>")
			.append($("<th ></th>").append("ID"))
			.append($("<th ></th>").append("Tipe Nama"))
			.append($("<th ></th>").append("Aksi"))
			))
			.append($("<tbody></tbody>"));
		$("#SpanTbl").append(
				tr
		);
		dataTbl = $('#dataTbl').dataTable({
	    	'bPaginate':false,
	    	// 'ajax': "data.json",
			"aoColumns": [
	            { "sWidth": "5%"},
	            { "sWidth": "5%" },
	            { "sWidth": "10%" },
	        ],
    		"aaSorting": [[ 0, "desc" ]],
	        "bProcessing": true,
	        "bServerSide": true,
	        "sAjaxSource": site_url+'datasource/tipe',
	        "aoColumnDefs": [
		        {
		        	"bSortable":false, "aTargets":[]
		        }
	        ],
	        "pagingType": "full_numbers",
	        "dom": '<"top">rt<"bottom"p><"clear">',
	        "fnDrawCallback":function(oSettings){
	        	resetCallBack();
	        }
		});
	}

	function resetCallBack()
	{
		$(".btnDelete").click(function(e){
			var data = $(this).attr('data');
			$.displayConfirm("Are you sure to delete this data?",function(){
				// $(".loading").show();
				$.post("<?php echo site_url('tipe/delete'); ?>",
				{ 
					id:data 
				},
					function(data){
						dataTbl.fnStandingRedraw();
						// $(".loading").hide();
				},
				"json",
				);
			});
		});

		$('#exampleModal').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget);
			var img = button.data('img');
			var id = button.data('id');
			var modal = $(this);
			modal.find('.modal-title').text('Tipe ' + id);
			
			$("#img-resi").attr("src",img);
		})
	}
</script>


<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close"  data-dismiss="modal" id="tutupModal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">New message</h4>
      </div>
      <div class="modal-body">
        <form>
       		<div class="form-group">
            	<img src="" id="img-resi" style="max-width: 100%;">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div> -->