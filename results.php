<script src="assets/js/jquery-3.5.1.js"></script>

<?php    
include("functions.php");

$sql = "SELECT first_name, last_name, email, phone, comments FROM contact_info ORDER BY auto_id DESC";
$result = run_query($sql);

echo '<div class="slides">';
echo '<div class="slide" id="2">';
echo '<div class="content second-content">';
echo '<div class="container-fluid">';
echo '<h2>Contact Submissions</h2>';
echo '<div class="col-md-12">';
echo '<table class="table table-bordered">';
echo '<thead>';
echo '<tr>';
echo '<th><p>First Name</p></th>';
echo '<th><p>Last Name</p></th>';
echo '<th><p>Email</p></th>';
echo '<th><p>Phone</p></th>';
echo '<th><p>Comments</p></th>';
echo '</tr>';
echo '</thead>';
echo '<tbody id="results">';
echo '</tbody>';
echo '</table>';
echo '</div>'; 
echo '</div>'; 
echo '</div>'; 
echo '</div>'; 
echo '</div>';
?>
?>

<script>
	function refresh_data(){
		$.ajax({
			type: 'post',
			url: 'https://ec2-3-87-50-206.compute-1.amazonaws.com/hw19/query_contact.php',
			success: function(data){
				$('#results').html(data);
				
			}
		});
	}
	setInterval(function(){refresh_data();},500);

</script>
                  