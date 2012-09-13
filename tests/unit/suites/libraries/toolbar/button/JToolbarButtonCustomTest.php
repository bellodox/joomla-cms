<?php
/**
 * @package	    Joomla.UnitTest
 * @subpackage  Toolbar
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license	    GNU General Public License version 2 or later; see LICENSE
 */

/**
 * Test class for JToolbarButtonCustom.
 * Generated by PHPUnit on 2012-08-10 at 22:18:28.
 */
class JToolbarButtonCustomTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var JToolbar
	 */
	protected $toolbar;

	/**
	 * @var JToolbarButtonCustom
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->toolbar = JToolbar::getInstance();
		$this->object  = $this->toolbar->loadButtonType('custom');
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{
	}

	/**
	 * Tests the fetchButton method
	 *
	 * @return  void
	 *
	 * @since   3.0
	 *
	 * @covers  JToolbarButtonCustom::fetchButton
	 */
	public function testFetchButton()
	{
		$this->assertThat(
			$this->object->fetchButton('Custom', '<div class="custom-button"><a href="#">My Custom Button</a></div>'),
			$this->equalTo('<div class="custom-button"><a href="#">My Custom Button</a></div>')
		);
	}

	/**
	 * Tests the fetchId method
	 *
	 * @return  void
	 *
	 * @since   3.0
	 *
	 * @covers  JToolbarButtonCustom::fetchId
	 */
	public function testFetchId()
	{
		$this->assertThat(
			$this->object->fetchId('custom', '', 'test'),
			$this->equalTo('toolbar-test')
		);
	}
}