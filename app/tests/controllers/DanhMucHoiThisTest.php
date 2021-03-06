<?php

use Mockery as m;
use Way\Tests\Factory;

class DanhMucHoiThisTest extends TestCase {

	public function __construct()
	{
		$this->mock = m::mock('Eloquent', 'Danh_muc_hoi_thi');
		$this->collection = m::mock('Illuminate\Database\Eloquent\Collection')->shouldDeferMissing();
	}

	public function setUp()
	{
		parent::setUp();

		$this->attributes = Factory::danh_muc_hoi_thi(['id' => 1]);
		$this->app->instance('Danh_muc_hoi_thi', $this->mock);
	}

	public function tearDown()
	{
		m::close();
	}

	public function testIndex()
	{
		$this->mock->shouldReceive('all')->once()->andReturn($this->collection);
		$this->call('GET', 'danh_muc_hoi_this');

		$this->assertViewHas('danh_muc_hoi_this');
	}

	public function testCreate()
	{
		$this->call('GET', 'danh_muc_hoi_this/create');

		$this->assertResponseOk();
	}

	public function testStore()
	{
		$this->mock->shouldReceive('create')->once();
		$this->validate(true);
		$this->call('POST', 'danh_muc_hoi_this');

		$this->assertRedirectedToRoute('danh_muc_hoi_this.index');
	}

	public function testStoreFails()
	{
		$this->mock->shouldReceive('create')->once();
		$this->validate(false);
		$this->call('POST', 'danh_muc_hoi_this');

		$this->assertRedirectedToRoute('danh_muc_hoi_this.create');
		$this->assertSessionHasErrors();
		$this->assertSessionHas('message');
	}

	public function testShow()
	{
		$this->mock->shouldReceive('findOrFail')
				   ->with(1)
				   ->once()
				   ->andReturn($this->attributes);

		$this->call('GET', 'danh_muc_hoi_this/1');

		$this->assertViewHas('danh_muc_hoi_thi');
	}

	public function testEdit()
	{
		$this->collection->id = 1;
		$this->mock->shouldReceive('find')
				   ->with(1)
				   ->once()
				   ->andReturn($this->collection);

		$this->call('GET', 'danh_muc_hoi_this/1/edit');

		$this->assertViewHas('danh_muc_hoi_thi');
	}

	public function testUpdate()
	{
		$this->mock->shouldReceive('find')
				   ->with(1)
				   ->andReturn(m::mock(['update' => true]));

		$this->validate(true);
		$this->call('PATCH', 'danh_muc_hoi_this/1');

		$this->assertRedirectedTo('danh_muc_hoi_this/1');
	}

	public function testUpdateFails()
	{
		$this->mock->shouldReceive('find')->with(1)->andReturn(m::mock(['update' => true]));
		$this->validate(false);
		$this->call('PATCH', 'danh_muc_hoi_this/1');

		$this->assertRedirectedTo('danh_muc_hoi_this/1/edit');
		$this->assertSessionHasErrors();
		$this->assertSessionHas('message');
	}

	public function testDestroy()
	{
		$this->mock->shouldReceive('find')->with(1)->andReturn(m::mock(['delete' => true]));

		$this->call('DELETE', 'danh_muc_hoi_this/1');
	}

	protected function validate($bool)
	{
		Validator::shouldReceive('make')
				->once()
				->andReturn(m::mock(['passes' => $bool]));
	}
}
