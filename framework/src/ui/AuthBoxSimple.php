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

/**
 * This class is the most convinient enduser implementation of the framework,
 * howewer you are boundled to it's structure. You can customise it easily with
 * yout css definitions.
 *
 */
class AuthBoxSimple extends AuthBoxFromTemplateFiles
{

	/**
	 * The constructor expects a TemplateLogout instance because from this
	 * all the other templates could got the needed information for the
	 * initialistation.
	 *
	 * @param TemplateLogout $templateLogout
	 *
	 */
	function __construct(TemplateLogout $templateLogout)
	{
		$this->setLoginTemplateFormFile('AuthBoxSimpleTemplates/login.tpl');
		$this->setLogoutTemplateFromFile('AuthBoxSimpleTemplates/logout.tpl');
		$this->setLoginCaptchaTemplateFromFile('AuthBoxSimpleTemplates/login_captcha.tpl');

		parent::__construct($templateLogout);
	}
}
?>