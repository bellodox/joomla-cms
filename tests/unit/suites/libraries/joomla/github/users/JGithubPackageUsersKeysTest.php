<?php
/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-01-31 at 11:16:03.
 */
class JGithubPackageUsersKeysTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var    JRegistry  Options for the GitHub object.
	 * @since  11.4
	 */
	protected $options;

	/**
	 * @var    JGithubHttp  Mock client object.
	 * @since  11.4
	 */
	protected $client;

	/**
	 * @var    JHttpResponse  Mock response object.
	 * @since  12.3
	 */
	protected $response;

	/**
     * @var JGithubPackageUsersKeys
     */
    protected $object;

	/**
	 * @var    string  Sample JSON string.
	 * @since  12.3
	 */
	protected $sampleString = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

	/**
	 * @var    string  Sample JSON error message.
	 * @since  12.3
	 */
	protected $errorString = '{"message": "Generic Error"}';

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 *
	 * @since   ¿
	 *
	 * @return  void
	 */
	protected function setUp()
	{
		parent::setUp();

		$this->options  = new JRegistry;
		$this->client   = $this->getMock('JGithubHttp', array('get', 'post', 'delete', 'patch', 'put'));
		$this->response = $this->getMock('JHttpResponse');

		$this->object = new JGithubPackageUsersKeys($this->options, $this->client);
	}

    /**
     * @covers JGithubPackageUsersKeys::getListUser
     */
    public function testGetListUser()
    {
	    $this->response->code = 200;
	    $this->response->body = $this->sampleString;

	    $this->client->expects($this->once())
		    ->method('get')
		    ->with('/users/joomla/keys')
		    ->will($this->returnValue($this->response));

	    $this->assertThat(
		    $this->object->getListUser('joomla'),
		    $this->equalTo(json_decode($this->sampleString))
	    );
    }

    /**
     * @covers JGithubPackageUsersKeys::getList
     */
    public function testGetList()
    {
	    $this->response->code = 200;
	    $this->response->body = $this->sampleString;

	    $this->client->expects($this->once())
		    ->method('get')
		    ->with('/users/keys')
		    ->will($this->returnValue($this->response));

	    $this->assertThat(
		    $this->object->getList(),
		    $this->equalTo(json_decode($this->sampleString))
	    );
    }

    /**
     * @covers JGithubPackageUsersKeys::get
     */
    public function testGet()
    {
	    $this->response->code = 200;
	    $this->response->body = $this->sampleString;

	    $this->client->expects($this->once())
		    ->method('get')
		    ->with('/users/keys/1')
		    ->will($this->returnValue($this->response));

	    $this->assertThat(
		    $this->object->get(1),
		    $this->equalTo(json_decode($this->sampleString))
	    );
    }

    /**
     * @covers JGithubPackageUsersKeys::create
     */
    public function testCreate()
    {
	    $this->response->code = 201;
	    $this->response->body = $this->sampleString;

	    $this->client->expects($this->once())
		    ->method('post')
		    ->with('/users/keys')
		    ->will($this->returnValue($this->response));

	    $this->assertThat(
		    $this->object->create('email@example.com', '12345'),
		    $this->equalTo(json_decode($this->sampleString))
	    );
    }

    /**
     * @covers JGithubPackageUsersKeys::edit
     */
    public function testEdit()
    {
	    $this->response->code = 200;
	    $this->response->body = $this->sampleString;

	    $this->client->expects($this->once())
		    ->method('patch')
		    ->with('/users/keys/1')
		    ->will($this->returnValue($this->response));

	    $this->assertThat(
		    $this->object->edit(1, 'email@example.com', '12345'),
		    $this->equalTo(json_decode($this->sampleString))
	    );
    }

    /**
     * @covers JGithubPackageUsersKeys::delete
     */
    public function testDelete()
    {
	    $this->response->code = 204;
	    $this->response->body = $this->sampleString;

	    $this->client->expects($this->once())
		    ->method('delete')
		    ->with('/users/keys/1')
		    ->will($this->returnValue($this->response));

	    $this->assertThat(
		    $this->object->delete(1),
		    $this->equalTo(json_decode($this->sampleString))
	    );
    }
}