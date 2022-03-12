
$(document).on('click', '#btn-add', function (e) {
	var data = $("#user_form").serialize();
	var data2 = $("#user_form")[0].slider_image.value.split('\\')[2];
	console.log(data2);
	$.ajax({
		data: data + "&slider_image=" + data2,
		type: "post",
		url: "slider.save.php",
		success: function (dataResult) {
			var dataResult = JSON.parse(dataResult);
			if (dataResult.statusCode == 200) {
				$('#addServiceModal').modal('hide');
				alert('Data added successfully !');
				location.reload();
			}
			else if (dataResult.statusCode == 201) {
				alert(dataResult);
			}
		}
	});
});
$(document).on('click', '.update', function (e) {
	var slider_id = $(this).attr("data-id");
	var slider_name = $(this).attr("data-name");
	var slider_image = $(this).attr("data-image");
	$('#id_u').val(slider_id);
	$('#name_u').val(slider_name);
	$('#image_u').val(slider_image);
});

$(document).on('click', '#update', function (e) {
	var data = $("#update_form").serialize();
    console.log(data);
	$.ajax({
		data:data,
		type: "post",
		url: "slider.save.php",
		success: function (dataResult) {
			var dataResult = JSON.parse(dataResult);
			if (dataResult.statusCode == 200) {
				$('#editServiceModal').modal('hide');
				alert('Data updated successfully !');
				location.reload();
			}
			else if (dataResult.statusCode == 201) {
				alert(dataResult);
			}
		}
	});
});
$(document).on("click", ".delete", function () {
	var slider_id = $(this).attr("data-id");
	$('#id_d').val(slider_id);

});
$(document).on("click", "#delete", function () {
	$.ajax({
		url: "slider.save.php",
		type: "POST",
		cache: false,
		data: {
			type: 3,
			sno: $("#id_d").val()
		},
		success: function (dataResult) {
			$('#deleteServiceModal').modal('hide');
			$("#" + dataResult).remove();

		}
	});
});
$(document).on("click", "#delete_multiple", function () {
	var user = [];
	$(".user_checkbox:checked").each(function () {
		user.push($(this).data('user-id'));
	});
	if (user.length <= 0) {
		alert("Please select records.");
	}
	else {
		WRN_PROFILE_DELETE = "Are you sure you want to delete" + (user.length > 1 ? "these" : "this") + "row?";
		var checked = confirm(WRN_PROFILE_DELETE);
		if (checked == true) {
			var selected_values = user.join(",");
			console.log(selected_values);
			$.ajax({
				type: "POST",
				url: "slider.save.php",
				cache: false,
				data: {
					type: 4,
					sno: selected_values
				},
				success: function (response) {
					var snos = response.split(",");
					for (var i = 0; i < snos.length; i++) {
						$("#" + snos[i]).remove();
					}
				}
			});
		}
	}
});
$(document).ready(function () {
	$('[data-toggle="tooltip"]').tooltip();
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function () {
		if (this.checked) {
			checkbox.each(function () {
				this.checked = true;
			});
		} else {
			checkbox.each(function () {
				this.checked = false;
			});
		}
	});
	checkbox.click(function () {
		if (!this.checked) {
			$("#selectAll").prop("checked", false);
		}
	});
});
