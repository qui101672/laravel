<?php

use Mockery as m;
use Way\Tests\Factory;

class BanToChucsTest extends TestCase {

	public function __construct()
	{
		$this->mock = m::mock('Eloquent', 'Ban_to_chuc');
		$this->collection = m::mock('Illuminate\Database\Eloquent\Collection')->shouldDeferMissing();
	}

	public function setUp()
	{
		parent::setUp();

		$this->attributes = Factory::ban_to_chuc(['id' => 1]);
		$this->app->instance('Ban_to_chuc', $this->mock);
	}

	public function tearDown()
	{
		m::close();
	}

	public function testIndex()
	{
		$this->mock->shouldReceive('all')->once()->andReturn($this->collection);
		$this->call('GET', 'ban_to_chucs');

		$this->assertViewHas('ban_to_chucs');
	}

	public function testCreate()
	{
		$this->call('GET', 'ban_to_chucs/create');

		$this->assertResponseOk();
	}

	public function testStore()
	{
		$this->mock->shouldReceive('create')->once();
		$this->validate(true);
		$this->call('POST', 'ban_to_chucs');

		$this->assertRedirectedToRoute('ban_to_chucs.index');
	}

	public function testStoreFails()
	{
		$this->mock->shouldReceive('create')->once();
		$this->validate(false);
		$this->call('POST', 'ban_to_chucs');

		$this->assertRedirectedToRoute('ban_to_chucs.create');
		$this->assertSessionHasErrors();
		$this->assertSessionHas('message');
	}

	public function testShow()
	{
		$this->mock->shouldReceive('findOrFail')
				   ->with(1)
				   ->once()
				   ->andReturn($this->attributes);

		$this->call('GET', 'ban_to_chucs/1');

		$this->assertViewHas('ban_to_chuc');
	}

	public function testEdit()
	{
		$this->collection->id = 1;
		$this->mock->shouldReceive('find')
				   ->with(1)
				   ->once()
				   ->andReturn($this->collection);

		$this->call('GET', 'ban_to_chucs/1/edit');

		$this->assertViewHas('ban_to_chuc');
	}

	public function testUpdate()
	{
		$this->mock->shouldReceive('find')
				   ->with(1)
				   ->andReturn(m::mock(['update' => true]));

		$this->validate(true);
		$this->call('PATCH', 'ban_to_chucs/1');

		$this->assertRedirectedTo('ban_to_chucs/1');
	}

	public function testUpdateFails()
	{
		$this->mock->shouldReceive('find')->with(1)->andReturn(m::mock(['update' => true]));
		$this->validate(false);
		$this->call('PATCH', 'ban_to_chucs/1');

		$this->assertRedirectedTo('ban_to_chucs/1/edit');
		$this->assertSessionHasErrors();
		$this->assertSessionHas('message');
	}

	public function testDestroy()
	{
		$this->mock->shouldReceive('find')->with(1)->andReturn(m::mock(['delete' => true]));

		$this->call('DELETE', 'ban_to_chucs/1');
	}

	protected function validate($bool)
	{
		Validator::shouldReceive('make')
				->once()
				->andReturn(m::mock(['passes' => $bool]));
	}
}
