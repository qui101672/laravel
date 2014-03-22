<?php

use Mockery as m;
use Way\Tests\Factory;

class ThanhPhanThamGiaTest extends TestCase {

	public function __construct()
	{
		$this->mock = m::mock('Eloquent', 'Thanh_phan_tham_gium');
		$this->collection = m::mock('Illuminate\Database\Eloquent\Collection')->shouldDeferMissing();
	}

	public function setUp()
	{
		parent::setUp();

		$this->attributes = Factory::thanh_phan_tham_gium(['id' => 1]);
		$this->app->instance('Thanh_phan_tham_gium', $this->mock);
	}

	public function tearDown()
	{
		m::close();
	}

	public function testIndex()
	{
		$this->mock->shouldReceive('all')->once()->andReturn($this->collection);
		$this->call('GET', 'thanh_phan_tham_gia');

		$this->assertViewHas('thanh_phan_tham_gia');
	}

	public function testCreate()
	{
		$this->call('GET', 'thanh_phan_tham_gia/create');

		$this->assertResponseOk();
	}

	public function testStore()
	{
		$this->mock->shouldReceive('create')->once();
		$this->validate(true);
		$this->call('POST', 'thanh_phan_tham_gia');

		$this->assertRedirectedToRoute('thanh_phan_tham_gia.index');
	}

	public function testStoreFails()
	{
		$this->mock->shouldReceive('create')->once();
		$this->validate(false);
		$this->call('POST', 'thanh_phan_tham_gia');

		$this->assertRedirectedToRoute('thanh_phan_tham_gia.create');
		$this->assertSessionHasErrors();
		$this->assertSessionHas('message');
	}

	public function testShow()
	{
		$this->mock->shouldReceive('findOrFail')
				   ->with(1)
				   ->once()
				   ->andReturn($this->attributes);

		$this->call('GET', 'thanh_phan_tham_gia/1');

		$this->assertViewHas('thanh_phan_tham_gium');
	}

	public function testEdit()
	{
		$this->collection->id = 1;
		$this->mock->shouldReceive('find')
				   ->with(1)
				   ->once()
				   ->andReturn($this->collection);

		$this->call('GET', 'thanh_phan_tham_gia/1/edit');

		$this->assertViewHas('thanh_phan_tham_gium');
	}

	public function testUpdate()
	{
		$this->mock->shouldReceive('find')
				   ->with(1)
				   ->andReturn(m::mock(['update' => true]));

		$this->validate(true);
		$this->call('PATCH', 'thanh_phan_tham_gia/1');

		$this->assertRedirectedTo('thanh_phan_tham_gia/1');
	}

	public function testUpdateFails()
	{
		$this->mock->shouldReceive('find')->with(1)->andReturn(m::mock(['update' => true]));
		$this->validate(false);
		$this->call('PATCH', 'thanh_phan_tham_gia/1');

		$this->assertRedirectedTo('thanh_phan_tham_gia/1/edit');
		$this->assertSessionHasErrors();
		$this->assertSessionHas('message');
	}

	public function testDestroy()
	{
		$this->mock->shouldReceive('find')->with(1)->andReturn(m::mock(['delete' => true]));

		$this->call('DELETE', 'thanh_phan_tham_gia/1');
	}

	protected function validate($bool)
	{
		Validator::shouldReceive('make')
				->once()
				->andReturn(m::mock(['passes' => $bool]));
	}
}
