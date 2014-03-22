<?php

use Mockery as m;
use Way\Tests\Factory;

class TietMucDuThisTest extends TestCase {

	public function __construct()
	{
		$this->mock = m::mock('Eloquent', 'Tiet_muc_du_thi');
		$this->collection = m::mock('Illuminate\Database\Eloquent\Collection')->shouldDeferMissing();
	}

	public function setUp()
	{
		parent::setUp();

		$this->attributes = Factory::tiet_muc_du_thi(['id' => 1]);
		$this->app->instance('Tiet_muc_du_thi', $this->mock);
	}

	public function tearDown()
	{
		m::close();
	}

	public function testIndex()
	{
		$this->mock->shouldReceive('all')->once()->andReturn($this->collection);
		$this->call('GET', 'tiet_muc_du_this');

		$this->assertViewHas('tiet_muc_du_this');
	}

	public function testCreate()
	{
		$this->call('GET', 'tiet_muc_du_this/create');

		$this->assertResponseOk();
	}

	public function testStore()
	{
		$this->mock->shouldReceive('create')->once();
		$this->validate(true);
		$this->call('POST', 'tiet_muc_du_this');

		$this->assertRedirectedToRoute('tiet_muc_du_this.index');
	}

	public function testStoreFails()
	{
		$this->mock->shouldReceive('create')->once();
		$this->validate(false);
		$this->call('POST', 'tiet_muc_du_this');

		$this->assertRedirectedToRoute('tiet_muc_du_this.create');
		$this->assertSessionHasErrors();
		$this->assertSessionHas('message');
	}

	public function testShow()
	{
		$this->mock->shouldReceive('findOrFail')
				   ->with(1)
				   ->once()
				   ->andReturn($this->attributes);

		$this->call('GET', 'tiet_muc_du_this/1');

		$this->assertViewHas('tiet_muc_du_thi');
	}

	public function testEdit()
	{
		$this->collection->id = 1;
		$this->mock->shouldReceive('find')
				   ->with(1)
				   ->once()
				   ->andReturn($this->collection);

		$this->call('GET', 'tiet_muc_du_this/1/edit');

		$this->assertViewHas('tiet_muc_du_thi');
	}

	public function testUpdate()
	{
		$this->mock->shouldReceive('find')
				   ->with(1)
				   ->andReturn(m::mock(['update' => true]));

		$this->validate(true);
		$this->call('PATCH', 'tiet_muc_du_this/1');

		$this->assertRedirectedTo('tiet_muc_du_this/1');
	}

	public function testUpdateFails()
	{
		$this->mock->shouldReceive('find')->with(1)->andReturn(m::mock(['update' => true]));
		$this->validate(false);
		$this->call('PATCH', 'tiet_muc_du_this/1');

		$this->assertRedirectedTo('tiet_muc_du_this/1/edit');
		$this->assertSessionHasErrors();
		$this->assertSessionHas('message');
	}

	public function testDestroy()
	{
		$this->mock->shouldReceive('find')->with(1)->andReturn(m::mock(['delete' => true]));

		$this->call('DELETE', 'tiet_muc_du_this/1');
	}

	protected function validate($bool)
	{
		Validator::shouldReceive('make')
				->once()
				->andReturn(m::mock(['passes' => $bool]));
	}
}
