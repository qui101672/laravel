<?php

use Mockery as m;
use Way\Tests\Factory;

class PhieuDangKiesTest extends TestCase {

	public function __construct()
	{
		$this->mock = m::mock('Eloquent', 'Phieu_dang_ky');
		$this->collection = m::mock('Illuminate\Database\Eloquent\Collection')->shouldDeferMissing();
	}

	public function setUp()
	{
		parent::setUp();

		$this->attributes = Factory::phieu_dang_ky(['id' => 1]);
		$this->app->instance('Phieu_dang_ky', $this->mock);
	}

	public function tearDown()
	{
		m::close();
	}

	public function testIndex()
	{
		$this->mock->shouldReceive('all')->once()->andReturn($this->collection);
		$this->call('GET', 'phieu_dang_kies');

		$this->assertViewHas('phieu_dang_kies');
	}

	public function testCreate()
	{
		$this->call('GET', 'phieu_dang_kies/create');

		$this->assertResponseOk();
	}

	public function testStore()
	{
		$this->mock->shouldReceive('create')->once();
		$this->validate(true);
		$this->call('POST', 'phieu_dang_kies');

		$this->assertRedirectedToRoute('phieu_dang_kies.index');
	}

	public function testStoreFails()
	{
		$this->mock->shouldReceive('create')->once();
		$this->validate(false);
		$this->call('POST', 'phieu_dang_kies');

		$this->assertRedirectedToRoute('phieu_dang_kies.create');
		$this->assertSessionHasErrors();
		$this->assertSessionHas('message');
	}

	public function testShow()
	{
		$this->mock->shouldReceive('findOrFail')
				   ->with(1)
				   ->once()
				   ->andReturn($this->attributes);

		$this->call('GET', 'phieu_dang_kies/1');

		$this->assertViewHas('phieu_dang_ky');
	}

	public function testEdit()
	{
		$this->collection->id = 1;
		$this->mock->shouldReceive('find')
				   ->with(1)
				   ->once()
				   ->andReturn($this->collection);

		$this->call('GET', 'phieu_dang_kies/1/edit');

		$this->assertViewHas('phieu_dang_ky');
	}

	public function testUpdate()
	{
		$this->mock->shouldReceive('find')
				   ->with(1)
				   ->andReturn(m::mock(['update' => true]));

		$this->validate(true);
		$this->call('PATCH', 'phieu_dang_kies/1');

		$this->assertRedirectedTo('phieu_dang_kies/1');
	}

	public function testUpdateFails()
	{
		$this->mock->shouldReceive('find')->with(1)->andReturn(m::mock(['update' => true]));
		$this->validate(false);
		$this->call('PATCH', 'phieu_dang_kies/1');

		$this->assertRedirectedTo('phieu_dang_kies/1/edit');
		$this->assertSessionHasErrors();
		$this->assertSessionHas('message');
	}

	public function testDestroy()
	{
		$this->mock->shouldReceive('find')->with(1)->andReturn(m::mock(['delete' => true]));

		$this->call('DELETE', 'phieu_dang_kies/1');
	}

	protected function validate($bool)
	{
		Validator::shouldReceive('make')
				->once()
				->andReturn(m::mock(['passes' => $bool]));
	}
}
