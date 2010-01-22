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
 * 
 * The implemetations of this class take care for the user iterface.
 * 
 * @abstract
 * 
 */
	
abstract class AuthBoxProto
{
	/** 
	 * @var String
	 * This variable
	 */
	protected $authTemplate=null;
	
	/*		
	 * $tmplElements['CaptchaImage']=$this->getCaptchaImage();
	 * $tmplElements['CaptchaInputString']=$this->getCaptchaString();
	 */
	private $uacp_tpl_login=null;	
	private $uacp_tpl_logout=null;
	private $uacp_tpl_login_captcha=null;	
	
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
		$this->templateLogout=$templateLogout;
		
		//TODO ifs
		$templateLogout->setTemplate($this->uacp_tpl_logout);
		$templateLogin=new TemplateLogin($this->uacp_tpl_login,$templateLogout->getHandlerUrl());
		$templateLoginCaptcha=new TemplateLoginCaptcha($this->uacp_tpl_login_captcha,$templateLogout->getHandlerUrl());
		
		$this->authTemplate=new AuthTemplate($templateLogout,$templateLogin,$templateLoginCaptcha);
	}
	
	
	/**
	 * This function is the reashon why this cass defined. Represents your 
	 * login solution by it's state, wether the user logged in or not.
	 * 
	 * @return String
	 */
	public function show()
	{
		return $this->authTemplate->show();
	}
	
	/**
	 * Sets the string value of the $uacp_tpl_login variable
	 *
	 */
	protected function setLoginTemplate($tpl){
		$this->uacp_tpl_login=$tpl;
	}
	
	/**
	 * Sets the string value of the $uacp_tpl_logout variable
	 *
	 */
	protected function setLogoutTemplate($tpl){
		$this->uacp_tpl_logout=$tpl;
	}
	
	/**
	 * Sets the string value of the $uacp_tpl_login_captcha variable
	 *
	 */
	protected function setLoginCaptchaTemplate($tpl){
		$this->uacp_tpl_login_captcha=$tpl;
	}
}
?>