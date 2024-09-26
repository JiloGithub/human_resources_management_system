$(document).ready(function () {

	// **************************** PERSONAL INFO ****************************
	$('#btn-personal-info').click(function () {
		let InputHasValue = true;

		$('#personal-info input').each(function () {
			if ($.trim($(this).val()).length == 0 && !$(this).data('optional')) {
				let Label = $(this).siblings('label').text().replace(":", "");
				$(this).addClass('has-error');
				$(this).attr('placeholder', `${Label} is required`);
				InputHasValue = false;

			} else {
				$(this).removeClass('has-error');
				$(this).removeAttr('placeholder');

			}
		});

		if (InputHasValue) {
			$('#personal-info-tab').removeClass('active');
			$('#personal-info-tab').removeAttr('href data-bs-toggle');
			$('#personal-info').removeClass('active');

			$('#family-background-tab').addClass('active');
			$('#family-background-tab').removeAttr('href data-bs-toggle');
			$('#family-background').addClass('active show');
		} else {
			return false;
		}

	});



	// **************************** FAMILY BACKGROUND ****************************
	$('#btn-family-bg-previous').click(function () {

		$('#family-background-tab').removeClass('active');
		$('#family-background-tab').removeAttr('href data-bs-toggle');
		$('#family-background').removeClass('active show');

		$('#personal-info-tab').addClass('active');
		$('#personal-info-tab').removeAttr('href data-bs-toggle');
		$('#personal-info').addClass('active show');


	});

	$('#btn-family-bg-next').click(function () {
		let InputHasValue = true;

		$('#family-background input').each(function () {
			if ($.trim($(this).val()).length == 0 && !$(this).data('optional')) {
				let Label = $(this).siblings('label').text().replace(":", "");
				$(this).addClass('has-error');
				$(this).attr('placeholder', `${Label} is required`);
				InputHasValue = false;

			} else {
				$(this).removeClass('has-error');
				$(this).removeAttr('placeholder');

			}
		});
		$('#family-background textarea').each(function () {
			if ($.trim($(this).val()).length == 0 && !$(this).data('optional')) {
				let Label = $(this).siblings('label').text().replace(":", "");
				$(this).addClass('has-error');
				$(this).attr('placeholder', `${Label} is required`);
				InputHasValue = false;

			} else {
				$(this).removeClass('has-error');
				$(this).removeAttr('placeholder');

			}
		});

		if (InputHasValue) {
			$('#family-background-tab').removeClass('active');
			$('#family-background-tab').removeAttr('href data-bs-toggle');
			$('#family-background').removeClass('active show');

			$('#educational-background-tab').addClass('active');
			$('#educational-background-tab').removeAttr('href data-bs-toggle');
			$('#educational-background').addClass('active show');
		} else {
			return false;
		}

	});

	// **************************** EDUCATIONAL BACKGROUND ****************************
	$('#btn-educational-bg-previous').click(function () {

		$('#educational-background-tab').removeClass('active');
		$('#educational-background-tab').removeAttr('href data-bs-toggle');
		$('#educational-background').removeClass('active show');

		$('#family-background-tab').addClass('active');
		$('#family-background-tab').removeAttr('href data-bs-toggle');
		$('#family-background').addClass('active show');

	});

	$('#btn-educational-bg-next').click(function () {
		let InputHasValue = true;

		$('#educational-background input').each(function () {
			if ($.trim($(this).val()).length == 0 && !$(this).data('optional')) {
				let Label = $(this).siblings('label').text().replace(":", "");
				$(this).addClass('has-error');
				$(this).attr('placeholder', `${Label} is required`);
				InputHasValue = false;

			} else {
				$(this).removeClass('has-error');
				$(this).removeAttr('placeholder');

			}
		});
		$('#educational-background textarea').each(function () {
			if ($.trim($(this).val()).length == 0 && !$(this).data('optional')) {
				let Label = $(this).siblings('label').text().replace(":", "");
				$(this).addClass('has-error');
				$(this).attr('placeholder', `${Label} is required`);
				InputHasValue = false;

			} else {
				$(this).removeClass('has-error');
				$(this).removeAttr('placeholder');

			}
		});

		if (InputHasValue) {
			return true;
			// $('#educational-background-tab').removeClass('active');
			// $('#educational-background-tab').removeAttr('href data-bs-toggle');
			// $('#educational-background').removeClass('active show');

			// $('#cse_elegibility-tab').addClass('active');
			// $('#cse_elegibility-tab').removeAttr('href data-bs-toggle');
			// $('#cse_elegibility').addClass('active show');
		} else {
			return false;
		}

	});

	// **************************** CSE ELEGIBILITY ****************************
	$('#btn-cse-elegibility-previous').click(function () {

		$('#cse_elegibility-tab').removeClass('active');
		$('#cse_elegibility-tab').removeAttr('href data-bs-toggle');
		$('#cse_elegibility').removeClass('active show');

		$('#educational-background-tab').addClass('active');
		$('#educational-background-tab').removeAttr('href data-bs-toggle');
		$('#educational-background').addClass('active show');

	});

	$('#btn-cse-elegibility-next').click(function () {
		let InputHasValue = true;

		$('#educational-background input').each(function () {
			if ($.trim($(this).val()).length == 0 && !$(this).data('optional')) {
				let Label = $(this).siblings('label').text().replace(":", "");
				$(this).addClass('has-error');
				$(this).attr('placeholder', `${Label} is required`);
				InputHasValue = false;

			} else {
				$(this).removeClass('has-error');
				$(this).removeAttr('placeholder');

			}
		});


		if (InputHasValue) {
			$('#educational-background-tab').removeClass('active');
			$('#educational-background-tab').removeAttr('href data-bs-toggle');
			$('#educational-background').removeClass('active show');

			$('#cse_elegibility-tab').addClass('active');
			$('#cse_elegibility-tab').removeAttr('href data-bs-toggle');
			$('#cse_elegibility').addClass('active show');
		} else {
			return false;
		}

	});
});