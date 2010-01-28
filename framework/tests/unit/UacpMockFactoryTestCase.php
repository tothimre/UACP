<?php
 /*Copyright 2010 Imre Toth <tothimre at gmail>

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
   */

require_once 'autoload.php';

/**
 * This class simple gives mock objects for testing purposes.
 *
 */
class UacpMockFactoryTestCase extends PHPUnit_Framework_TestCase
{

	/**
	 *
	 * @return PhpMockSessionHandler
	 */
	public function getMockSessionHandler(){
		return new MockSessionHandler();
	}

	/**
	 * This function gives back an instance of the MockAuthClass
	 *
	 * @return MockAuthClass
	 *
	 */
	public function getAuthMock()
	{
		return new MockAuthClass();
	}


	public function getTemplateLogoutMock()
	{
		$AuthMock=$this->getAuthMock();
		$params[]=$AuthMock;
		$params[]='{UsernameLabel}';
		$params[]='foourl';

		$mockTemplateLogout = $this->getMockForAbstractClass('TemplateLogout',$params);

		$mockTemplateLogout->expects($this->any())
        	->method('getUsernameLabel')
			->will($this->returnValue('fooser'));

			return $mockTemplateLogout;
	}
}

/**
 * This is really important for the tests this little hack makes the
 * php session Emulation in Phpunit possible.. of course just a little
 * piece of it, only what the framework deserves.
 *
 */
class MockSessionHandler implements PhpSessionHandlerInerface{

	/**
	 * This variable  represents the session ID.
	 *
	 * @var String
	 */
	private $sid=null;

	/**
	 * (non-PHPdoc)
	 * @see core/templating/PhpSessionHandlerInerface#session_id()
	 */
	public function session_id(){
		return $this->sid;
	}


	/**
	 * (non-PHPdoc)
	 * @see core/templating/PhpSessionHandlerInerface#session_start()
	 */
	public function session_start(){
		echo'ZIZIZIZIZIZIZIZIZIZI';
		$this->sid='1';
	}
}
/**
 * This class is needed because you cannot simply use the
 * getMockForAbstractClass to the initialization, because the "environment"
 * is modeled in this particular class, it is easy to test.
 *
 */
class MockAuthClass extends Auth
{

	private $userInfo=null;

	public function authenticate($user, $pass)

	{
		if($user=='fooser' && $pass=='foopass')
		{
			return'fooser';
		}
		else
		{
			return null;
		}
	}

	public function getAuthenticatedData()
	{
		return $this->userInfo;
	}

	public function storeAuthenticatedData($data)
	{
		$this->userInfo=$data;
	}

	public  function flushAuthenticatedData()
	{
		$this->storeAuthenticatedData(null);
	}
}
?>