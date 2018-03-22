<?php 
	include 'pagination.php';
?>

<script src="http://code.jquery.com/jquery-latest.js"></script> 

<script>
	$(document).ready(function(){
		var category = "<?php echo $category; ?>";
		if (category != ""){		
			$('#category').val(category).prop('selected', true);
		}
		filter();
	});
</script>	
<!-- filters section -->

<column class="bothColumns" cols="2">
	<div class="filtersList">
		<!-- filters header -->
		<div class="filtersListHeader">
			<row centered>
				Filters
			</row>
		</div><!-- filters listheader end-->
		<div class="filterOptions">
			<form method="post" id="filters">
				<!-- option start -->
				<div>
					<label>category</label>
					<select id="category" class="select width-12" name='category'>
						<option>Choose category</option>
						<option value='Sport'>Sport</option>
						<option value='History'>History</option>
						<option value='Architecture'>Architecture</option>
                        <option value='Adventure'>Adventure</option>
                        <option value='Scenic'>Scenic</option>
					</select>
				</div>	
				<!-- option divider -->
				<div class="linedividor"></div>
				<!-- ./option end -->
				<!-- option start -->
				<div>
					<label>Region</label>
					<select id="region" class="select width-12" name='region'>
						<option>Choose Region</option>
						<option value='LEI'>Leinster</option>
						<option value='MUN'>Munster</option>
						<option value='ULS'>Ulster</option>
						<option value='CON'>Connacht</option>
					</select>
				</div>		
				<!-- option divider -->
				<div class="linedividor"></div>
				<!-- ./option end -->
				<!-- apply button -->
				<input type='button' onclick='filter();' id='apply' value='Apply' class="applyButton width-12">
                <!-- link so user can create tour_category -->
                <input type='button' onclick="window.location.href= 'create_tour_category.php'" id='create' value="Create" class="btn width-12">

			</form>
		</div><!-- ./filter options end -->
	</div><!-- ./filters list end-->
</column> <!-- ./ filters end -->

<script>
	var jsonData;
	function filter(){		
		var game = document.forms['filters'].elements['tour'].value;
		var region = document.forms['filters'].elements['region'].value;
		filterResults(game, region);
	}

	function filterResults(tour, region){
		$.ajax({
			type: "POST",
			url: "tour_categorys/applyfilter.php",
			dataType : 'json',
			cache: false,
			data: {Game: game, Region: region},
			success: function(records){
				jsonData = records;
				changePage(1);			
			},
			error: function(jqXHR, textStatus, errorThrown) {
			
			}
		});
	}
	
</script>	