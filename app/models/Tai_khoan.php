<?php
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
class Tai_khoan extends Eloquent implements UserInterface, RemindableInterface{
	protected $guarded = array();

	public static $rules = array(
		'username' => 'required',
		'password' => 'required',
		'PhanQuyen_Id' => 'required',
		'doi_tuong' => ''
	);
	protected $table = 'tai_khoans';
	protected $hidden = array('password');
	protected $fillable = array('username','password','PhanQuyen_Id','doi_tuong');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}
}
