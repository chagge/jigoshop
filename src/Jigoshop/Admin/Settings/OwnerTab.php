<?php

namespace Jigoshop\Admin\Settings;

use Jigoshop\Core\Options;

/**
 * Owner tab definition.
 *
 * @package Jigoshop\Admin\Settings
 */
class OwnerTab implements TabInterface
{
	const SLUG = 'owner';

	/** @var array */
	private $options;

	public function __construct(Options $options)
	{
		$this->options = $options->get(self::SLUG);
	}

	/**
	 * @return string Title of the tab.
	 */
	public function getTitle()
	{
		return __('Owner', 'jigoshop');
	}

	/**
	 * @return string Tab slug.
	 */
	public function getSlug()
	{
		return self::SLUG;
	}

	/**
	 * @return array List of items to display.
	 */
	public function getFields()
	{
		return array(
			array(
				'id' => 'name',
				'name' => '[name]',
				'title' => 'Owner name',
				'type' => 'text',
				'description' => 'Owner name',
				'value' => $this->options['name'],
			)
		);
	}

	/**
	 * Validate and sanitize input values.
	 *
	 * @param array $settings Input fields.
	 * @return array Sanitized and validated output.
	 * @throws ValidationException When some items are not valid.
	 */
	public function validate(array $settings)
	{
		// TODO: Implement validate() method.
		return $settings;
	}
}