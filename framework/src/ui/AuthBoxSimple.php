<?php
 /** Copyright 2010 Imre Toth <tothimre at gmail>

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
namespace Uacp\Ui;
/**
 * This class is the most convenient end user implementation of the framework,
 * however you are bounded to it's structure. You can customize it easily with
 * your css definitions.
 *
 * @package Uacp\Ui
 * @author Imre Toth <tothimre@gmail.com>
 * @license apache2
 * 
 */
class AuthBoxSimple extends AuthBoxFromDirectory
{
  /**
  The constructor expects a TemplateLogout instance because from this
  all the other templates could got the needed information for the
  initialization.

  @param TemplateLogout $templateLogout
   
  */
  function __construct($InterfaceAuth, $getUserNameInterface)
  {
    parent::__construct($InterfaceAuth,$getUserNameInterface,
                                                      'AuthBoxSimpleTemplates');
  }

  /**
   * this little hack helps to load the default templates
   *
   * @return boolean
   */
  protected function fileExist(){
    return true;
  }
}
