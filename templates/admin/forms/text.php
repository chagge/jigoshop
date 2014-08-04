<?php
/**
 * @var $id string Field ID.
 * @var $label string Field label.
 * @var $name string Field name.
 * @var $classes array List of classes to add to the field.
 * @var $placeholder string Field's placeholder.
 * @var $value mixed Current value.
 * @var $tip string Tip to show to the user.
 * @var $description string Field description.
 */
?>
<div class="form-group <?php echo $id; ?>_field">
	<div>
		<input type="text" id="<?php echo $id; ?>" name="<?php echo $name; ?>"
		       class="form-control <?php echo join(' ', $classes); ?>"
		       placeholder="<?php echo $placeholder; ?>" value="<?php echo $value; ?>" />
		<?php if(!empty($description)): ?>
			<span class="help-block"><?php echo $description; ?></span>
		<?php endif; ?>
		<?php if(!empty($tip)): ?>
			<a href="#" data-toggle="tooltip" class="badge" data-placement="left" title="<?php echo $tip; ?>">?</a>
		<?php endif; ?>
	</div>
</div>
