
function addRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	if(rowCount < 20){							// limit the user from creating fields more than your limits
		var row = table.insertRow(rowCount);
		var colCount = table.rows[0].cells.length;
		for(var i=0; i<colCount; i++) {
			var newcell = row.insertCell(i);
			newcell.innerHTML = table.rows[0].cells[i].innerHTML;
		}
	}else{
		 alert("Maximum 20 params can be added");
			   
	}
}


function deleteRow() {
	var $tbody = $("#dataTable tbody")
	$("#dataTable").on('click','.btnDelete',function(){

		var $last = $tbody.find('tr:last');
		if($last.is(':first-child')){
			alert('Last row can\'t be deleted, please clear fields if you want to remove it.' );
		}else {
			$(this).closest('tr').remove();
		}
	});
}