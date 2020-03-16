<div class="row">
	<form method="<?php if($this->id): ?>put<?php else: ?>post<?php endif; ?>" action="api/address/" class="col-12">

		<div class="form-group">
			<label for="firstname">Vorname:</label>
			<input type="text" name="firstname" class="form-control" id="firstname" value="<?php echo $this->firstname; ?>" required>
		</div>
		<div class="form-group">
			<label for="lastname">Nachname:</label>
			<input type="text" name="lastname" class="form-control" id="lastname" value="<?php echo $this->lastname; ?>" required>
		</div>
		<div class="form-group">
			<label for="street">Straße</label>
			<input type="text" class="form-control" name="street" id="street" value="<?php echo $this->street; ?>" required>
		</div>
		<div class="form-group">
			<label for="zip">PLZ:</label>
			<input type="text" name="zip" class="form-control" id="zip" value="<?php echo $this->zip; ?>" required>
		</div>
		<div class="form-group">
			<label for="city">Ort:</label>
			<input type="text" name="city" class="form-control" id="city" value="<?php echo $this->city; ?>" required>
		</div>
		<?php if($this->id): ?>
			<input type="hidden" name="id" value="<?php echo $this->id; ?>">
		<?php endif; ?>
	</form>
</div>
<script type="text/javascript">

	var editModal = $('#editModal');

	editModal.find('form').unbind('submit');

	editModal.find('form').bind('submit', function(e, that) {

		e.preventDefault();

		editModal.find('.btn-primary').prop('disabled', true);

		if(typeof that === 'undefined') {
			that = editModal.find('.btn-primary').get(0);
		}

		var requiredFields = ['#firstname', '#lastname', '#street', '#zip', '#city'];

        if(this.checkValidity() === false) {
            e.preventDefault();
            e.stopPropagation();

            jQuery(this).addClass('was-validated');

            editModal.find('.btn-primary').prop('disabled', false);

        } else {
            $.ajax({
                'url': $(this).attr('action'),
                'method': $(this).attr('method'),
                'data': $(this).serialize(),
                'dataType': "json",
                'success': function (receivedData) {

                    if(receivedData.result)
                    {
                        window.setTimeout(function() {
                            location.reload();
                        }, 500);

                    }
                    else
                    {
                        editModal.find('.form-group').removeClass('has-error');

                        $.each(receivedData.data.errorFields, function(key, value) {
                            $('#'+key).addClass('is-invalid');
                        });
                    }

                    editModal.find('.btn-primary').prop('disabled', false);
                }
            });
        }




	});

</script>