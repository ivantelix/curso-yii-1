<?php /** * UserIdentity represents the data needed to identity a user. * It contains the authentication method that checks if the
provided * data can identity the user. */
class UserIdentity extends CUserIdentity {

	private $_id;

	public function authenticate(){
		
		$username = strtolower($this->username);
		$user = Usuario::model()->find('LOWER(usuario)=?',array($username));
		
		if( $user === null )
		$this->errorCode = self::ERROR_USERNAME_INVALID;
		else if(!$user->validatePassword($this->password))
		$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else{
		$this->_id=$user->id_usuario;
		$this->username=$user->usuario;
		$this->errorCode=self::ERROR_NONE;
		/*Consultamos los datos del usuario por el username ($user->username) */
		//$info_usuario = Usuario::model()->find('LOWER(usuario)=?', array($user->usuario));
		/*En las vistas tendremos disponibles foto_perfil pueden setear las que requieran */
		//$this->setState('foto_perfil',$info_usuario->foto_perfil);
		}
		return $this->errorCode==self::ERROR_NONE;
	}

	public function getId(){
		return $this->_id;
	}
	
}
